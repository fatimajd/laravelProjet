<?php

namespace App\Http\Controllers;

use App\film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return view('film',['films'=>$films,'layout'=>'index']);
        // return view('comments',['films'=>$films,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $films = Film::all();
        return view('film',['films'=>$films,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film = new Film();
        $film->titre=$request->input('titre');
        $film->image=$request->input('image');
        $film->date=$request->input('date');
        $film->save();
        return redirect('films');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film=Film::find($id);
        $films = Film::all();
        return view('film',['films'=>$films ,'film'=>$film,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film=Film::find($id);
        $films = Film::all();
        
        return view('film',['films'=>$films ,'film'=>$film,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $film=Film::find($id);
        $film->titre=$request->input('titre');
        $film->image=$request->input('image');
        $film->date=$request->input('date');
        $film->save();
        return redirect('films');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film=Film::find($id);
        $film->delete();
        return redirect('films');
    }
}
