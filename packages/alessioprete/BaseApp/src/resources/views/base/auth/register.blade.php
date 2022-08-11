@extends(alessioprete_view('layouts.plain'))

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-4">
            <h3 class="text-center mb-4">Registrati</h3>
            <div class="card-group d-block d-md-flex row">
                <div class="card col-md-7 p-4 mb-0">
                    <div class="card-body">
                        <form class="col-md-12 p-t-10" role="form" method="POST" action="#">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <i class="icon icon-user"></i></span>
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}" placeholder="Nome Utente">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <i class="icon icon-mail-envelope-open3"></i></span>
                                    <input placeholder="Email" type="{{ alessioprete_authentication_column()=='email'?'email':'text'}}" class="form-control{{ $errors->has(alessioprete_authentication_column()) ? ' is-invalid' : '' }}" name="{{ alessioprete_authentication_column() }}" id="{{ alessioprete_authentication_column() }}" value="{{ old(alessioprete_authentication_column()) }}">

                                    @if ($errors->has(alessioprete_authentication_column()))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first(alessioprete_authentication_column()) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <i class="icon icon-key"></i></span>
                                    <input placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <i class="icon icon-lock"></i></span>
                                    <input placeholder="Conferma Password" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" id="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Registrami
                                </button>
                            </div>
                        </form>
                    </div>
                    @if (config('alessioprete.base.setup_password_recovery_routes', true))
                        <div class="text-center"><a href="#">Password dimenticata</a></div>
                    @endif
                    <div class="text-center"><a href="{{route('auth.login')}}">Login</a></div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
