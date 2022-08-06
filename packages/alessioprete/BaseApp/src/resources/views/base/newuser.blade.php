@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="">
                    <div class="form-group">
                        <label for="" class="control-label">Nome</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Conferma Email</label>
                        <input type="password" class="form-control">
                    </div>
                </form>
            </div>
            <x-input label="label">
                <x-slot name="title">titolo</x-slot>
                <h2>Questo è lo slot</h2>
            </x-input>
        </div>
    </div>
@endsection
