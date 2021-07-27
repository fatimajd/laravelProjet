
<table class="table">
  <a href="{{ route('films.create') }}" class="btn btn-sm btn-primary">ajouter</a>
  <thead class="thead-light">
    <tr>
      
      <th scope="col">Titre</th>
      <th scope="col">Image</th>
      <th scope="col">Date</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($films as $film)
    <tr>
     
      <td>{{$film->titre}}</td>
      <td><img src="/images/{{$film->image}}" width="80px" height="80px"></td>
      <td>{{$film->date}}</td>
      <td>
      <a href="{{ route('films.edit', $film->id) }}" class="btn btn-sm btn-warning">edit</a>
      <form action="{{ route('films.destroy', $film->id) }}" method="post"> {{-- Delete --}}
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>
      </td>
    </tr>
    
    @endforeach
  </tbody>
</table>
