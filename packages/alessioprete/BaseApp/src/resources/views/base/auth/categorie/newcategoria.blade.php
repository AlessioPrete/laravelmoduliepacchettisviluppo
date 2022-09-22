@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('storecategoria')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <x-input label="Titolo" field="title" ph="Titolo"></x-input>
                    <x-input label="Slug" field="slug" ph="slug"></x-input>
                    <div class="form-group mb-2">
                        <label for="immagine" class="form-label">Immagine 500x535</label>
                        <input type="file" name="immagine" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="testa" class="form-label">Immagine Testata 1920x550</label>
                        <input type="file" name="testa" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection

