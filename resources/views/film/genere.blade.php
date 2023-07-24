<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Film per genere</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($movies as $movie)
                <div class="col-12 col-md-3 m-2">
                    <x-card 
                    movieId="{{$movie['id']}}"
                    movieTitle="{{$movie['title']}}"
                    movieDescription="{{$movie['description']}}"
                    movieImg="{{$movie['img']}}"
                    movieDirector="{{$movie['director']}}"
                    movieReleased_at="{{$movie['released_at']}}"
                    movieGenre="{{$movie['genre']}}"
                    />
                </div>     
            @endforeach
        </div>
    </div>
</x-layout>