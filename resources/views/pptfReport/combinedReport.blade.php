@extends('layouts.layout')
@section('title', 'PPTF Combined Report')
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
        @include('common.commonFunction')
      </div>
    </div>
    <div class="row gutters">

      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">PPTF Combined Report</h3>
                
            <a onclick="printReport();" href="javascript:0;"><img class="img-thumbnail" style="width:30px;" src='{{asset("custom/img/print.png")}}'></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="col-md-12" id="printTable">
              <center><h5 style="margin: 0px">PPTF Combined Report</h5></center>
              <div class="table-responsive">
                <table class="" style="width: 100%; font-size: 12px; text-align:center" cellspacing="0" cellpadding="0">  
                  <thead> 
                  </thead>
                  <tbody> 
                    <tr > 
                      <th rowspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">Sl</th>
                      <th rowspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">Project name</th>
                      <th rowspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">Transaction Advisor (TA)</th>
                      <th rowspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">TA Appointing Authority</th>
                      <th colspan="6"  style="border: 1px solid #ddd; padding: 3px 3px">TA Contract Value</th>
                      <th colspan="6"  style="border: 1px solid #ddd; padding: 3px 3px">Paid Status</th>
                      <th colspan="6"  style="border: 1px solid #ddd; padding: 3px 3px">Unpaid/Remaining Status</th>
                      <th colspan="2"  style="border: 1px solid #ddd; padding: 3px 3px">Returned</th>
                    </tr>
                    <tr > 
                      <th colspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">USD</th>
                      <th colspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">BDT</th>
                      <th colspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">USD</th>
                      <th colspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">BDT</th>
                      <th colspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">USD</th>
                      <th colspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">BDT</th>
                      <th rowspan="2"  style="border: 1px solid #ddd; padding: 3px 3px">Development Fee</th>
                      <th rowspan="2"  style="border: 1px solid #ddd; padding: 3px 3px">Success Fee</th>
                    </tr>
                    <tr > 
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Party</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Vat</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Tax</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Party</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Vat</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Tax</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Party</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Vat</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Tax</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Party</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Vat</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Tax</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Party</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Vat</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Tax</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Party</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Vat</th>
                      <th style="border: 1px solid #ddd; padding: 3px 3px">Tax</th>
                    </tr>
                    <?php                           
                      $number = 1;
                      $numElementsPerPage = 250; // How many elements per page
                      $pageNumber = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                      $currentNumber = ($pageNumber - 1) * $numElementsPerPage + $number;
                      $rowCount = 0;

                      $sum = 0;
                      $debit = 0;
                      $credit = 0;
                    ?>
                    @foreach($combinedReports as $data)
                    <?php 
                     $rowCount++; 
                      $BDTContract = DB::table('budget_details')->where('project_id', $data->project_id)
                                      ->where('firm_id', $data->firm_id)
                                      ->where('currency_type', 'BDT')
                                      ->where('reason', 'like', '%Contract%')
                                      ->sum('amount');
                      $BDTPayment = DB::table('budget_details')->where('project_id', $data->project_id)
                                      ->where('firm_id', $data->firm_id)
                                      ->where('currency_type', 'BDT')
                                      ->where('reason', 'like', '%Payment%')
                                      ->sum('amount');
                      $BDTRecovery = DB::table('budget_details')->where('project_id', $data->project_id)
                                      ->where('firm_id', $data->firm_id)
                                      // ->where('currency_type', 'BDT')
                                      ->where('reason', 'like', '%Recover%')
                                      ->sum('amount');
                      $USDContract = DB::table('budget_details')->where('project_id', $data->project_id)
                                      ->where('firm_id', $data->firm_id)
                                      ->where('currency_type', 'USD')
                                      ->where('reason', 'like', '%Contract%')
                                      ->sum('amount');
                      $USDPayment = DB::table('budget_details')->where('project_id', $data->project_id)
                                      ->where('firm_id', $data->firm_id)
                                      ->where('currency_type', 'USD')
                                      ->where('reason', 'like', '%Payment%')
                                      ->sum('amount');
                      $USDRecovery = DB::table('budget_details')->where('project_id', $data->project_id)
                                      ->where('firm_id', $data->firm_id)
                                      // ->where('currency_type', 'USD')
                                      ->where('reason', 'like', '%Recover%')
                                      ->sum('amount');
                    ?>
                    <tr > 
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{$rowCount}}</td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">
                        <a href="{{route('individual-report', $data->project_id)}}">{{$data->project->name ?? ''}}</a>
                      </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{$data->contract_amount}} <sub>{{$data->currency_type}}</sub></td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{$data->project->partner->name ?? 'PPPA'}}</td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{($data->currency_type == 'USD') ? $USDContract : ''}}</td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{($data->currency_type == 'BDT') ? $BDTContract : ''}}</td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{($data->currency_type == 'USD') ? $USDPayment : ''}}</td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{($data->currency_type == 'BDT') ? $BDTPayment : ''}}</td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{($data->currency_type == 'USD') ? ($USDPayment - $USDRecovery) : ''}}</td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{($data->currency_type == 'BDT') ? ($BDTPayment - $BDTRecovery) : ''}}</td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px"> </td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{($data->currency_type == 'BDT') ? $BDTPayment : $USDPayment}}</td>
                      <td style="border: 1px solid #ddd; padding: 3px 3px">{{($data->currency_type == 'BDT') ? $BDTRecovery : $USDRecovery}}</td>
                    </tr>
                    @endforeach
                    @if($rowCount==0)
                    <tr>
                      <td colspan="24" align="center">
                        <h4 style="color: #ccc">No Data Found . . .</h4>
                      </td>
                    </tr>
                    @endif
                  </tbody>
                  <tfoot> 
                    <tr> 
                      <td colspan="24" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px"><center><b>Total</b></center></td>
                    </tr>
                  </tfoot>
                </table>
                <div class="col-md-12" align="right">
                
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- Row end -->
  </div>
  <!-- Content wrapper end -->
</div>
<!-- Content wrapper scroll end -->
@endsection 