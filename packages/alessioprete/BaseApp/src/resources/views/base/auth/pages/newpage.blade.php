@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('storepage')}}" method="POST">
                    @csrf
                    <x-input label="Titolo" field="title" ph="Titolo"></x-input>
                    @if(isset($templates))
                        <div class="card mb-2 gap-3">
                            <div class="card-header">Template</div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($templates as $template)
                                        <div class="col-3">
                                            <x-checkbox label="{{$template->name}}"></x-checkbox>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection