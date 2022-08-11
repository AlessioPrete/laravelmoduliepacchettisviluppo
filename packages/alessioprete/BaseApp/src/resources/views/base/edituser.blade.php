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
                    @if(isset($ruoli))
                        <div class="card mb-2">
                            <div class="card-header">Ruoli</div>
                            <div class="card-body">
                                <div class="row">
                                @foreach($ruoli as $ruolo)
                                    <div class="col-3">
                                        <x-checkbox label="{{$ruolo->name}}" :check="$user->roles"></x-checkbox>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(isset($permessi))
                        <div class="card mb-2">
                            <div class="card-header">Permessi</div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach($permessi as $permesso)
                                        <div class="col-3">
                                            <x-checkbox label="{{$permesso->name}}" name="permesso[]" :check="$user->permissions"></x-checkbox>
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
