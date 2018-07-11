<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Thread;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('home', 'index', 'about', 'whatsnew', 'groups');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
    $title = 'Welcome to this site';
    $name = 'Rommel';
    return view('pages.index', compact('title', 'name'));
    }

    public function index(Request $request)
    {   
        if ($request->has('tags')) {
            $threads=Thread::where('tags_id', $request->tags)->paginate(2);
        } else {

        $threads=Thread::orderBy('created_at', 'desc')->paginate(2);
        }
        $tags=Tag::all();
        return view('pages.forum', compact('threads', 'tags')); 
    }

    public function about()
    {
    $title = 'About';
    return view('pages.about')->with('title', $title);
    }

    public function whatsnew()
    {
    $title = "What's New";
    return view('pages.whatsnew')->with('title', $title);
    }

    public function groups()
    {
    $title = "Groups";
    return view('pages.groups')->with('title', $title);
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
