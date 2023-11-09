@extends('layouts.layout')
@section('title', 'Country Agreement')
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
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        {!! Form::open(array('route' =>['countryAggriments.store'],'method'=>'POST','files'=>true)) !!}
        <div class="card">
          <div class="card-header">
            <div class="card-title">Add Country Agreement</div>
          </div>
          <div class="card-body">
            <!-- Row start -->
            <div class="row gutters">

              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                  <div class="input-group">
                    <select
                    name="country_id"
                    class="form-control select-single js-states @error('country_id') is-invalid @enderror"
                    data-live-search="true"
                    required
                    >
                    <option value="">Select Country</option>
                    @forelse ($countries as $country)
                        <option value="{{$country->id}}" {{($country->id == old('country_id')) ? 'selected' : ''}}>{{$country->name}}</option>
                    @empty
                    <option value="">No country found!</option>
                    @endforelse
                    </select>
                  </div>
                  <div class="field-placeholder">Country <span class="text-danger">*</span></div>
                </div>
                <!-- Field wrapper end -->
              </div>

              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                  <div class="input-group">
                    <input
                    type="text"
                    name="title"
                    class="form-control @error('title') is-invalid @enderror"
                    value="{{old('title')}}"
                    autocomplete="off">
                  </div>
                  <div class="field-placeholder">Title</div>
                </div>
                <!-- Field wrapper end -->
              </div>

              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                  <div class="input-group">
                    <input
                    type="file"
                    name="doc"
                    class="form-control @error('doc') is-invalid @enderror"
                    value="{{old('doc')}}"
                    required
                    autocomplete="off">
                  </div>
                  <div class="field-placeholder">Document <span class="text-danger">*</span></div>
                </div>
                <!-- Field wrapper end -->
              </div>

              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <!-- Field wrapper start -->
                <div class="field-wrapper">
                  <div class="input-group">
                    <input
                    type="date"
                    name="date"
                    class="form-control @error('date') is-invalid @enderror"
                    value="{{old('doc') ?? date('Y-m-d')}}"
                    required
                    autocomplete="off">
                  </div>
                  <div class="field-placeholder">Date <span class="text-danger">*</span></div>
                </div>
                <!-- Field wrapper end -->
              </div>

              <p class="text-danger">Note: document must be pdf</p>

            </div>
            <!-- Row end -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-end">
            <button class="btn btn-primary" type="submit">Save</button>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
    <!-- Row end -->
  </div>
  <!-- Content wrapper end -->
</div>
<!-- Content wrapper scroll end -->
@endsection
