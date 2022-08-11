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
                        <td>
                            @foreach($user->roles as $role)
                                <span class="badge-sm text-bg-info">{{$role->name}}</span>
                            @endforeach
                        </td>
                        <td>
                            @foreach($user->permissions as $permesso)
                                <span class="badge-sm text-bg-secondary">{{$permesso->name}}</span>
                            @endforeach
                        </td>
                        <td class="text-end">
                            <a class="btn btn-sm btn-warning" href="{{route('editUser', $user->id)}}">Modifica</a>
                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaConferma" onclick="transferdata('{{$user->name}}', '{{$user->id}}')">Elimina</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
{{--        <div class="row">--}}
{{--            @dd($utenti)--}}
{{--        </div>--}}
    </div>
    <!-- Modal -->
    <div class="modal fade" id="eliminaConferma" tabindex="-1" aria-labelledby="eliminaConfermaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('eliminautente')}}" id="delete" method="POST">
                    @csrf
                <div class="modal-body">
                    Confermi l'eliminazione dell'utente <span id="username"></span>
                        <input type="hidden" value="" id="deleteid" name="deleteid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <button type="submit" class="btn btn-danger">Conferma</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        function transferdata(a,b)
        {
            $('#username').html(a);
            $('#deleteid').val(b);
            console.log('utente: '+a+'| userid: '+b);
        }
    </script>
@endsection

