@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('storeedittask')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$task->id}}">
                    <x-input label="Titolo" field="titolo" ph="Nota" value="{{$task->titolo}}"></x-input>
                    <div class="mb-3">
                        <label for="contenuto" class="form-label">Descrizione o contenuto</label>
                        <textarea class="form-control" id="contenutoTask" name="contenuto" rows="3">{{$task->contenuto}}</textarea>
                    </div>
                    <label for="">Scadenza</label>
                    <input type="date" class="form-control mb-2" name="scadenza" value="{{$task->scadenza}}">
                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
