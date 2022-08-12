@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="#" method="POST">
                    @csrf
                    <x-input label="Titolo" field="titolo" ph="Nota"></x-input>
                    <div class="mb-3">
                        <label for="contenuto" class="form-label">Descrizione o contenuto</label>
                        <textarea class="form-control" id="contenutoTask" name="contenuto" rows="3"></textarea>
                    </div>
                    <label for="">Scadenza</label>
                    <input type="date" class="form-control mb-2">
                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
