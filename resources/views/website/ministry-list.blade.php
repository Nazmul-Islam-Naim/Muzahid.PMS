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
            background: #186B59;
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
                    <button class="headerNavBtn"> Ministries </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div class="col-4" style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Sectors </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div class="col-4 " style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Projects </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
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
                    <button class="headerNavBtn"> Identification  </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 " style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Development  </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 " style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Procurement  </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div class="col-6 col-sm-4 col-md-3 " style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Award </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>
            </div>
        </div>


        <div class="container d-flex flex-column align-items-center justify-content-center mb-5">
            <div class=" d-flex  align-items-center  justify-content-center mb-3">
                <button class="headerNavBtn"> Implementation Stage </button>
                <div class="headerNavBtn-badge"> 1700 </div>
            </div>
            <div class="d-flex flex-wrap items-center justify-content-center gap-3">
              <div class="d-flex items-center">
              <button type="button" class="headerNavSubBtn btn btn-secondary mb-1 rounded-0"> CP </button>
              <div class="headerNavBtn-badge"> 1700 </div>
              </div>
              <div class="d-flex items-center">
                <button type="button" class="headerNavSubBtn btn btn-success mb-1 rounded-0"> Constructions </button>
                <div class="headerNavBtn-badge"> 1700 </div>
                </div>
                <div class="d-flex items-center">
                  <button type="button" class="headerNavSubBtn btn btn-danger mb-1 rounded-0"> Operations </button>
                  <div class="headerNavBtn-badge"> 1700 </div>
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
            <h5>PPP Ministry List</h5>
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
                                <th>Ministry</th>
                                <th>Contracting Authorities</th>
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
    {!! Html::script('custom/js/jquery.min.js') !!}
    <script src="{{ asset('custom/yajraTableJs/jquery.js') }}"></script>
    <script>
        $(document).ready(function() {
            'use strict';
            var table = $('#example').DataTable({
                serverSide: true,
                processing: true,
                deferRender: true,
                ajax: "{{ route('ministries') }}",
                "lengthMenu": [
                    [100, 150, 250, -1],
                    ['100', '150', '250', 'All']
                ],
                dom: 'frtip',
                aaSorting: [
                    [0, "asc"]
                ],

                columns: [{
                        data: 'DT_RowIndex',
                    },
                    {
                        data: 'name',
                        render: function(data, type, row) {
                            return data;
                        }
                    },
                    {
                        data: 'name',
                        render: function(data, type, row) {
                            return row.agencies.length;
                        }
                    },
                    {
                        data: 'name',
                        render: function(data, type, row) {
                            return row.ministry_projects.length;
                        }
                    },
                    {
                        data: 'Projects',
                        render: function(data, type, row) {
                            var url = '{{ route('contracting-authority', ':id') }}';
                            var url = url.replace(':id', row.slug);
                            return '<a href=' + url + '><u>' + 'Contracting Authority' + '</u></a>';
                        }
                    }
                ]
            });
        });
    </script>
@endsection
