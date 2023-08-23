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
        <h5>Project Wise PPPTAF Report</h5>
    <hr>
    </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      
      <div class="col-md-8">
        <table style="width: 60%; font-size: 12px;" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td colspan="2"  style="border: 1px solid #ddd; padding: 3px 3px">Contracting Agency (CA)</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">Priminister Office</td>
            </tr>
            <tr>
              <td colspan="2"  style="border: 1px solid #ddd; padding: 3px 3px">Transaction Advisior (TA)</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">IFIC</td>
            </tr>
            <tr>
              <td colspan="2"  style="border: 1px solid #ddd; padding: 3px 3px">Transaction Advisior (TA) Period</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">01/01/2020 to 01/05/2022</td>
            </tr>
            <tr>
              <td colspan="2"  style="border: 1px solid #ddd; padding: 3px 3px">TA Appointing Authority</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">PPPA</td>
            </tr>
            <tr>
              <td colspan="2"  style="border: 1px solid #ddd; padding: 3px 3px">Project Value</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">7,00,000.00</td>
            </tr>
            <tr>
              <td colspan="3"  style="border: 1px solid #ddd; padding: 3px 3px"></td>
            </tr>
            <tr>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">Contract Value</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">USD</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">BDT</td>
            </tr>
            <tr>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">Amount already paid</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">2,500.00</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">4,50,000.00</td>
            </tr>
            <tr>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">Rest Amount</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">0.00</td>
              <td  style="border: 1px solid #ddd; padding: 3px 3px">0.00</td>
            </tr>
          </tbody>
        </table>
      </div>
      <center><h5 style="margin: 0px">PPPTAF Individual Report</h5></center>
      <div class="table-responsive">
        <table class="" style="width: 100%; font-size: 12px; text-align:center" cellspacing="0" cellpadding="0">  
          <thead> 
          </thead>
          <tbody> 
            <tr > 
              <th rowspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">Sl</th>
              <th rowspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">Project name</th>
              <th rowspan="3"  style="border: 1px solid #ddd; padding: 3px 3px">Mailstone</th>
              <th colspan="6"  style="border: 1px solid #ddd; padding: 3px 3px">TA Contract Value</th>
              <th colspan="6"  style="border: 1px solid #ddd; padding: 3px 3px">Paid Status</th>
              <th colspan="2"  style="border: 1px solid #ddd; padding: 3px 3px">Returned</th>
            </tr>
            <tr > 
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
            </tr>
            <tr > 
              <td style="border: 1px solid #ddd; padding: 3px 3px">1</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">pgrading of Gabtoli -Savar-Nabinagar into 4 Lane Expressway on PPP Basis</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 50%</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">2,500.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 150,00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 4,50,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 50,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 40,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">1,250.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 175.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 75.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">2,25,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 25,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 20,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">7,00,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">7,00,000.00</td>
            </tr>
            <tr > 
              <td style="border: 1px solid #ddd; padding: 3px 3px">1</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">pgrading of Gabtoli -Savar-Nabinagar into 4 Lane Expressway on PPP Basis</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 50%</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">2,500.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 250.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 150,00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 4,50,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 50,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 40,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">1,250.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 175.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 75.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">2,25,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 25,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px"> 20,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">7,00,000.00</td>
              <td style="border: 1px solid #ddd; padding: 3px 3px">7,00,000.00</td>
            </tr>
          </tbody>
          <tfoot> 
            <tr> 
              <td colspan="17" style="font-weight: bold; border: 1px solid #ddd; padding: 3px 3px"><center><b>Total</b></center></td>
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