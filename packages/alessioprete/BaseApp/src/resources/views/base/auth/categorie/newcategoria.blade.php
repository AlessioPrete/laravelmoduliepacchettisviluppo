@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('storecategoria')}}" method="POST">
                    @csrf
                    <x-input label="Titolo" field="title" ph="Titolo"></x-input>
                    <x-input label="Slug" field="slug" ph="slug"></x-input>
                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
