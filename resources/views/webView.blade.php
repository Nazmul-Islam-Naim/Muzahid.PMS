@extends('layouts.frontend-app')
@section('content')
<style>
  table.dataTable th {
      background: #186b59;
  }


  /* // new navbar styles =======================
          ==================================================> */

  .headerNavBtn {
      width: 200px;
      height: 30px;
      display: flex;
      align-items: center;
      padding: 0px 10px;
      border: none;
      outline: none;
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.7px;
  }

  .headerNavSubBtn{
    width: 180px;
      height: 30px;
      display: flex;
      align-items: center;
      padding: 0px 10px;
      border: none;
      outline: none;
      font-size: 0.7rem;
      font-weight: 600;
      letter-spacing: 0.7px;
  }

  .headerNavBtn-badge {
      background: #6e807c;
      color: white;
      font-size: 0.8rem;
      font-weight: 600;
      height: 30px;
      width: 60px;
      display: flex;
      align-items: center;
      justify-content: center
  }


  /* // header responsive */
  @media only screen and (max-width: 650px) {
      .headerNavBtn {
          width: 250px;
      }

  }
</style>


{{-- navbar area start here ============================
==============================================> --}}


<section>

  {{-- top header start here ==========
===========================================> --}}
  <div class="container d-flex align-items-center justify-content-center my-4">

      <div class="row  g-3">
          <div class="col-4" style="display:flex; align-items-center">
              <button class="headerNavBtn" style="background-color:#E40C78"> Ministries </button>
              <div class="headerNavBtn-badge" style="background-color:#E40C78"> {{$ministries}} </div>
          </div>

          <div class="col-4" style="display:flex; align-items-center">
              <button class="headerNavBtn" style="background-color:#af3ec6"> Sectors </button>
              <div class="headerNavBtn-badge" style="background-color:#af3ec6"> {{$sectors}} </div>
          </div>

          <div class="col-4 " style="display:flex; align-items-center">
              <button class="headerNavBtn" style="background-color:#1d7dd6"> Projects </button>
              <div class="headerNavBtn-badge" style="background-color:#1d7dd6"> {{$projects}} </div>
          </div>
      </div>

  </div>
  {{-- top header end here ==========
===========================================> --}}


  {{-- middle header end here ==========
===========================================> --}}

  <div class="container d-flex flex-wrap align-items-center  justify-content-center gap-2 mb-4">

      <div class="row g-3">
          <div class="col-6 col-sm-4 col-md-3 " style="display:flex; align-items-center">
              <button class="headerNavBtn" style="background-color:#14acce"> Identification  </button>
              <div class="headerNavBtn-badge" style="background-color:#14acce"> {{$identitifications}} </div>
          </div>

          <div class="col-6 col-sm-4 col-md-3 " style="display:flex; align-items-center">
              <button class="headerNavBtn" style="background-color:#2bc2c0"> Development  </button>
              <div class="headerNavBtn-badge" style="background-color:#2bc2c0"> {{$developments}} </div>
          </div>

          <div class="col-6 col-sm-4 col-md-3 " style="display:flex; align-items-center">
              <button class="headerNavBtn" style="background-color:#30c982"> Procurement  </button>
              <div class="headerNavBtn-badge" style="background-color:#30c982"> {{$procurements}} </div>
          </div>

          <div class="col-6 col-sm-4 col-md-3 " style="display:flex; align-items-center">
              <button class="headerNavBtn" style="background-color:#d69e1d"> Award </button>
              <div class="headerNavBtn-badge" style="background-color:#d69e1d"> {{$awards}} </div>
          </div>
      </div>
  </div>


  <div class="container d-flex flex-column align-items-center justify-content-center mb-5">
      <div class=" col-sm-12 col-md-12 d-flex  align-items-center  justify-content-center mb-3" style="background-color:#cd2182" >
          <button class="headerNavBtn" style="background-color:#cd2182"> Implementation Stage </button>
          <div class="headerNavBtn-badge" style="background-color:#cd2182"> {{$implementations}} </div>
      </div>
      <div class="d-flex flex-wrap items-center justify-content-center gap-3">
        <div class="d-flex items-center">
        <button type="button" class="headerNavSubBtn btn btn-secondary mb-1 rounded-0" style="background-color:#b23939"> CP </button>
        <div class="headerNavBtn-badge" style="background-color:#b23939"> {{$cps}} </div>
        </div>
        <div class="d-flex items-center">
          <button type="button" class="headerNavSubBtn btn btn-success mb-1 rounded-0" style="background-color:#266faf"> Constructions </button>
          <div class="headerNavBtn-badge" style="background-color:#266faf"> {{$constructions}} </div>
          </div>
          <div class="d-flex items-center">
            <button type="button" class="headerNavSubBtn btn btn-danger mb-1 rounded-0" style="background-color:#1dbad6"> Operations </button>
            <div class="headerNavBtn-badge" style="background-color:#1dbad6"> {{$operations}} </div>
            </div>
      </div>
  </div>

 

  {{-- middle header end here ==========
===========================================> --}}



  {{-- <div class="container d-flex align-items-center  justify-content-center gap-2">

          <button  type="button" class="headerNavBtn btn btn-secondary"> CP </button>

          <button v class="headerNavBtn btn btn-success"> Constraction </button>

          <button  type="button" class="headerNavBtn btn btn-danger"> Operation </button>

  </div> --}}




</section>


{{-- navbar area end here ============================
==============================================/> --}}

<!--Activity Area Start-->
<div>
    <div class="container mt-5">
        <h5>PPP Projects</h5>
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
			ajax: "{{route('webView')}}",
      "lengthMenu": [[ 100, 150, 250, -1 ],[ '100', '150', '250', 'All' ]],
      dom: 'frtip',
      bPaginate:true,
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