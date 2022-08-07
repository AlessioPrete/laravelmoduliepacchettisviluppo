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
                    <x-input label="Conferma Password" field="confirmpassword" type="password" ph="conferma password"></x-input>
                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
