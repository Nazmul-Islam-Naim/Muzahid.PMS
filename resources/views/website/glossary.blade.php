@extends('layouts.frontend-app')
@section('content')
<style>
   table.dataTable th {
    background: #186b59;
  }
  .titleBackground{
        background-color: #1dbad6;
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
        <h5>PPP Glossary List</h5>
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
                  <th>Acronym</th>
                  <th>Full Form</th>
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
	$(document).ready(function() {
		'use strict';
      var table = $('#example').DataTable({
			serverSide: true,
			processing: true,
      deferRender : true,
			ajax: "{{route('glossary')}}",
      "lengthMenu": [[ 100, 150, 250, -1 ],[ '100', '150', '250', 'All' ]],
      dom: 'frtip',
			aaSorting: [[0, "asc"]],

			columns: [
        {
          data: 'DT_RowIndex',
        },
        {
          data: 'acronym',
        },
        {
          data: 'full_form',
          render:function(data, type, row){
              return $('<div>').html(data).text();
          }
        }
			]
    });
});
</script>
@endsection