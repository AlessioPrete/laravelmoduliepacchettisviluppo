@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('newrolestore')}}" method="POST">
                    @csrf
                    <x-input label="Ruolo" field="name" ph="Nome"></x-input>
                    @if(isset($permessi))
                        <div class="card mb-2 gap-3">
                            <div class="card-header">Permessi</div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($permessi as $permesso)
                                        <div class="col-3">
                                            <x-checkbox label="{{$permesso->name}}"></x-checkbox>
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
