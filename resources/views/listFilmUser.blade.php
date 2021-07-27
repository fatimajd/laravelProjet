
<div class="container col-12 d-flex justify-content-evenly " >
    <div class="row ">
        @foreach ($films as $film)
        <div class="col-lg-3 col-md-4 col-sm-6  ">
            <div class="card m-2" style="width: 18rem;">
                <img src="/images/{{$film->image}}"  class="card-img-top" alt="{{$film->image}}">
                <div class="card-body">
                  <h5 class="card-title">{{$film->titre}}</h5>
                  <h6 class="card-title">{{$film->date}}</h6>
                  <a href="{{route('comments.show',$film->id)}}" class="btn btn-primary">afficher</a>
                </div>
              </div>
          </div>
        @endforeach
    </div>
  </div>
