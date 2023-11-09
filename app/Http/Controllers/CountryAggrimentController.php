<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\CountryAggriment;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class CountryAggrimentController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $alldata= CountryAggriment::with(['country'])
                            ->get();
            return DataTables::of($alldata)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                ob_start() ?>

                <ul class="list-inline m-0">
                    <li class="list-inline-item">
                        <a href="<?php echo route('countryAggriments.edit', $row->id); ?>" class="badge bg-primary badge-sm" data-id="<?php echo $row->id; ?>"><i class="icon-edit-3"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <button data-id="<?php echo $row->id; ?>" class="badge bg-danger badge-sm button-delete"><i class="icon-delete"></i></button>
                    </li>
                </ul>

                <?php return ob_get_clean();
            })
            ->make(True);
        }
        return view ('countryAggriment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['countries'] = Country::all();
        return view ('countryAggriment.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_id'=> 'required',
            'title'=> 'nullable',
            'doc'=> 'required | mimes:pdf',
            'date' => 'required | date | date_format:Y-m-d'
        ]);
        if ($validator->fails()) {
            Session::flash('flash_message', $validator->errors());
            return redirect()->back()->with('status_color','warning');
        }

        try{
            $data = $request->all();
            $data = $this->storeFile($data, 'countryAggrement');
            CountryAggriment::create($data);
            Session::flash('flash_message','Data Successfully Added !');
            return redirect()->route('countryAggriments.index')->with('status_color','success');
        }catch(\Exception $e){
            Session::flash('flash_message','Somthing went wrong!');
            return redirect()->back()->with('status_color','danger');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CountryAggriment  $countryAggriment
     * @return \Illuminate\Http\Response
     */
    public function show(CountryAggriment $countryAggriment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CountryAggriment  $countryAggriment
     * @return \Illuminate\Http\Response
     */
    public function edit(CountryAggriment $countryAggriment)
    {
        $data['countryAggriment'] = $countryAggriment;
        $data['countries'] = Country::all();
        return view ('countryAggriment.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CountryAggriment  $countryAggriment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CountryAggriment $countryAggriment)
    {
        $validator = Validator::make($request->all(), [
            'country_id'=> 'required',
            'title'=> 'nullable',
            'doc'=> 'nullable | mimes:pdf',
            'date' => 'required | date | date_format:Y-m-d'
        ]);
        if ($validator->fails()) {
            Session::flash('flash_message', $validator->errors());
            return redirect()->back()->with('status_color','warning');
        }

        try{
            $data = $request->all();
            $data = $this->updateFile($countryAggriment, $data, 'countryAggrement');
            $inputData = array_diff_key($data, array_flip(['_method', '_token']));
            $countryAggriment->update($inputData);
            Session::flash('flash_message','Data Successfully Updated.');
            return redirect()->route('countryAggriments.index')->with('status_color','success');
        }catch(\Exception $e){
            Session::flash('flash_message','Somthing went wrong!');
            return redirect()->back()->with('status_color','danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CountryAggriment  $countryAggriment
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountryAggriment $countryAggriment)
    {
        try{
            $this->destroyFile($countryAggriment);
            $countryAggriment->delete();
            Session::flash('flash_message','Data Successfully Deleted.');
            return redirect()->route('countryAggriments.index')->with('status_color','success');
        }catch(\Exception $e){
            Session::flash('flash_message','Somthing went wrong!');
            return redirect()->back()->with('status_color','danger');
        }
    }
}
