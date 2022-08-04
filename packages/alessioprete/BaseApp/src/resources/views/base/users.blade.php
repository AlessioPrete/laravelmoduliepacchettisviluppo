@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="btn-toolbar mb-2">
        <a class="btn btn-primary" href="{{route('creautente')}}"><i class="icon icon-plus1"></i> Nuovo Utente</a>
    </div>
    <div class="container-lg">
        <div class="row">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ruoli</th>
                    <th>Permessi Extra</th>
                    <th class="text-end">Azioni</th>
                </tr>
                </thead>
                <tbody>
                @foreach($utenti as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td></td>
                        <td></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-warning">Modifica</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

