<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class PPTFReportController extends Controller
{
    /**
     * idividual ledger
     */
    public function individulaReport($id){
        $data['individulaReport'] = Budget::findOrFail($id);
        $data['combinedReports'] = Budget::all();
        return view('pptfReport.individulaReport', $data);

    }

    /**
     * combiend ledger
     */
    public function combinedReport(){
        $data['combinedReports'] = Budget::all();
        return view('pptfReport.combinedReport', $data);
    }
}
