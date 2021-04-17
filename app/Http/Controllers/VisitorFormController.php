<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Visitor;
use App\Models\VisitorLog;

class VisitorFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('visitorform.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*
        INPUT VISIT FORM
        STORE VISITOR
        RETRIEVE UNIT
        STORE VISITOR LOG

          'unitNo' => $request->input('unitNo'),
          'blockNo' => $request->input('blockNo'),

          'entryDate' => $request->input('entryDate'),
          'exitDate' => $request->input('exitDate'),
      */

        $visitor = Visitor::create([
          'visitorName' => $request->input('visitorName'),
          'contactNo' => $request->input('contactNo'),
          'nric' => $request->input('nric'),
        ]);

        $unit = Unit::query()
            ->where('unitNo', 'LIKE', "%{$request->input('unitNo')}%")
            ->where('blockNo', 'LIKE', "%{$request->input('blockNo')}%")
            ->get('id');


        $visitorlog = VisitorLog::create([
          'visitor_id' => $visitor->id,
          'unit_id' => $unit[0]->id,
          'entryDate' => $request->input('entryDate'),
          'exitDate' => $request->input('exitDate'),
        ]);

        return redirect('/visitors') ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
