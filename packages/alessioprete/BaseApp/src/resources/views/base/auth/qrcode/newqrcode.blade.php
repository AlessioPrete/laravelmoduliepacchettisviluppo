@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('storepage')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <x-input label="Titolo" field="title" ph="Titolo"></x-input>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <x-input label="meta" field="meta" ph="meta"></x-input>
                    <x-input label="key" field="key" ph="key"></x-input>
                    <x-input label="pippo" field="pippo" ph="pippo"></x-input>
                    <div class="card mb-2 gap-3">
                        <div class="card-header">Template</div>
                        <div class="card-body">
                            <div class="row">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
