@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('storepageedit')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$pagina->id}}">
                        <div class="row">
                            <div class="col-6">
                                <x-input label="Titolo" field="title" ph="Titolo" value="{{$pagina->title}}"></x-input>
                            </div>
                            <div class="col-6">
                                <x-select label="Template" field="template" :item="$item"></x-select>
                            </div>
                        </div>
                        <x-input label="Description" field="description" ph="description" value="{{$editjson->description}}"></x-input>
                        <x-input label="Keyword" field="key" ph="chiavi" value="{{$editjson->key}}"></x-input>
                        <div class="row mb-2">
                            <div class="col-12">
                                <label for="content" class="control-label">Contenuti</label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$pagina->content}}</textarea>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
