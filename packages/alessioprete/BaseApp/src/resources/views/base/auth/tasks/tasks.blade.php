@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="btn-toolbar mb-2">
        <a class="btn btn-primary" href="{{route('newtask')}}"><i class="icon icon-plus1"></i> Nuova Nota</a>
        <a class="btn btn-success ms-2" href="{{route('taskscompletati')}}">Task Completati</a>
    </div>
    <div class="container-lg">
        <div class="row">
            <table class="table table-sm table-hover accordion">
                <thead class="table-dark">
                <tr>
                    <th><input type="checkbox" name="check-all" id="check-all"></th>
                    <th>Titolo</th>
                    <th class="text-end">Scadenza</th>
                    <th class="text-end">Azioni</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>
                                <input type="checkbox" name="check[]">
                                @if(isset($task->contenuto))<i class="icon icon-circle-down px-2" data-bs-toggle="collapse" data-bs-target="#r{{$task->id}}" aria-expanded="true" aria-controls="r{{$task->id}}"></i>@endif
                            </td>
                            <td>
                                {{$task->titolo}}
                            </td>
                            <td class="text-end" @if($task->scadenza < today()) style="color: red;" @endif>{{formatDate($task->scadenza)}}</td>
                            <td class="text-end" id="tasks-table">
                                <button class="btn btn-sm btn-success" onclick="trasferisciCompletato('{{$task->titolo}}','{{$task->id}}')" data-bs-toggle="modal" data-bs-target="#taskcompletato">Completato</button>
                                <a class="btn btn-sm btn-warning" href="{{route('edittask', $task->id)}}">Modifica</a>
                                <button class="btn btn-sm btn-danger" onclick="transferdata('{{$task->titolo}}','{{$task->id}}')" data-bs-toggle="modal" data-bs-target="#eliminaConferma">Elimina</button>
                            </td>
                        </tr>
                        @if(isset($task->contenuto))
                        <tr class="collapse accordion-collapse" id="r{{$task->id}}" data-bs-parent=".table" style="background-color: lightgray;">
                            <td></td>
                            <td colspan="2">
                                {{$task->contenuto}}
                            </td>
                            <td></td>
                        </tr>
                        @endif
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
                    <h5 class="modal-title" id="exampleModalLabel">Elimina nota</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('deletetask')}}" id="delete" method="POST">
                    @csrf
                    <div class="modal-body">
                        Confermi l'eliminazione della nota <span id="nota"></span>
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
    <!-- Modal -->
    <div class="modal fade" id="taskcompletato" tabindex="-1" aria-labelledby="taskcompletatoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="completatoModalLabel">Task Completato</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('completatask')}}" id="completaform" method="POST">
                    @csrf
                    <div class="modal-body">
                        Confermi il completamento della nota <span id="completa"></span>
                        <input type="hidden" value="" id="completaid" name="completaid">
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
            $('#nota').html(a);
            $('#deleteid').val(b);
        }
        function trasferisciCompletato(a,b)
        {
            $('#completa').html(a);
            $('#completaid').val(b);
        }
        $(document).ready(function(){console.log('banana');});
    </script>
@endsection
