@extends('layouts.navbars')

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
