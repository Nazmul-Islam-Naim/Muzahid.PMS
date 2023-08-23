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
      color: white;
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

  
  .titleBackground{
        background-color: #af3ec6;
        padding-top: 18px;
        padding-bottom: 0px;
        border-radius: 5px;
        text-align: center;
    }
    h5{
        color: white;
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
              <a href="{{route('ministries')}}" class="headerNavBtn" style="background-color:#E40C78">Ministries </a>
              <div class="headerNavBtn-badge" style="background-color:#E40C78"> {{$ministries}} </div>
          </div>

          <div class="col-4" style="display:flex; align-items-center">
              <a href="{{route('sectors')}}" class="headerNavBtn" style="background-color:#af3ec6"> Sectors</a>
              <div class="headerNavBtn-badge" style="background-color:#af3ec6"> {{$sectors}} </div>
          </div>

          <div class="col-4 " style="display:flex; align-items-center">
              <a href="{{route('web-project-list')}}" class="headerNavBtn" style="background-color:#1d7dd6"> Projects</a> 
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
              <a href="{{route('phase', 'identification-phase')}}" class="headerNavBtn" style="background-color:#14acce"> Identification  </a>
              <div class="headerNavBtn-badge" style="background-color:#14acce"> {{$identitifications}} </div>
          </div>

          <div class="col-6 col-sm-4 col-md-3 " style="display:flex; align-items-center">
              <a href="{{route('phase', 'development-phase')}}" class="headerNavBtn" style="background-color:#2bc2c0"> Development  </a>
              <div class="headerNavBtn-badge" style="background-color:#2bc2c0"> {{$developments}} </div>
          </div>

          <div class="col-6 col-sm-4 col-md-3 " style="display:flex; align-items-center">
              <a href="{{route('phase', 'procurement-phase')}}" class="headerNavBtn" style="background-color:#30c982"> Procurement  </a>
              <div class="headerNavBtn-badge" style="background-color:#30c982"> {{$procurements}} </div>
          </div>

          <div class="col-6 col-sm-4 col-md-3 " style="display:flex; align-items-center">
              <a href="{{route('phase', 'award-phase')}}" class="headerNavBtn" style="background-color:#16a396"> Award </a>
              <div class="headerNavBtn-badge" style="background-color:#16a396"> {{$awards}} </div>
          </div>
      </div>
  </div>


  <div class="container d-flex flex-column align-items-center justify-content-center mb-5">
      <div class=" col-sm-12 col-md-12 d-flex  align-items-center  justify-content-center mb-3" style="background-color:#cd2182" >
          <a href="{{route('phase', 'implementation-phase')}}" class="headerNavBtn" style="background-color:#cd2182"> Implementation Stage </a>
          <div class="headerNavBtn-badge" style="background-color:#cd2182"> {{$implementations}} </div>
      </div>
      <div class="d-flex flex-wrap items-center justify-content-center gap-3">
        <div class="d-flex items-center">
        <a href="{{route('cp-obligations')}}" class="headerNavSubBtn btn btn-secondary mb-1 rounded-0" style="background-color:#b23939"> CP </a>
        <div class="headerNavBtn-badge" style="background-color:#b23939"> {{$cps}} </div>
        </div>
        <div class="d-flex items-center">
          <a href="{{route('construction-begins')}}" class="headerNavSubBtn btn btn-success mb-1 rounded-0" style="background-color:#266faf"> Constructions </a>
          <div class="headerNavBtn-badge" style="background-color:#266faf"> {{$constructions}} </div>
          </div>
          <div class="d-flex items-center">
            <a href="{{route('operations')}}" class="headerNavSubBtn btn btn-danger mb-1 rounded-0" style="background-color:#1dbad6"> Operations </a>
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
    <div class="container titleBackground mt-5">
        <h5>PPP Sector List</h5>
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
                <th>Number of Project</th>
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
	$(document).ready(function() {
		'use strict';
      var table = $('#example').DataTable({
			serverSide: true,
			processing: true,
      deferRender : true,
			ajax: "{{route('sectors')}}",
      "lengthMenu": [[ 100, 150, 250, -1 ],[ '100', '150', '250', 'All' ]],
      dom: 'frtip',
			aaSorting: [[0, "asc"]],

			columns: [
        {
          data: 'DT_RowIndex',
        },
        {
          data: 'name',
          render:function(data, type, row){
            return data;
          }
        },
        {
          data: 'name',
          render:function(data, type, row){
            return row.sector_projects.length;
          }
        },
        {
          data: 'Projects',
          render: function(data, type, row) {
            var url = '{{route("sector-porject-list",":id")}}'; 
            var url = url.replace(':id', row.slug);
            return '<a href=' + url +'><u>'+ 'Projects' +'</u></a>';
          }
        }
			]
    });
});
</script>
@endsection