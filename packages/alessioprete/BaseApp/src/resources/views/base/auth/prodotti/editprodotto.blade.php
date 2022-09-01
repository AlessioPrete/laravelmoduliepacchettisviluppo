@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('storemodificaprodotto')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$update->id}}">
                        <div class="row">
                            <div class="col-6">
                                <x-input label="Titolo" field="title" ph="Titolo" value="{{$update->name}}"></x-input>
                            </div>
                            <div class="col-6">
                                <x-input label="Slug" field="slug" ph="slug" value="{{$update->slug}}"></x-input>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-6">
                            <x-input label="Prezzo" field="prezzo" ph="prezzo" value="{{$update->prezzo}}"></x-input>
                        </div>
                        <div class="col-6">
                            <x-input label="Disponibilità" field="disponibilita" ph="disponibilità" value="{{$jsondata->disponibilita}}"></x-input>
                        </div>
                    </div>
                    <x-input label="description" field="description" ph="description" value="{{$jsondata->description}}"></x-input>
                    <x-input label="key" field="key" ph="key" value="{{$jsondata->key}}"></x-input>
                        <div class="row mb-2">
                            <div class="col-12">
                                <label for="content" class="control-label">Descrizione prodotto</label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$update->content}}</textarea>
                            </div>
                        </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <label for="content" class="control-label">Valori Nutrizionali</label>
                            <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <label for="content" class="control-label">Composizione e allergeni</label>
                            <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                        <div class="card mb-2 gap-3">
                            <div class="card-header">Categorie</div>
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
