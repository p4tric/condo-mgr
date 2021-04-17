<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorLog;
use App\Models\Unit;
use Carbon\Carbon;

class VisitorLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $queryparams = $request->query->get('view');

        if ($queryparams == '3mo') {
          $dateS = Carbon::now()->startOfMonth()->subMonth(3);
          $dateE = Carbon::now()->startOfMonth();

          $visitorlogs = VisitorLog::query()
            ->whereBetween('entryDate',[$dateS,$dateE])
            ->get();
        } else {
          $visitorlogs = VisitorLog::all();
        }

        return view('visitorlogs.index', [
          'visitorlogs'=>$visitorlogs,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visitorlogs = VisitorLog::all() ;
        $visitorlog = VisitorLog::find($id);
        $visitorcount = VisitorLog::query()
          ->where('unit_id', 'LIKE', "%{$visitorlog->unit_id}%")
          ->where('entryDate', '=', $visitorlog->entryDate)
          ->where('exitDate', '=', '')
          ->count();

        $visitors = VisitorLog::query()
          ->where('unit_id', '=', $visitorlog->unit_id)
          ->where('entryDate', '=', $visitorlog->entryDate)
          ->get();

        return view('visitorlogs.show', [
          'visitorlogs' => $visitorlogs,
          'visitorlog' => $visitorlog,
          'visitors' => $visitors,
          'visitorcount' => $visitorcount,
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
        $visitorlog = VisitorLog::find($id); //->first();
        $visitorlogs = VisitorLog::all() ;
        return view('visitorlogs.edit', [
          'visitorlogs'=>$visitorlogs,
          'visitorlog'=>$visitorlog,
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
        $visitor = VisitorLog::where('id', $id)
          ->update([
            'entryDate' => $request->input('entryDate'),
            'exitDate' => $request->input('exitDate') ?? '',
          ]);
        return redirect('/visitorlogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visitorlog = VisitorLog::find($id);
        $visitorlog->delete();

        return redirect('/visitorlogs');
    }


    /*
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        dd($search);

        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search', compact('posts'));

    }
    */

    public function search(Request $request)
    {
        $visitorlogs = VisitorLog::all();
        $key = trim($request->get('searchUnitNo'));
        if ($key != "") {
          $unit = Unit::query()
            ->where('unitNo', '=', $key)
            ->get('id');

          if (count($unit) > 0) {
            $visitorlogs = VisitorLog::query()
              ->where('unit_id', '=', $unit[0]->id)
              ->get();
          }
        }

        return view('visitorlogs.index', [
          'visitorlogs'=>$visitorlogs,
          'layout'=>'index'
        ]);

    }
}
