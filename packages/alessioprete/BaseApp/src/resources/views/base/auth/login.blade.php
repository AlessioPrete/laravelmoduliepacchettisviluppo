@extends(alessioprete_view('layouts.plain'))

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-4">
            <h3 class="text-center mb-4">Accedi</h3>
            <div class="card-group d-block d-md-flex row">
                <div class="card col-md-7 p-4 mb-0">
                    <div class="card-body">
                        <form class="col-md-12 p-t-10" role="form" method="POST" action="{{ route('auth.login') }}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <i class="icon icon-user"></i></span>
                                    <input class="form-control {{ $errors->has($username) ? ' is-invalid' : '' }}" type="text" placeholder="Username" name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}">
                                    @if ($errors->has($username))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first($username) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <i class="icon icon-key"></i></span>
                                    <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Ricordami
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if (config('alessioprete.base.setup_password_recovery_routes', true))
                        <div class="text-center"><a href="#">Password Dimenticata</a></div>
                    @endif
                    @if (config('alessioprete.base.registration_open'))
                        <div class="text-center"><a href="{{ route('auth.register') }}">Registrami</a></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
