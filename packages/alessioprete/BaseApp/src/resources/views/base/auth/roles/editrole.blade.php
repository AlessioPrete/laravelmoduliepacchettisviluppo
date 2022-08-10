@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('editrolestore')}}" method="POST">
                    <input type="hidden" name="id" value="{{$role->id}}">
                    @csrf
                    <x-input label="Ruolo" field="name" ph="Nome" value="{{$role->name}}"></x-input>
                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
