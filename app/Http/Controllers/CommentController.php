<?php

namespace App\Http\Controllers;

use App\comment;
use App\film;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return view('comments',['films'=>$films,'layout'=>'index']);
        // $comments = Comment::all();
        // return view('comments',['comments'=>$comments,'layout'=>'index']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $films = Film::all();
        // return view('comments',['comments'=>$comments,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film = new Comment();
        $film->text=$request->input('text');
        $film->film_id=$request->input('film_id');
        $film->user_id=1;
        $film->save();
        return redirect('comments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film=Film::find($id);
        // dd($film);
        return view('comments',['film'=>$film ,'layout'=>'show']);
    }
    // public function commentshow($id)
    // {
    //     $comment=Comment::find($id);
    //     // dd($film);
    //     return view('comments',['comment'=>$comment ,'layout'=>'info']);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment=Comment::find($id);
        $comment->delete();
        return redirect('comments');
    }
}
