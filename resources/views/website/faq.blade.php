@extends('layouts.frontend-app')
@section('content')
<style>
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
        <h5>PPP FAQ</h5>
        <hr>
    </div>
</div>
<div class="container">
    <!-- Row start -->
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- Card start -->
				<div class="card">
                    <div class="card-body">
                        
                        <!-- Faq start -->
                        @foreach($faqs as $key => $faq)
                        <div class="accordion" id="faqAccordion{{$key+1}}">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne{{$key+1}}">
                                    <!--<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$key+1}}" aria-expanded="true" aria-controls="collapseOne">-->
                                    <!--    {{$key+1}}. Who can sell items?-->
                                    <!--</button>-->
                                     <a class="accordion-button" data-bs-toggle="collapse" href="#collapseOne{{$key+1}}" aria-expanded="true" aria-controls="collapseOne{{$key+1}}{{$key+1}}">
                                       {{$key+1}}. {{$faq->question}}?
                                      </a>
                                </h2>
                                <div id="collapseOne{{$key+1}}" class="accordion-collapse collapse show" aria-labelledby="headingOne{{$key+1}}" data-bs-parent="#faqAccordion{{$key+1}}">
                                    <div class="accordion-body">
                                        <p>{{$faq->answer}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Faq end -->
                        @if(count($faqs)<1)
                        <p class="text-center">No Faqs.......</p>
                        @endif
                    </div>
                </div>
				<!-- Card end -->

			</div>
		</div>
		<!-- Row end -->
</div>
<!--End of Activity Area-->
@endsection