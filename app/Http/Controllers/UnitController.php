<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\VisitorLog;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all() ;
        return view('units.index', [
          'units'=>$units,
          'layout'=>'index'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all() ;
        return view('units.create', [
          'units'=>$units,
          'layout'=>'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unit = new Unit() ;
        $unit->blockNo = $request->input('blockNo');
        $unit->unitNo = $request->input('unitNo');
        $unit->occupantName = $request->input('occupantName');
        $unit->contactNumber = $request->input('contactNumber');
        $unit->save() ;
        return redirect('/units') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $units = Unit::all() ;
        $unit = Unit::find($id);
        $visitorlogs = VisitorLog::where('unit_id', $id)
          ->get();
        return view('units.show', [
          'units' => $units,
          'unit' => $unit,
          'visitorlogs' => $visitorlogs,
          'layout' => 'show'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unit = Unit::find($id);
        $units = Unit::all() ;
        return view('units.edit', [
          'units'=>$units,
          'unit'=>$unit,
          'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unit = Unit::find($id);
        $unit->blockNo = $request->input('blockNo');
        $unit->unitNo = $request->input('unitNo');
        $unit->occupantName = $request->input('occupantName');
        $unit->contactNumber = $request->input('contactNumber');
        $unit->save() ;
        return redirect('/units') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete() ;
        return redirect('/units') ;
    }
}
