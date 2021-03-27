<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'firstName' => 'required',
            'lastName' => 'required',
            'Email' => 'required',
            'Birthday' => 'required',
            'address' => 'required'
        ]);

        //Create Loyalty Cards
        $post = new Post;
        $post->firstName = $request->input('firstName');
        $post->lastName = $request->input('lastName');
        $post->Email = $request->input('Email');
        $post->Birthday = $request->input('Birthday');
        $post->address = $request->input('address');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/home')->with('success', 'Loyalty Card Successfully Created....'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('posts.show')->with('posts', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('posts.edit')->with('posts', $posts);
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
        $this->validate($request, [

        'firstName' => 'required',
        'lastName' => 'required',
        'Email' => 'required',
        'Birthday' => 'required',
        'address' => 'required'
    ]);

    //Create Loyalty Cards
    $post = Post::find($id);
    $post->firstName = $request->input('firstName');
    $post->lastName = $request->input('lastName');
    $post->Email = $request->input('Email');
    $post->Birthday = $request->input('Birthday');
    $post->address = $request->input('address');
    $post->save();

    return redirect('/home')->with('success', 'Loyalty Card Successfully Updated....');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();

        return redirect('/home')->with('success', 'Loyalty Card Successfully Deleted....');
    }
}
