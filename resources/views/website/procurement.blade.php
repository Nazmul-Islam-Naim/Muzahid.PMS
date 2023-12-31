@extends('layouts.frontend-app')
@section('content')
<style>
   table.dataTable th {
    background: #186b59;
  }
  .titleBackground{
        background-color: #30c982;
        padding-top: 18px;
        padding-bottom: 0px;
        border-radius: 5px;
        text-align: center;
    }
    h5{
        color: white;
    }
</style>

<!--Activity Area Start-->
<div>
    <div class="container titleBackground mt-5">
        <h5>PPP Projects in Procurement Phase</h5>
    <hr>
    </div>
</div>
<div class="container">
    
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-bordered " id="example" style="width:100%"> 
            <thead> 
              <tr> 
                <th>Sl</th>
                <th>Sector</th>
                <th>Project Name</th>
                <th>Current Status</th>
                <th>View</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
</div>
</div>
<!--End of Activity Area-->
{!!Html::script('custom/js/jquery.min.js')!!}
<script src="{{asset('custom/yajraTableJs/jquery.js')}}"></script>
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
			ajax: "{{route('phase','procurement-phase')}}",
      "lengthMenu": [[ 100, 150, 250, -1 ],[ '100', '150', '250', 'All' ]],
      dom: 'frtip',
			aaSorting: [[0, "asc"]],

			columns: [
        {
          data: 'DT_RowIndex',
        },
        {
          data: 'sector.name',
        },
				{
          data: 'name',
          render: function(data, type, row) {
            var url = '{{route("project-profiles",":id")}}'; 
            var url = url.replace(':id', row.slug);
            return '<a href=' + url +'>'+ data +'</a>';
          }
        },
				{
          data: 'subphase.name',
          render: function(data, type, row) {
            if (data != null) {
                var pTag = '<p style="font-size:12px; margin:0px; padding:0px">' + data + '</p>' + '<p style="font-size:12px; margin:0px; padding:0px">( ' + row.phase.name + ' )</p>';
              return pTag;
            } else {
              return '';
            }
					}
        },
        {
          data: 'Profile',
          render: function(data, type, row) {
            var url = '{{route("project-profiles",":id")}}'; 
            var url = url.replace(':id', row.slug);
            return '<a href=' + url +'><u>'+ 'Profile' +'</u></a>';
          }
        }
			]
    });
});
</script>
@endsection