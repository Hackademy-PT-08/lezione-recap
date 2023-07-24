<div class="card shadow h-100">
  <img src="{{ $movieImg }}" class="card-img-top h-75" alt="{{$movieTitle}}">
  <div class="card-body">
    <h5 class="card-title">{!! $movieTitle !!}</h5>
    <p class="card-text">Diretto da: {{$movieDirector}}</p>
    <p class="card-text">Trama: {{substr($movieDescription, 0, 15)}}...</p>
    <p class="card-text">Genere: <a class="link-genre text-dark text-decoration-none fw-bold" href="{{route('genere-film', ['genre' => $movieGenre])}}">{{$movieGenre}}</a></p>

    <a href="{{route('dettaglio-film', ['id' => $movieId])}}" class="btn btn-dark">Dettaglio</a>
  </div>
</div>