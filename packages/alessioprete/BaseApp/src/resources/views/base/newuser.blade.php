@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('registrautente')}}" method="POST">
                    @csrf
                    <x-input label="Nome" field="name" ph="Nome"></x-input>
                    <x-input label="Email" field="email" type="email" ph="e-mail"></x-input>
                    <x-input label="Password" field="password" type="password" ph="password"></x-input>
                    <x-input label="Conferma Password" field="password_confirmation" type="password" ph="conferma password"></x-input>
                    @if(isset($ruoli))
                        <div class="card gap-3 mb-2">
                            <div class="card-header">Ruoli</div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($ruoli as $ruolo)
                                        <div class="col-3">
                                            <x-checkbox label="{{$ruolo->name}}"></x-checkbox>
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
