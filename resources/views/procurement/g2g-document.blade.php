@extends('layouts.layout')
@section('title', 'G2G Document')
@section('content')
<!-- Content Header (Page header) -->
<?php
  $baseUrl = URL::to('/');
?>
<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

  <!-- Content wrapper start -->
  <div class="content-wrapper">
    <!-- Row start -->
    <div class="row gutters">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        @include('common.message')
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        @if(!empty($single_data))
          {!! Form::open(array('route' =>['g2g-document.update', $single_data->id],'method'=>'PUT','files'=>true)) !!}
          <?php $info ="Update";?>
        @else
        {!! Form::open(array('route' =>['g2g-document.store'],'method'=>'POST','files'=>true,'enctype'=>'multipart/form-data')) !!}
          <?php $info ="Add";?>
        @endif
        <div class="card">
          <div class="card-header">
            <div class="card-title">{{$info}} G2G Document</div>
          </div>
          <div class="card-body">
            <!-- Row start -->
            <div class="row gutters">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <!----------------- project -------------------------->
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                  <div class="input-group">
                    @if(!empty($single_data))
                    <input type="text" value="{{$single_data->project->name}}"  readonly="">
                    @else
                    <select name="project_id" class="form-control select-single js-states" data-live-search="true" requried="" autocomplete="off">
                      <option value="">Select</option>
                      @foreach( $allproject as $project)
                      <option value="{{$project->id}}" {{(!empty($single_data) && $project->id == $single_data->project_id) ? 'selected':''}}>{{$project->name}}</option>
                      @endforeach
                    </select>
                    @endif
                  </div>
                  <div class="field-placeholder">Project<span class="text-danger">*</span></div>
                </div>
                <!-- Field wrapper end -->
                <!-----------------Country -------------------------->
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                  <div class="input-group">
                    <select name="country_id" class="form-control select-single js-states" data-live-search="true" requried="" autocomplete="off">
                      <option value="">Select</option>
                      @foreach( $allcountry as $country)
                      <option value="{{$country->id}}" {{(!empty($single_data) && ($country->id == $single_data->country_id)) ? 'selected':''}}>{{$country->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="field-placeholder">Country<span class="text-danger">*</span></div>
                </div>
                <!-- Field wrapper end -->
                <!-----------------doc -------------------------->
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                  <div class="input-group">
                    <input class="form-control" type="file" name="document" value="" autocomplete="off">
                  </div>
                  <div class="field-placeholder">Document</div>
                </div>
                <!-- Field wrapper end -->
                <!-- Field wrapper end -->
                <!----------------- date -------------------------->
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                  <div class="input-group">
                    <input class="form-control" type="date" name="date" value="{{(!empty($single_data->date))?$single_data->date:''}}" required="" autocomplete="off">
                  </div>
                  <div class="field-placeholder">Date<span class="text-danger">*</span></div>
                </div>
                <!-- Field wrapper end -->
                <!----------------- des -------------------------->
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                  <div class="input-group">
                    <textarea name="des">{{(!empty($single_data->des))?$single_data->des:''}}</textarea>
                  </div>
                  <div class="field-placeholder">Description</div>
                </div>
                <!-- Field wrapper end -->
              </div>
            </div>
            <!-- Row end -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button class="btn btn-primary" type="submit">{{$info}}</button>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
        <div class="card card-primary">
          <div class="card-header d-flex justify-content-between align-items-center">
              <h3 class="card-title">G2G Documents</h3>
            </div>
          <!-- /.box-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered" id="example" style="width:100%"> 
                    <thead> 
                      <tr> 
                        <th>Sl</th>
                        <th>Date</th>
                        <th>Project Name</th>
                        <th>Country</th>
                        <th>Document</th>
                        <th width="15%">Action </th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <div class="card-footer"></div>
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- Row end -->
  </div>
  <!-- Content wrapper end -->
</div>
<!-- Content wrapper scroll end -->
{!!Html::script('custom/yajraTableJs/jquery.js')!!}
<!-- {!!Html::script('custom/yajraTableJs/yajraDateTime.js')!!}
{!!Html::script('custom/yajraTableJs/newAjax.moment.js')!!}
{!!Html::script('custom/yajraTableJs/dataTable.js')!!}
{!!Html::script('custom/yajraTableJs/query.dataTables1.12.1.js')!!} -->
<script>
   // ==================== date format ===========
   function dateFormat(data) { 
    let date, month, year;
    date = data.getDate();
    month = data.getMonth() + 1;
    year = data.getFullYear();

    date = date
        .toString()
        .padStart(2, '0');

    month = month
        .toString()
        .padStart(2, '0');

    return `${date}-${month}-${year}`;
  }
	$(document).ready(function() {
		'use strict';
      var table = $('#example').DataTable({
			serverSide: true,
			processing: true,
      deferRender : true,
			ajax: "{{route('g2g-document.index')}}",
      "lengthMenu": [[ 100, 150, 250, -1 ],[ '100', '150', '250', 'All' ]],
      dom: 'Blfrtip',
        buttons: [
            'copy',
            {
                extend: 'excel',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                },
                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
            },
            {
                extend: 'print',
                title:"",
                messageTop: function () {
                  var top = '<center><p class ="text-center"><img src="{{asset("upload/logo")}}/header_pppo.jpg" width="100%" /></p></center>';
                  return top;
                },
                customize: function (win){
                $(win.document.body).addClass('white-bg');
                $(win.document.body).css('font-size', '10px');
 
                $(win.document.body).find('table').css('font-size', 'inherit');
 
                $(win.document.body).find('table thead th').css('border','1px solid #ddd');  
                $(win.document.body).find('table tbody td').css('border','1px solid #ddd'); 
                $(win.document.body).css("height", "auto").css("min-height", "0");
                },
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                },
                messageBottom: null
            }
        ],
			aaSorting: [[0, "asc"]],

			columns: [
        {
          data: 'DT_RowIndex',
        },
				{
          data: 'date',
          render: function(data, type, full, meta) {
						if (data != null) {
							return dateFormat(new Date(data)).toString();
						}
					}
        },
				{data: 'project.name'},
				{data: 'country.name'},
        {
          data: 'document',
          render: function(data, type, row) { 
            if (data != null) {
              var url = '{{asset("upload/g2g/".":doc")}}'; 
              var url = url.replace(':doc', data);
              return "<a href='"+ url +"' target='_blank' class='btn btn-sm btn-default btn-status-active' data-id='" + row.id + "'><i class='fa fa-file-pdf-o'  aria-hidden='true'></i></a>";
            } else {
              return "<a href='#' class='btn btn-sm btn-default btn-status-active'>---</a>";
            }
					}
        },
				{data: 'action'},
			]
    });

    //-------- Delete single data with Ajax --------------//
$("#example").on("click", ".button-delete", function(e) {
			e.preventDefault();

			var confirm = window.confirm('Are you sure want to delete data?');
			if (confirm != true) {
				return false;
			}
			var id = $(this).data('id');
			var url = '{{route("g2g-document.destroy",":id")}}';
			var url = url.replace(':id', id);
			var token = '{{csrf_token()}}';
			$.ajax({
				url: url,
				type: 'POST',
				data: {
					'_method': 'DELETE',
					'_token': token
				},
				success: function(data) {
					table.ajax.reload();
					console.log('success');
					successNotification(data.message);
				},

			});
});

});

</script>
@endsection 