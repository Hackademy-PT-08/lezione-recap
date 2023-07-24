<x-layout>
    <div class="container my-5">
        <div class="row">
            <h2>Lavora con noi</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('travel.submit')}}">
                
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome e Cognome</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <button type="submit" class="btn btn-dark">Invia</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <h3>Vuoi lavorare con noi?</h3>
                <p>Compila questo form e sarai ricontattato al più presto.</p>
            </div>
        </div>
    </div>
</x-layout>