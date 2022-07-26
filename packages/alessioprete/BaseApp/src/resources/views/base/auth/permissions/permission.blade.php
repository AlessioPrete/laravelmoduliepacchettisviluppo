@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="btn-toolbar mb-2">
        <a class="btn btn-primary" href="{{route('newpermission')}}"><i class="icon icon-plus1"></i> Nuovo Permesso</a>
    </div>
    <div class="container-lg">
        <div class="row">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th class="text-end">Azioni</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($permessi as $permesso)
                        <tr>
                            <td>{{$permesso->id}}</td>
                            <td>{{$permesso->name}}</td>
                            <td class="text-end">
                                <a class="btn btn-sm btn-warning" href="#">Modifica</a>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaConferma" onclick="transferdata('{{$permesso->id}}','{{$permesso->name}}')">Elimina</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="eliminaConferma" tabindex="-1" aria-labelledby="eliminaConfermaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('permissiondelete')}}" id="delete" method="POST">
                    @csrf
                <div class="modal-body">
                    Confermi l'eliminazione del permesso <span id="permesso"></span>
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
            $('#permesso').html(b);
            $('#deleteid').val(a);
            console.log('utente: '+a+'| userid: '+b);
        }
    </script>
@endsection

