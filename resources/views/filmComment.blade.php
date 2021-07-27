
<div class="container col-12">
    <div class="row">
      <div class="col-4 text-center">
        
            <img src="/images/{{$film->image}}" style="width: 400px" alt="" srcset="">
      </div>
      <div class="col-8">
        <h1>{{$film->titre}}</h1>
        <h3>{{$film->date}}</h3>
       
        
          <div class="bg-info ">
            <table class="table">
             
              <thead class="thead-light">
                <tr>
                  
                  <th scope="col">Comments</th>
                  
                  <th scope="col">action</th>
                </tr>
              </thead>
              <tbody>
               @foreach ($film->comments() as $row)
                <tr>
                 
                  <td>{{$row->text}}</td>
                  
                  <td>
                  <a href="{{ route('comments.edit', $row->id) }}" class="btn btn-sm btn-warning">edit</a>
                  @auth
                  @if ($row->user_id==Auth::user()->id)
                  <form action="{{ route('comments.destroy', $row->id) }}" method="post"> {{-- Delete --}}
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
                @endif
                @endauth
                  </td>
                </tr>            
              </tbody>
            </table>
        </div>
        @endforeach
        
      <div class="input-group mt-3  col-10">
          <form action="{{route('comments.store')}}" class="d-flex justify-content-center" method="post">
            @csrf

            <input type="hidden" name="film_id" value="{{$film->id}}">
            @auth
            <input type="text" class="form-control" name="text">
            <input class="btn btn-dark " type="submit" value="add" >

            @endauth

          </form>

      </div>
      </div>
    </div>
  </div>
