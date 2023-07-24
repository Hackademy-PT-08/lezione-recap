<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Contattaci</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('contact-submit')}}">
                @if (session('errorMessage'))
                    <div class="alert alert-danger">
                        {{ session('errorMessage') }}
                    </div>
                @endif
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del film</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="director" class="form-label">Regista del film</label>
                        <input type="text" name="director" class="form-control" id="director">
                    </div>
                    <div class="mb-3">
                        <label for="plot" class="form-label">Trama del film</label>
                        <textarea name="plot" id="plot" class="form-control" cols="30" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Invia</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <h3>Suggeriscici un film</h3>
                <p>Non trovi il tuo film preferito?</p>
                <p>Compila questo form. Un nostro curatore esaminerà la tua richiesta.</p>
            </div>
        </div>
    </div>
</x-layout>