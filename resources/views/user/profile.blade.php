@extends('layouts.navbars')
<!--Alerta de Aceptar o rechasar el libro-->

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

@section('content')
    @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="padding: 10px">
		@include('includes.perfil')
    </div>
</div>

@endsection
