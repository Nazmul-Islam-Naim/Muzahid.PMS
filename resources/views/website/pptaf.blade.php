@extends('layouts.frontend-app')
@section('content')
<style>
   table.dataTable th {
    background: #186b59;
  }
  .titleBackground{
        background-color: #d61dba;
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
        <h5>PPPTAF Combined Report</h5>
    <hr>
    </div>
</div>
<div class="container">
  <div class="row">
      <div class="col-md-12">
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
              
              <tr > 
                <td style="border: 1px solid #ddd; padding: 3px 3px">1</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">
                  <a href="{{route('pptaf-individual', 1)}}">Upgrading of Gabtoli -Savar-Nabinagar into 4 Lane Expressway on PPP Basis</a>
                </td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">IFIC</sub></td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">PPPA</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,0000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,75,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">5,00,000.00</td>
              </tr>
              <tr > 
                <td style="border: 1px solid #ddd; padding: 3px 3px">2</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">
                  <a href="{{route('pptaf-individual', 1)}}">	Improvement of Chattogram-Cox’s Bazar Highway on PPP Basis</a>
                </td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">IFIC</sub></td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">PPPA</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,0000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,75,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">5,00,000.00</td>
              </tr>
              <tr > 
                <td style="border: 1px solid #ddd; padding: 3px 3px">3</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">
                  <a href="{{route('pptaf-individual', 1)}}">Construction of 2nd Padma Multipurpose Bridge at Paturia-Goalundo</a>
                </td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">IFIC</sub></td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">PPPA</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,0000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,75,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">5,00,000.00</td>
              </tr>
              <tr > 
                <td style="border: 1px solid #ddd; padding: 3px 3px">4</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">
                  <a href="{{route('pptaf-individual', 1)}}">	Construction & Operation of Inland Container Terminal (ICT) at Khanpur</a>
                </td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">IFIC</sub></td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">PPPA</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,0000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">25,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 150.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,50,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 45,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px"> 35,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">4,75,000.00</td>
                <td style="border: 1px solid #ddd; padding: 3px 3px">5,00,000.00</td>
              </tr>
            </tbody>
            <tfoot> 
              <tr> 
                <td colspan="24" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px">***Every USD Transaction is Include Bangladesh Bank Dollar Exchange Rate(Cost Center)</td>
              </tr>
              <tr> 
                <td colspan="8" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px; text-align:right">Budget for TA</td>
                <td colspan="3" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px; text-align:left">56,230,000.00</td>
                <td colspan="13" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px"></td>
              </tr>
              <tr> 
                <td colspan="8" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px; text-align:right">TA Payment</td>
                <td colspan="3" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px; text-align:left">6,230,000.00</td>
                <td colspan="13" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px"></td>
              </tr>
              <tr> 
                <td colspan="8" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px; text-align:right">Other Expense</td>
                <td colspan="3" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px; text-align:left">230,000.00</td>
                <td colspan="13" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px"></td>
              </tr>
              <tr> 
                <td colspan="8" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px; text-align:right">Recovery(Development Fee/Success Fee)</td>
                <td colspan="3" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px; text-align:left">5,230,000.00</td>
                <td colspan="13" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px"></td>
              </tr>
              <tr> 
                <td colspan="8" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px; text-align:right">Balance</td>
                <td colspan="3" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px; text-align:left">56,230,000.00</td>
                <td colspan="13" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px"></td>
              </tr>
            </tfoot>
          </table>
          <div class="col-md-12" align="right">
          
          </div>
        </div>
        </div>
  </div>
</div>
<!--End of Activity Area-->
@endsection