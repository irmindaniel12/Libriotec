@extends('layouts.estilos')
@extends('layouts.app')
@extends('layouts.navbarsecundario')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Nombre -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- Apellido Paterno -->
                        <div class="form-group row">
                            <label for="ApellidoPaterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                            <div class="col-md-6">
                                <input id="ApellidoPaterno" type="text" class="form-control{{ $errors->has('ApellidoPaterno') ? ' is-invalid' : '' }}" name="ApellidoPaterno" value="{{ old('ApellidoPaterno') }}" required autofocus>
                                @if ($errors->has('ApellidoPaterno'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ApellidoPaterno') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- Apellido Materno -->
                        <div class="form-group row">
                            <label for="ApellidoMaterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                            <div class="col-md-6">
                                <input id="ApellidoMaterno" type="text" class="form-control{{ $errors->has('ApellidoMaterno') ? ' is-invalid' : '' }}" name="ApellidoMaterno" value="{{ old('ApellidoMaterno') }}" required autofocus>
                                @if ($errors->has('ApellidoMaterno'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ApellidoMaterno') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- Telefono -->
                        <div class="form-group row">
                            <label for="Telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="Telefono" type="text" class="form-control{{ $errors->has('Telefono') ? ' is-invalid' : '' }}" name="Telefono" value="{{ old('Telefono') }}" required autofocus>
                                @if ($errors->has('Telefono'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('Telefono') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- Nickname -->
                        <div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="nickname" type="text" class="form-control{{ $errors->has('nickname') ? ' is-invalid' : '' }}" name="nickname" value="{{ old('nickname') }}" required autofocus>

                                @if ($errors->has('nickname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nickname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- Password -->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <!-- Password Confirm -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection