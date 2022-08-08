@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="{{route('edituserstore')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$user->id}}" name="id">
                    <x-input label="Nome" field="name" ph="Nome" :value="$user->name"></x-input>
                    <x-input label="Email" field="email" type="email" ph="e-mail" :value="$user->email"></x-input>
                    <x-input label="Password" field="password" type="password" ph="password"></x-input>
                    <x-input label="Conferma Password" field="password_confirmation" type="password" ph="conferma password"></x-input>
                    <button type="submit" class="btn btn-primary float-end">Salva</button>
                </form>
            </div>
        </div>
    </div>
    <ul>
        <li class="btn btn-primary"></li>
        <li class="btn btn-primary"></li>
        <li class="btn btn-primary"></li>
        <li class="btn btn-primary"></li>
        <li class="btn btn-primary"></li>
    </ul>
@endsection
