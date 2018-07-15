<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Thread;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
=======
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676

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
<<<<<<< HEAD
    $title = 'Welcome to Click Side';
    if (!auth()->guest()) {
    $name = auth()->user()->name;
    } else {
    $name = 'Guest';
    }
=======
    $title = 'Welcome to this site';
    $name = 'Rommel';
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
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
<<<<<<< HEAD
        $count=count($tags);
        return view('pages.forum', compact('threads', 'tags', 'count')); 
=======
        return view('pages.forum', compact('threads', 'tags')); 
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
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

<<<<<<< HEAD

=======
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
>>>>>>> 1d9712a270dc9d8b9619543879fcb74a59a86676
}
