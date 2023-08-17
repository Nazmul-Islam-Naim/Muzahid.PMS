@extends('layouts.frontend-app')
@section('content')

<!-- Apex Charts -->
{!!Html::script('custom/js/jquery.min.js')!!}
{!!Html::script('custom/vendor/apex/apexcharts.min.js')!!}
{!!Html::script('custom/vendor/apex/examples/column/project-phase.js')!!}
{!!Html::script('custom/vendor/apex/examples/column/project-sector.js')!!}
{!!Html::script('custom/vendor/apex/examples/column/project-ministry.js')!!}

<!--Activity Area Start-->
<div>
    <div class="container text-center mt-5">
        <h3>Graph</h3>
    </div>
</div>
<div class="container">
    <!-- Row start -->
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- Card start -->
				<div class="card">
                    <div class="card-body">
                        <h3 class="mb-3">Phases: Here title is phase name and number is projects.</h3>
                        <div class="div" id="project-phase"></div>
                        <h3 class="mb-3">Sectors: Here title is sector name and number is projects.</h3>
                        <div class="div" id="project-sector"></div>
                        <h3 class="mb-3">Ministries: Here title is ministry name and number is projects.</h3>
                        <div class="div" id="project-ministry"></div>
                    </div>
                </div>
				<!-- Card end -->

			</div>
		</div>
		<!-- Row end -->
</div>
<!--End of Activity Area-->
@endsection