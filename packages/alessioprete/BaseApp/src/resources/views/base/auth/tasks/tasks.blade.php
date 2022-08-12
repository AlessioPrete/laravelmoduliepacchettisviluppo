@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="btn-toolbar mb-2">
        <a class="btn btn-primary" href="{{route('newtask')}}"><i class="icon icon-plus1"></i> Nuova Nota</a>
    </div>
    <div class="container-lg">
        <div class="row">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                <tr>
                    <th></th>
                    <th>Titolo</th>
                    <th>Scadenza</th>
                    <th class="text-end">Azioni</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection
