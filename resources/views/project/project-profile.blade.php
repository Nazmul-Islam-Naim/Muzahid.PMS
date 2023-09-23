@extends('layouts.layout')
@section('title', 'Project Profile')
@section('content')
<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">
  <!-- Content wrapper start -->
  <div class="content-wrapper" tyle="
  max-width:1290px;
  width: 100%;
  height: 100%;
  margin: 0 auto;
  overflow:hidden
  ">
    <!-- Row start -->
    <div class="row gutters">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
        <h5 class="card-title">Profile Of "{{$single_data->name}}"</h5>
        <p><small> Updated At: {{$single_data->updated_at}}</small></p>
        <span class="badge" style="background-color: #d4a112">Running</span>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <?php
          //--------------------------------------- set progress color -----------------------------------------//
          $color1 ='';
          $color2 ='';
          $color3 ='';
          $color4 ='';
          $color5 ='';
          $notyet ='Not Yet';
          //--------------------------------------- identitification phase -----------------------------------------//
          $color1of1 = DB::table('phase_details')->where([['project_id',$single_data->id],['phase_id',1]])->count();
          $phase1details = DB::table('phase_details')->where([['project_id',$single_data->id],['phase_id',1]])->get();
          if ( ($color1of1 > 0) &&  ($color1of1 < 4) ) {
            $color1 = '#d4a112 ';
          } elseif( ($color1of1 == 4) || ($color1of1 > 4)) {
            $color1 = '#14acce';
          }else{
            $color1 = '#14acce';
          }

          //--------------------------------------- development phase -----------------------------------------//
          $color2of1 = DB::table('phase_details')->where([['project_id',$single_data->id],['phase_id',2]])->count();
          $phase2details = DB::table('phase_details')->where([['project_id',$single_data->id],['phase_id',2]])->get();
          if ( ($color2of1 > 0) && ($color2of1 < 10) ) {
            $color2 = '#d4a112 ';
          } elseif( ($color2of1 == 10) || ($color2of1 > 10)) {
            $color2 = '#2bc2c0';
          }else{
            $color2 = '#2bc2c0';
          }

          //--------------------------------------- procurement phase -----------------------------------------//
          $color3of1 = DB::table('phase_details')->where([['project_id',$single_data->id],['phase_id',3]])->count();
          $phase3details = DB::table('phase_details')->where([['project_id',$single_data->id],['phase_id',3]])->get();
          if ( ($color3of1 > 0) &&  ($color3of1 < 8) ) {
            $color3 = '#d4a112 ';
          } elseif( ($color3of1 == 8) || ($color3of1 > 8)) {
            $color3 = '#30c982';
          }else{
            $color3 = '#30c982';
          }

          //--------------------------------------- award phase -----------------------------------------//
          $color4of1 = DB::table('phase_details')->where([['project_id',$single_data->id],['phase_id',4]])->count();
          $phase4details = DB::table('phase_details')->where([['project_id',$single_data->id],['phase_id',4]])->get();
          if ( ($color4of1 > 0) &&  ($color4of1 < 6) ) {
            $color4 = '#d4a112 ';
          } elseif( ($color4of1 == 6) || ($color4of1 > 6)) {
            $color4 = '#16a396';
          }else{
            $color4 = '#16a396';
          }

          //--------------------------------------- implementation phase -----------------------------------------//
          $color5of1 = DB::table('phase_details')->where([['project_id',$single_data->id],['phase_id',5]])->count();
          $phase5details = DB::table('phase_details')->where([['project_id',$single_data->id],['phase_id',5]])->get();
          if ( ($color5of1 > 0) &&  ($color5of1 < 3) ) {
            $color5 = '#d4a112 ';
          } elseif( ($color5of1 == 3) || ($color5of1 > 3)) {
            $color5 = '#cd2182';
          }else{
            $color5 = '#cd2182';
          }
        ?>
        <div class="progress" style="height:35px ; background:#ffffff; margin-top: 10px;">
          <div class="progress-bar" role="progressbar" style="background-color:{{$color1??'#14acce'}}; width: 20%; padding:19px; border-radius:0px;margin-right:15px" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
            <p>
              <a class="btn" id="Ident" style="background-color:{{$color1??'#14acce'}}; color:white;" data-bs-toggle="collapse" href="#Identification" role="button" aria-expanded="false" aria-controls="Identification">
                Identification
              </a>
            </p>
          </div>
          <div class="progress-bar" role="progressbar" style="background-color:{{$color2??'#2bc2c0'}}; width: 20%; padding:19px; border-radius:0px;margin-right:15px" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
            <p>
              <a class="btn" id="Dev" style="background-color:{{$color2??'#2bc2c0'}}; color:white;" data-bs-toggle="collapse" href="#Development" role="button" aria-expanded="false" aria-controls="Development">
              Development
              </a>
            </p>
          </div>
          <div class="progress-bar" role="progressbar" style="background-color:{{$color3??'#30c982'}}; width: 20%; padding:19px; border-radius:0px;margin-right:15px" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
            <p>
              <a class="btn" id="Pro" style="background-color:{{$color3??'#30c982'}}; color:white;" data-bs-toggle="collapse" href="#Procurement" role="button" aria-expanded="false" aria-controls="Procurement">
              Procurement
              </a>
            </p>
          </div>
          <div class="progress-bar" role="progressbar" style="background-color:{{$color4??'#16a396'}};width: 20%; padding:19px; border-radius:0px;margin-right:15px" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
            <p>
              <a class="btn" id="Awa" style="background-color:{{$color4??'#16a396'}}; color:white;" data-bs-toggle="collapse" href="#Award" role="button" aria-expanded="false" aria-controls="Award">
                Award
              </a>
            </p>
          </div>
          <div class="progress-bar" role="progressbar" style="background-color:{{$color5??'#cd2182'}};width: 20%; padding:19px; border-radius:0px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
            <p>
              <a class="btn" id="Imp" style="background-color:{{$color5??'#cd2182'}}; color:white;" data-bs-toggle="collapse" href="#Implementation" role="button" aria-expanded="false" aria-controls="Implementation">
                Implementation
              </a>
            </p>
          </div>
        </div>
        <div class="collapse mt-2" id="Identification">
            <div class="card card-body" style="background-color:{{$color1??'#14acce'}}; color:white;">
              <div class="table-responsive">
                  <table class="table table-bordered" style="background-color:{{$color1??'#14acce'}}; color:white;">
                      <tbody>
                        <tr>
                          <td colspan="3" style="text-align:center">Identification Phase Status</td>
                        </tr>
                        <tr>
                          <td>Date</td>
                          <td colspan="2">Description</td>
                        </tr>
                        @if(count($phase1details))
                        @foreach($phase1details as $p1d)
                        <tr>
                          <td>{{date('d-m-Y',strtotime($p1d->date))}}</td>
                          <td colspan="2">{{$p1d->des}}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                          <td colspan="3" style="text-align:center">No data found...........</td>
                        </tr>
                        @endif
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
        <div class="collapse mt-2" id="Development">
            <div class="card card-body" style="background-color:{{$color2??'#2bc2c0'}}; color:white;">
              <div class="table-responsive">
                <table class="table table-bordered" style="background-color:{{$color2??'#2bc2c0'}}; color:white;">
                    <tbody>
                      <tr>
                        <td colspan="3" style="text-align:center; color:#fff;">Development Phase Status</td>
                      </tr>
                      <tr>
                        <td  sytle="color:#fff">Date</td>
                        <td colspan="2"  sytle="color:#fff">Description</td>
                      </tr>
                      @if(count($phase2details))
                      @foreach($phase2details as $p2d)
                      <tr>
                        <td>{{date('d-m-Y',strtotime($p2d->date))}}</td>
                        <td colspan="2"  sytle="color:#fff">{{$p2d->des}}</td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <td colspan="3" style="text-align:center; color:#fff;">No data found...........</td>
                      </tr>
                      @endif
                    </tbody>
                </table>
              </div>
            </div>
        </div>
        <div class="collapse mt-2" id="Procurement">
            <div class="card card-body" style="background-color:{{$color3??'#30c982'}}; color:white;">
              <div class="table-responsive">
                <table class="table table-bordered" style="background-color:{{$color3??'#30c982'}}; color:white;">
                    <tbody>
                      <tr>
                        <td colspan="3" style="text-align:center">Procurement Phase Status</td>
                      </tr>
                      <tr>
                        <td>Date</td>
                        <td colspan="2">Description</td>
                      </tr>
                      @if(count($phase3details))
                      @foreach($phase3details as $p3d)
                      <tr>
                        <td>{{date('d-m-Y',strtotime($p3d->date))}}</td>
                        <td colspan="2">{{$p3d->des}}</td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <td colspan="3" style="text-align:center">No data found...........</td>
                      </tr>
                      @endif
                    </tbody>
                </table>
              </div>
            </div>
        </div>
        <div class="collapse mt-2" id="Award">
            <div class="card card-body" style="background-color:{{$color4??'#42cbb8'}}; color:white;">
              <div class="table-responsive">
                <table class="table table-bordered" style="background-color:{{$color4??'#42cbb8'}}; color:white;">
                    <tbody>
                      <tr>
                        <td colspan="3" style="text-align:center">Award Phase Status</td>
                      </tr>
                      <tr>
                        <td>Date</td>
                        <td colspan="2">Description</td>
                      </tr>
                      @if(count($phase4details))
                      @foreach($phase4details as $p4d)
                      <tr>
                        <td>{{date('d-m-Y',strtotime($p4d->date))}}</td>
                        <td colspan="2">{{$p4d->des}}</td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <td colspan="3" style="text-align:center">No data found...........</td>
                      </tr>
                      @endif
                    </tbody>
                </table>
              </div>
            </div>
        </div>
        <div class="collapse mt-2" id="Implementation">
            <div class="card card-body" style="background-color:{{$color5??'#cd2182'}}; color:white;">
              <div class="table-responsive">
                <table class="table table-bordered" style="background-color:{{$color5??'#cd2182'}}; color:white;">
                    <tbody>
                      <tr>
                        <td colspan="3" style="text-align:center">Implementation Phase Status</td>
                      </tr>
                      <tr>
                        <td>Date</td>
                        <td colspan="2">Description</td>
                      </tr>
                      @if(count($phase5details))
                      @foreach($phase5details as $p5d)
                      <tr>
                        <td>{{date('d-m-Y',strtotime($p5d->date))}}</td>
                        <td colspan="2">{{$p5d->des}}</td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <td colspan="3" style="text-align:center">No data found...........</td>
                      </tr>
                      @endif
                    </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card card-primary">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title"></h3>
            <a onclick="printReport();" href="javascript:0;"><img class="img-thumbnail" style="width:30px;" src='{{asset("custom/img/print.png")}}'></a>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12" id="printTable">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="example"
                     style="
                     width:100%;
                      font-size:20px;"
                     >
                      <tbody>
                        <!--<tr> -->
                        <!--  <td colspan="10" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> <h4 style="text-align:center">{{$single_data->name}}</h4> </td>-->
                        <!--</tr>-->
                        <tr>
                          <td colspan="10" style="border: 1px solid #ddd; padding: 3px 3px; text-align:center">
                            @if (!empty($single_data->image))
                            <img class="profile-user-img img-responsive " src="{{asset('upload/project/'.$single_data->image)}}" alt="User profile picture">
                            @else
                            <img class="profile-user-img img-responsive " src="{{asset('upload/logo/no-image.jpg')}}" height="45px" alt="User profile picture">
                            @endif
                          </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Information:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset"> Details </td>
                        </tr>
                        <tr style="background: #698d57; color:white;">
                          <td colspan="10" style="border: 1px solid #ddd; padding: 3px 15px; white-space: unset; text-align:left"> <b style="color:white">Project Summery</b> </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b> Project Name:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->name}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Sector:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->sector->name}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b> Location:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->location->name}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b> Area:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->area}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Background:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {!! $single_data->background !!} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Project Scope:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {!! $single_data->project_scope !!} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Objective:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {!! $single_data->objective !!} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Procurement Method:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify">
                             {{!empty($procurementPhaseDetails->g2g_basis) ? "G2G Basis: ".$procurementPhaseDetails->g2g_basis.", " : ''}}
                             {{!empty($procurementPhaseDetails->country) ? "Country: ".$procurementPhaseDetails->country.", " : ''}}
                             {{!empty($procurementPhaseDetails->procurement_type) ? "Procurement Type: ".$procurementPhaseDetails->procurement_type.", " : ''}}
                             {{!empty($procurementPhaseDetails->procurement_method) ? "Procurement Method: ".$procurementPhaseDetails->procurement_method.", " : ''}}
                             {{!empty($procurementPhaseDetails->stages) ? "Stages: ".$procurementPhaseDetails->stages.", " : ''}}
                             {{!empty($procurementPhaseDetails->envelope) ? "Envelope: ".$procurementPhaseDetails->envelope.", " : ''}}
                             {{!empty($procurementPhaseDetails->negotiation) ? "Negotiation: ".$procurementPhaseDetails->negotiation.", " : ''}}
                             {{!empty($procurementPhaseDetails->swiss_challenge) ? "Swiss Challenge: ".$procurementPhaseDetails->swiss_challenge.", " : ''}}
                          </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b> Key Features/Output:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->key_feature}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b> Economic Life:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->economic_life}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b> Contract Term:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->contract_term}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b> Construction Time:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->construction_time}} </td>
                        </tr>
                        <tr style="background: #2b7251bd; color:white">
                          <td colspan="10" style="border: 1px solid #ddd; padding: 3px 15px; white-space: unset; text-align:left"> <b style="color: white">Project Structure/Model</b> </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>PPP Structure:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->delivery_model)) ? $single_data->delivery_model : '' }} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>PPP Reveneue Model:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->revenue_model)) ? $single_data->revenue_model : '' }} </td>
                        </tr>
                        <tr style="background: #31835df7; color:white">
                          <td colspan="10" style="border: 1px solid #ddd; padding: 3px 15px; white-space: unset; text-align:left"> <b style="color: white">Project Estimated Cost per PFS/DFS</b> </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Total Estimated Capital Cost:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->capital_cost)) ? $single_data->capital_cost : '' }} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Total Project Cost:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->project_cost)) ? $single_data->project_cost : '' }} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Leverage (Debt to equity ratio):</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->leverage)) ? $single_data->leverage : '' }} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>VGF amount %:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->vgf_amount_percent)) ? $single_data->vgf_amount_percent : '' }} </td>
                        </tr>
                        <tr style="background: #2b8773; color:white">
                          <td colspan="10" style="border: 1px solid #ddd; padding: 3px 15px; white-space: unset; text-align:left"> <b style="color: white">Stakeholder Details</b> </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Grantor:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->grantor}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Division/Ministry:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->ministry->name}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Contracting Authority:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->agency->name}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Private Partner / Project Company:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{($single_data->partner->name != null)?$single_data->partner->name:'Not Yet'}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Shareholders (with Equity %):</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->shareholders}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Lenders (with amount and %):</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->lenders}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>EPC Contractor’s:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->epc_contractors}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>O & M Contractor’s:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->o_m_contractors}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Independent Engineer:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->independent_engineer}} </td>
                        </tr>
                        <tr style="background: #229999eb; color:white">
                          <td colspan="10" style="border: 1px solid #ddd; padding: 3px 15px; white-space: unset; text-align:left"> <b style="color: white">Key dates</b> </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Project Screening Date:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->screening_date)) ? date('d-m-Y',strtotime($single_data->screening_date)) : ''}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>In-Principle Approval Date:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->in_princeple_approval)) ? date('d-m-Y',strtotime($single_data->in_princeple_approval)) : ''}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Final Approval Date:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->final_approval)) ? date('d-m-Y',strtotime($single_data->final_approval)) : ''}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Concession Signing Date:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->contract_signing)) ? date('d-m-Y',strtotime($single_data->contract_signing)) : ''}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Concession Period:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify">  {{$single_data->commencement_period}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Financial Close:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify">  {{$single_data->financial_close}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Construction Commencement Date:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->commencement_date)) ? date('d-m-Y',strtotime($single_data->commencement_date)) : ''}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Construction Period:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->contract_period}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Completion Date:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->completion_date)) ? date('d-m-Y',strtotime($single_data->completion_date)) : ''}} </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Commercial Date:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{(!empty($single_data->commercial_date)) ? date('d-m-Y',strtotime($single_data->commercial_date)) : ''}} </td>
                        </tr>
                        <tr style="background: #0f6868eb; color:white">
                          <td colspan="10" style="border: 1px solid #ddd; padding: 3px 15px; white-space: unset; text-align:left"> <b style="color: white">Construction Contractor</b></b> </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{!empty($single_data->construction)?$single_data->construction->name:'Not Yet'}} </td>
                        </tr>
                        <tr style="background: #088d8deb; color:white">
                          <td colspan="10" style="border: 1px solid #ddd; padding: 3px 15px; white-space: unset; text-align:left"> <b style="color: white">TA Service Provider</b></b> </td>
                        </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{($single_data->feasibility != null)?$single_data->feasibility->name:'Not Yet'}}</td>
                        <tr>
                          <tr style="background: #067070eb; color:white">
                            <td colspan="10" style="border: 1px solid #ddd; padding: 3px 15px; white-space: unset; text-align:left"> <b style="color: white">Present Status</b></b> </td>
                          </tr>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{($single_data->phase != null)?$single_data->phase->name:'Not Yet'}} ({{($single_data->subphase != null)?$single_data->subphase->name:'Not Yet'}}) </td>
                        <tr>
                          <td style="border: 1px solid #ddd; padding: 3px 3px; text-align:right"><b>Note:</b></td>
                          <td colspan="9" style="border: 1px solid #ddd; padding: 3px 3px; white-space: unset; text-align:justify"> {{$single_data->note}} </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
    </div>
  </div>
</div>
{!!Html::script('custom/js/jquery.min.js')!!}
<script>
  $(document).ready(function () {
    //------------- identitification---------------//
    $('#Ident').click(function (e) {
      $('#Development').hide();
      $('#Procurement').hide();
      $('#Award').hide();
      $('#Implementation').hide();
      $('#Identification').show();
    });
    //------------- development---------------//
    $('#Dev').click(function (e) {
      $('#Identification').hide();
      $('#Procurement').hide();
      $('#Award').hide();
      $('#Implementation').hide();
      $('#Development').show();
    });
    //------------- procurement---------------//
    $('#Pro').click(function (e) {
      $('#Identification').hide();
      $('#Award').hide();
      $('#Implementation').hide();
      $('#Development').hide();
      $('#Procurement').show();
    });
    //------------- award---------------//
    $('#Awa').click(function (e) {
      $('#Identification').hide();
      $('#Implementation').hide();
      $('#Development').hide();
      $('#Procurement').hide();
      $('#Award').show();
    });
    //------------- implementation---------------//
    $('#Imp').click(function (e) {
      $('#Identification').hide("slow");
      $('#Development').hide("slow");
      $('#Procurement').hide("slow");
      $('#Award').hide("slow");
      $('#Implementation').show(3000);
    });
  });
</script>
@endsection
