<?php

namespace App\Http\Controllers;

use App\Prison;
use App\Sector;
use App\District;
use Illuminate\Http\Request;

class PrisonController extends Controller
{
   public function  __construct(){
       $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prisons = Prison::orderBy('id', 'desc')->paginate(10);
        return view ('manage.prisons.index', compact('prisons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $prisons = Prison::all();
        return view('manage.prisons.create', compact('prisons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sector = Sector::where('id', $request->sectors_id)->first();
        $prisons = Prison::where('sectors_id', $request->sectors_id)->get();
        $nbRow = count($prisons) + 1;

        if ( $nbRow < 10 ) {
            $prison_id = $sector->sector_name.'-'.date('Y').'-'."00". $nbRow;
        }

        elseif ( $nbRow >=10 && $nbRow <=99 ) {
            $prison_id = $sector->sector_name.'-'.date('Y').'-'."00". $nbRow;
        }
        elseif($nbRow <= 100) {
            $prison_id = $sector->sector_name.'-'.date('Y').'-'."00". $nbRow;
        }

        $data = new Prison;
        $data->prison_id = $prison_id;
        $data->names = $request->names;
        $data->idnum = $request->idnum;
        $data->mother_name = $request->mother_name;
        $data->father_name = $request->father_name;
        $data->mother_phone = $request->mother_phone;
        $data->father_phone = $request->father_phone;
        $data->guardian_name = $request->guardian_name;
        $data->guardian_phone = $request->guardian_phone;
        $data->marital_status = $request->marital_status;
        $data->cause = $request->cause;
        $data->districts_id = $request->districts_id;
        $data->sectors_id = $request->sectors_id;
        $data->villages_id = $request->villages_id;
        $data->cells_id = $request->cells_id;
        $data->entry_time = $request->entry_time;
        $data->release_time = $request->release_time;
        $data->imate_status = $request->imate_status;


        $data->save();
        return back()->with('success', "data add succesfully Regis id is $prison_id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function show(Graduate $graduate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function edit(Graduate $graduate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graduate $graduate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Graduate  $graduate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graduate $graduate)
    {
        //
    }
}
