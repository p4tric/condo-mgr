<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

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
          'unitNo' => $request->input('unitNo'),
          'blockNo' => $request->input('blockNo'),
          'nric' => $request->input('nric'),
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
        $visitors = Visitor::all() ;
        $visitor = Visitor::find($id);
        return view('visitors.show', [
          'visitors' => $visitors,
          'visitor' => $visitor
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
            'unitNo' => $request->input('unitNo'),
            'blockNo' => $request->input('blockNo'),
            'nric' => $request->input('nric'),
            'entryDate' => $request->input('entryDate'),
            'exitDate' => $request->input('exitDate'),
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
        //get the general information about the website
        // $website = General::query()->firstOrFail();

        $key = trim($request->get('searchUnitNo'));

        dd("PEOW PEOW");

        /*
        $posts = Post::query()
            ->where('title', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //get the recent 5 posts
        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('search', [
            'website' => $website,
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
        */
    }

}
