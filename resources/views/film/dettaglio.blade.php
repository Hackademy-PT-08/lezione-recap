<x-layout>
    <x-slot name="title">
        {{$movie['title']}}
    </x-slot>
    <div class="container my-5">
        <div class="row">
            <h1>{{$movie['title']}}</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img class="img-fluid" src="{{$movie['img']}}" alt="">
            </div>
            <div class="col-12 col-md-6">
                <p>{{$movie['description']}}</p>
                <p>Diretto da: {{$movie['director']}}</p>
                <p>Genere: {{$movie['genre']}}</p>
                <p>Rilasciato il: {{$movie['released_at']}}</p>
            </div>
        </div>
    </div>
</x-layout>