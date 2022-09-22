@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('storeeditcategoria')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$categoria->id}}" name="id">
                    <x-input label="Titolo" field="title" ph="Titolo" value="{{$categoria->name}}"></x-input>
                    <x-input label="Slug" field="slug" ph="slug" value="{{$categoria->slug}}"></x-input>
                    <div class="form-group mb-2">
                        <label for="immagine" class="form-label">Immagine 500x535</label>
                        <input type="text" value="{{$categoria->image}}" class="form-control mb-2">
                        <input id="image" type="file" name="immagine" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="testa" class="form-label">Immagine Testata 1920x550</label>
                        <input type="text" value="{{$categoria->headimage}}" class="form-control mb-2">
                        <input type="file" name="testa" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        console.log($('#image'));
    </script>
@endsection
