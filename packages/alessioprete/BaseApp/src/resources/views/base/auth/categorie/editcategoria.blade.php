@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('storeeditcategoria')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$categoria->id}}" name="id">
                    <x-input label="Titolo" field="title" ph="Titolo" value="{{$categoria->name}}"></x-input>
                    <x-input label="Slug" field="slug" ph="slug" value="{{$categoria->slug}}"></x-input>
                    <button type="submit" class="btn btn-primary float-end">Salva</button>a
                </form>
            </div>
        </div>
    </div>
@endsection
