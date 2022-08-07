@extends(alessioprete_view('layouts.coreui'))
@section('content')
    <div class="container-lg">
        <div class="card">
            <div class="card-body row">
                <form action="">
                    <x-input label="Nome" field="name"></x-input>
                    <x-input label="Email" field="email" type="email"></x-input>
                    <x-input label="Password" field="password" type="password"></x-input>
                    <x-input label="Conferma Password" field="confirmpassword" type="password"></x-input>
                </form>
            </div>

        </div>
    </div>
@endsection
