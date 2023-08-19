@extends('layouts.frontend-app')
@section('content')

<style>
    .phaseProject{
        background-color: #9b4bad;
        padding-top: 10px;
        padding-bottom: 5px;
        border-radius: 5px;
        text-align: center;
    }
    .sectorProject{
        background-color: #35a471;
        padding-top: 10px;
        padding-bottom: 5px;
        border-radius: 5px;
        text-align: center;
    }
    .ministryProject{
        background-color: #e7308b;
        padding-top: 10px;
        padding-bottom: 5px;
        border-radius: 5px;
        text-align: center;
    }
    h3{
        color: white;
    }
</style>

<!--Activity Area Start-->
<div class="container">
    <!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- Card start -->
				<div class="card">
                    <div class="card-body">
                        <div class="phaseProject">
                            <h3>Phase wise projects</h3>
                        </div>
                        <div class="div" id="project-phase"></div>
                        <div class="sectorProject">
                            <h3>Sector wise projects</h3>
                        </div>
                        <div class="div" id="project-sector"></div>
                        <div class="ministryProject">
                            <h3>Ministry wise porjects</h3>
                        </div>
                        <div id="project-ministry"></div>
                    </div>
                </div>
				<!-- Card end -->

			</div>
		</div>
		<!-- Row end -->
</div>

<!-- Apex Charts -->
{!!Html::script('custom/js/jquery.min.js')!!}
{!!Html::script('custom/vendor/apex/apexcharts.min.js')!!}
{!!Html::script('custom/vendor/apex/examples/column/project-phase.js')!!}
{!!Html::script('custom/vendor/apex/examples/column/project-sector.js')!!}
{!!Html::script('custom/vendor/apex/examples/column/project-ministry.js')!!}

<!--End of Activity Area-->
@endsection