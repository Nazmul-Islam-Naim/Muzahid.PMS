@extends('layouts.frontend-app')
@section('content')
    <style>
        table.dataTable th {
            background: #186b59;
        }


        /* // new navbar styles =======================
            ==================================================> */

        .headerNavBtn {
            width: 150px;
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
            background: indigo;
            color: white;
            font-size: 0.8rem;
            font-weight: 600;
            height: 30px;
            width: 60px;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 100%;
            height: 3px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: none;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: none;
        }


        /* // header responsive */
        /* @media only screen and (max-width: 700px) {
                .navbar-main-container {
                    padding-top: 3rem;
                    padding-bottom: 9rem;
                    flex-wrap: wrap;
                }

            } */
    </style>


    {{-- navbar area start here ============================
==============================================> --}}


    <section>

        {{-- top header start here ==========
      ===========================================> --}}
        <div class="custom-scrollbar" style="overflow-x:scroll; margin: 2rem 0;">
            <div class="container d-flex align-items-center gap-2">

                <div style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Number Of Ministry </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Number Of Sector </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Number Of Projects </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

            </div>
        </div>
        {{-- top header end here ==========
      ===========================================> --}}


        {{-- middle header end here ==========
      ===========================================> --}}

        <div class="custom-scrollbar" style="overflow-x:scroll; margin-bottom: 2rem;">
            <div class="container d-flex align-items-center gap-2">

                <div style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Number Of Ministry </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Number Of Ministry </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Number Of Ministry </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Number Of Ministry </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

                <div style="display:flex; align-items-center">
                    <button class="headerNavBtn"> Number Of Ministry </button>
                    <div class="headerNavBtn-badge"> 1700 </div>
                </div>

            </div>
        </div>

        {{-- middle header end here ==========
      ===========================================> --}}



      {{-- end header start start =========================
      ====================================================> --}}

      <div class="custom-scrollbar" style="overflow-x:scroll; margin-bottom: 3rem;">
        <div class="container d-flex align-items-center gap-2">

                <button  type="button" class="headerNavBtn btn btn-secondary"> CP </button>

                <button v class="headerNavBtn btn btn-success"> Constraction </button>

                <button  type="button" class="headerNavBtn btn btn-danger"> Operation </button>

        </div>
    </div>
      
      {{-- end header end here =========================
      ====================================================> --}}


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
