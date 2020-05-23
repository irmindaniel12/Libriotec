@extends('layouts.navbars')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			
			
            <div class="card">
                <div class="card-header">Configuración de mi cuenta</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data" aria-label="Configuración de mi cuenta">
                        @csrf

						<!-- Nombre -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ Auth::user()->name }}" required autofocus>

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
                                <input id="ApellidoPaterno" type="text" class="form-control{{ $errors->has('ApellidoPaterno') ? ' is-invalid' : '' }}" name="ApellidoPaterno" value="{{ Auth::user()->ApellidoPaterno }}" required autofocus>

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
                                <input id="ApellidoMaterno" type="text" class="form-control{{ $errors->has('ApellidoMaterno') ? ' is-invalid' : '' }}" name="ApellidoMaterno" value="{{ Auth::user()->ApellidoMaterno }}" required autofocus>

                                @if ($errors->has('ApellidoMaterno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ApellidoMaterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Telefono -->
                        <div class="form-group row">
                            <label for="Telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="Telefono" type="text" class="form-control{{ $errors->has('Telefono') ? ' is-invalid' : '' }}" name="Telefono" value="{{ Auth::user()->Telefono }}" required autofocus>

                                @if ($errors->has('Telefono'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<!-- Apodo -->
						<div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right">{{ __('Apodo') }}</label>

                            <div class="col-md-6">
                                <input id="nickname" type="text" class="form-control{{ $errors->has('nickname') ? ' is-invalid' : '' }}" name="nickname" value="{{ Auth::user()->nickname }}" required autofocus>

                                @if ($errors->has('nickname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Avatar -->
						<div class="form-group row">

                            <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
								@include('includes.avatar')
                                <input id="image_path" type="file" class="form-control{{ $errors->has('image_path') ? ' is-invalid' : '' }}" name="image_path">

                                @if ($errors->has('image_path'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image_path') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Botón guardar cambios -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar cambios
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