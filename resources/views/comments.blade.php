@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>films</title>
  </head>
  <body>
    <h1>Gestion des films</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    
    @if($layout == 'index')
   
            <div class="container-fluid">
                <div class="row-md-5">
                    <section class="col">
                      {{-- @include("home"); --}}
                        @include("listFilmUser")
                        
                    </section>
                  
                </div>
            
            </div>
            {{-- @elseif($layout == 'info')
   
            <div class="container-fluid">
                <div class="row-md-5">
                    <section class="col">
                  {{-- @include("home"); --}}
                                  
                  
        
    @elseif($layout == 'create')
            <div class="container-fluid">
                <div class="row">
                    <section class="col">
                        @include("listFilm")
                    </section>
                    <section class="col">
                        <form action="{{ route('films.store') }}" method="post" class="md-form">
                            @csrf
                            <div class="form-group">
                              <label>Titre</label>
                              <input name="titre" type="text" class="form-control"  placeholder="Entrer le titre ">
                            </div>
                            {{-- <div class="form-group">
                                <label>image</label>
                                <input name="image" type="file" class="form-control" >
                              </div> --}}
                             
                              <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left">
                                  <span>Choose files</span>
                                  <input type="file" name="image">
                                </div>
                               
                              </div>
                              <br>
                              


                              <div class="form-group">
                                <label>date</label>
                                <input name="date" type="date" class="form-control" >
                              </div>
                              <input type="submit" class="btn btn-info">
                              <input type="reset" class="btn btn-info">
                            
                          </form>
                    </section>
              </div>
          </div>
    @elseif($layout == 'show')
    <div class="container-fluid">
      <div class="row-md-5">
          <section class="col">
            {{-- @include("home"); --}}
              @include("filmComment")
              
          </section>
        
      </div>
  
  </div>
  </div>
    @elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("listFilm")
                <form action="{{ route('films.update', $film->id) }}" method="post">
                  @csrf
                  @method('put')
                    <div class="form-group">
                      <label>Titre</label>
                      <input value="{{$film->titre}}" name="titre" type="text" class="form-control"  placeholder="Entrer le titre ">
                    </div>
                    <div class="form-group">
                        <label>image</label>
                        <input value="{{$film->image}}" name="image" type="file" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>date</label>
                        <input  value="{{$film->date}}"name="date" type="date" class="form-control">
                      </div>
                      <input type="submit" class="btn btn-info">
                      <input type="reset" class="btn btn-info">
                    
                  </form>

            </section>
            <section class="col">

            </section>
      </div>
  </div>
    @endif

  </body>
</html>
@endsection