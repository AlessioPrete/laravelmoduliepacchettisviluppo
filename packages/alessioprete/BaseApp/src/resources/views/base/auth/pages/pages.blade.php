@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="btn-toolbar mb-2">
        <a class="btn btn-primary" href="{{route('newpage')}}"><i class="icon icon-plus1"></i> Nuova pagina</a>
    </div>
    <div class="container-lg">
        <div class="row">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Titolo</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th class="text-end">Azioni</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($pagine as $pagina)
                        <tr>
                            <td>{{$pagina->id}}</td>
                            <td>{{$pagina->title}}</td>
                            <td><a href="{{url($pagina->slug)}}">{{$pagina->slug}}</a></td>
                            <td>{{$pagina->template}}</td>
                            <td class="text-end">
                                <a class="btn btn-sm btn-warning" href="{{route('editpage', $pagina->id)}}">Modifica</a>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaConferma" onclick="transferdata('{{$pagina->title}}', '{{$pagina->id}}')">Elimina</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$pagine->links('vendor.pagination.bootstrap-4')}}
    </div>

    <!-- Modal -->
    <div class="modal fade" id="eliminaConferma" tabindex="-1" aria-labelledby="eliminaConfermaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('destroypage')}}" id="delete" method="POST">
                    @csrf
                    <div class="modal-body">
                        Confermi l'eliminazione della pagina <span id="pagina"></span>
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
            $('#pagina').html(a);
            $('#deleteid').val(b);
        }
    </script>
@endsection
