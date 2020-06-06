@extends('layouts.navbars')


@section('content')

@include('includes.estiloslibro')

<main role="main">

    <div class="container ">

        <h3 class="display-4 font-italic">Libros disponibles</h3>
        @include('includes.buscador')
        <hr>

        <div class="row mb-2">
        @foreach($publicaciones as $publi)
				@include('includes.librocard',['publi'=>$publi])
			@endforeach
        </div>
        <hr>
        @include('includes.pagination')
</main>
@include('includes.footerdos')
@endsection
