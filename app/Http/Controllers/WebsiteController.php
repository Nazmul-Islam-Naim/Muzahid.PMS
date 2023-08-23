<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\FAQ;
use App\Models\Glossary;
use App\Models\ImplementingAgency;
use App\Models\Ministry;
use App\Models\ProcurementDetails;
use App\Models\Project;
use App\Models\Sector;
use DataTables;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //project list
    public function projectList(Request $request){
        if ($request->ajax()) {
            $alldata= Project::with(['sector','phase','subphase'])
                            ->where('status', '1')
                            ->orderBy('phase_id', 'asc')
                            ->get();
            return DataTables::of($alldata)
            ->addIndexColumn()->make(True);
        }
        return view('website.home', $this->header());
    }

    //project profile
    public function projectProfile($slug){
        $data['single_data'] = Project::where('slug',$slug)->first();
        $data['procurementPhaseDetails'] = ProcurementDetails::where('project_id',$data['single_data']->id)->first();
        return view('website.profile',$data);
    }

    // sector list
    public function sectorList(Request $request){
        if ($request->ajax()) {
            $alldata= Sector::with('sectorProjects')->where('status', '1')->get();
            return DataTables::of($alldata)
            ->addIndexColumn()->make(True);
        }
        return view('website.sector-list', $this->header());
    }

    // sector wise project list
    public function sectorWiseProjectList(Request $request, $slug){
        $data['slug'] = $slug;
        if ($request->ajax()) {
            $id = Sector::where('slug',$slug)->select('id')->first();
            $alldata= Project::with(['sector','phase','subphase'])
                            ->where('sector_id', $id->id)
                            ->orderBy('phase_id', 'asc')
                            ->get();
            return DataTables::of($alldata)
            ->addIndexColumn()->make(True);
        }
        return view('website.sector-project-list',$data);
    }

    // ministry list
    public function ministryList(Request $request){
        if ($request->ajax()) {
            $alldata= Ministry::with('agencies','ministryProjects')->where('status', '1')->get();
            return DataTables::of($alldata)
            ->addIndexColumn()->make(True);
        }
        return view('website.ministry-list', $this->header());
    }

    // implementing agency
    public function contractingAuthority(Request $request, $slug){
        $data['slug'] = $slug;
        if ($request->ajax()) {
            $id = Ministry::where('slug',$slug)->select('id')->first();
            $alldata= ImplementingAgency::with('agencyProjects')->where('ministry_id', $id->id)->get();
            return DataTables::of($alldata)
            ->addIndexColumn()->make(True);
        }
        return view('website.contracting-authority',$data);
    }

    // implementing agency wise project list
    public function authorityWiseProjectList(Request $request, $slug){
        $data['slug'] = $slug;
        if ($request->ajax()) {
            $id = ImplementingAgency::where('slug',$slug)->select('id')->first();
            $alldata= Project::with(['sector','phase','subphase'])
                            ->where('implementing_agency_id', $id->id)
                            ->orderBy('phase_id', 'asc')
                            ->get();
            return DataTables::of($alldata)
            ->addIndexColumn()->make(True);
        }
        return view('website.contracting-project-list',$data);
    }

    // phase wise project list
    public function phaseWiseProjectList(Request $request, $slug){
        if ($slug == "identification-phase")
        {
            if ($request->ajax()) {
                $alldata= Project::with(['sector','phase','subphase'])
                                ->where('phase_id',1)
                                ->get();
                return DataTables::of($alldata)
                ->addIndexColumn()->make(True);
            }
            return view('website.identification');
        }
        else if ($slug == "development-phase")
        {
            if ($request->ajax()) {
                $alldata= Project::with(['sector','phase','subphase'])
                                ->where('phase_id',2)
                                ->get();
                return DataTables::of($alldata)
                ->addIndexColumn()->make(True);
            }
            return view('website.development');
        }
        else if ($slug == "procurement-phase")
        {
            if ($request->ajax()) {
                $alldata= Project::with(['sector','phase','subphase'])
                                ->where('phase_id',3)
                                ->get();
                return DataTables::of($alldata)
                ->addIndexColumn()->make(True);
            }
            return view('website.procurement');
        }
        else if ($slug == "award-phase")
        {
            if ($request->ajax()) {
                $alldata= Project::with(['sector','phase','subphase'])
                                ->where('phase_id',4)
                                ->get();
                return DataTables::of($alldata)
                ->addIndexColumn()->make(True);
            }
            return view('website.award');
        }
        else
        {
            if ($request->ajax()) {
                $alldata= Project::with(['sector','phase','subphase'])
                                ->where('phase_id',5)
                                ->get();
                return DataTables::of($alldata)
                ->addIndexColumn()->make(True);
            }
            return view('website.implementation');
        }
    }
    
    // cp obigations
    public function cpObligations(Request $request){
        if ($request->ajax()) {
            $alldata= Project::with(['sector','phase','subphase'])
                            ->where([['phase_id',5],['sub_phase_id',29]])
                            ->get();
            return DataTables::of($alldata)
            ->addIndexColumn()->make(True);
        }
            return view('website.cpObligations');
    }
    
    // cp obigations
    public function constructionBegins(Request $request){
        if ($request->ajax()) {
            $alldata= Project::with(['sector','phase','subphase'])
                            ->where([['phase_id',5],['sub_phase_id',30]])
                            ->get();
            return DataTables::of($alldata)
            ->addIndexColumn()->make(True);
        }
            return view('website.constructionBegins');
    }
    
    // operations
    public function operations(Request $request){
        if ($request->ajax()) {
            $alldata= Project::with(['sector','phase','subphase'])
                            ->where([['phase_id',5],['sub_phase_id',31]])
                            ->get();
            return DataTables::of($alldata)
            ->addIndexColumn()->make(True);
        }
            return view('website.operations');
    }

    
    // glossary list
    public function glossary(Request $request){
        if ($request->ajax()) {
            $alldata= Glossary::all();
            return DataTables::of($alldata)
            ->addIndexColumn()->make(True);
        }
        return view('website.glossary');
    }
    
    // faq list
    public function faq(){
        $faqs = FAQ::all();
        return view('website.faq',compact('faqs'));
    }
    
    // graph list
    public function graph(){
        return view('website.graph');
    }
    // pptaf combined report
    public function pptaf(){
        $data['combinedReports'] = Budget::all();
        return view('website.pptaf', $data);
    }
    // pptaf indivdual report
    public function pptafIndividual($id){
        $data['individulaReport'] = Budget::findOrFail($id);
        $data['combinedReports'] = Budget::all();
        return view('website.pptafIndividual', $data);
    }

    // projectPhases
    public function projectPhases(){
        $data['identitifications'] = Project::where('phase_id',1)->count();
        $data['developments'] = Project::where('phase_id',2)->count();
        $data['procurements'] = Project::where('phase_id',3)->count();
        $data['awards'] = Project::where('phase_id',4)->count();
        $data['implementations'] = Project::where('phase_id',5)->count();
        $data['cps'] = Project::where([['phase_id',5],['sub_phase_id',29]])->count();
        $data['constructions'] = Project::where([['phase_id',5],['sub_phase_id',30]])->count();
        $data['operations'] = Project::where([['phase_id',5],['sub_phase_id',31]])->count();
        return response()->json($data);
    }

    // projectSector
    public function projectSector(){
        $data['projectSectors'] = Sector::with('projects')->get();
        return response()->json($data);
    }

    // projcetMinistry
    public function projcetMinistry(){
        $data['projectMinistries'] = Ministry::with('projects')->get();
        return response()->json($data);
    }

    // header 
    public function header(){
        $data['projects'] = Project::count();
        $data['sectors'] = Sector::count();
        $data['ministries'] = Ministry::count();
        $data['ministries'] = Ministry::count();
        $data['identitifications'] = Project::where('phase_id',1)->count();
        $data['developments'] = Project::where('phase_id',2)->count();
        $data['procurements'] = Project::where('phase_id',3)->count();
        $data['awards'] = Project::where('phase_id',4)->count();
        $data['implementations'] = Project::where('phase_id',5)->count();
        $data['cps'] = Project::where([['phase_id',5],['sub_phase_id',29]])->count();
        $data['constructions'] = Project::where([['phase_id',5],['sub_phase_id',30]])->count();
        $data['operations'] = Project::where([['phase_id',5],['sub_phase_id',31]])->count();
        return $data;
    }
}
