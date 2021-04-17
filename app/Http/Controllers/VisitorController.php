<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\VisitorLog;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = Visitor::all() ;
        return view('visitors.index', [
          'visitors'=>$visitors,
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
        $visitors = Visitor::all();
        return view('visitors.create', [
          'visitors' => $visitors,
          'layout' => 'create'
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
        $visitor = Visitor::create([
          'visitorName' => $request->input('visitorName'),
          'contactNo' => $request->input('contactNo'),
          'nric' => $request->input('nric'),
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
        $visitors = Visitor::all() ;
        $visitor = Visitor::find($id);
        $visitorlogs = VisitorLog::where('visitor_id', $id)
          ->get();

        return view('visitors.show', [
          'visitors' => $visitors,
          'visitor' => $visitor,
          'visitorlogs' => $visitorlogs
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
        $visitor = Visitor::find($id); //->first();
        $visitors = Visitor::all() ;
        return view('visitors.edit', [
          'visitors'=>$visitors,
          'visitor'=>$visitor,
          'layout'=>'edit'
        ]);
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
        $visitor = Visitor::where('id', $id)
          ->update([
            'visitorName' => $request->input('visitorName'),
            'contactNo' => $request->input('contactNo'),
            'nric' => $request->input('nric'),
          ]);
        return redirect('/visitors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visitor = Visitor::find($id);
        $visitor->delete();

        return redirect('/visitors');
    }
}
