@extends('layouts.navbars')

@include('includes.estiloslibro')
@section('content')
<br>
<h4><a href="{{ url('/home') }}" class="btn btn-sm  fa fa-arrow-left" style="font-size: 20px;">Regresar</a></h4>
<br>
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-300 position-relative">
	<div class="col p-4 d-flex flex-column position-static">

		<h3 class="mb-2">{{$publicacion->titulo}}</h3>
		<strong class="d-inline-block mb-2 text-primary">Disponible</strong>
		<div class="mb-1 text-muted">{{$publicacion->autor}}</div>

		<p class="card-text mb-auto"><strong>Descripción:</strong></p>
		<p class="card-text mb-auto">{{$publicacion->description}}</p>

		<p class="card-text mb-auto"><strong>Autor:</strong>{{$publicacion->autor}}</p>

		<p class="card-text mb-auto"><strong>Genero:</strong>{{$publicacion->genero}}</p>

		<p class="card-text mb-auto"><strong>Número de Páginas:</strong>{{$publicacion->numero_paginas}}</p>

		<p class="card-text mb-auto"><strong>Editorial:</strong>{{$publicacion->editorial}}</p>

		<br>
		
		@if(Auth::user() && Auth::user()->id == $publicacion->user->id)
		<div class="actions">
			<a href="{{ route('publicacion.edit', ['id' => $publicacion->id]) }}" class="btn btn-sm btn-primary">Actualizar</a>


			<!-- Button to Open the Modal -->
			<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
				Eliminar
			</button>

			<!-- The Modal -->
			<div class="modal" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">¿Estas seguro?</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- Modal body -->
						<div class="modal-body">
							Si eliminar esta imagen nunca podrás recuperarla, ¿estas seguro de querer borrarla?
						</div>

						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
							<a href="{{ route('publicacion.delete', ['id' => $publicacion->id]) }}" class="btn btn-danger">Borrar definitivamente</a>
						</div>

					</div>
				</div>
			</div>
		</div>
		@endif
	</div>

	<div class="col-auto d-none d-lg-block">

		<li class='book'>
			<img src="{{ route('image.file',['filename' => $publicacion->image_path]) }}" />
		</li>

		<li style="list-style:none">
			<span class="fa fa-user">Subido por: {{$publicacion->user->name}} </span>
		</li>

		<li style="list-style:none">
			<span class="fa fa-clock-o"> {{\FormatTime::LongTimeFilter($publicacion->created_at)}}</span>
		</li>



	</div>




</div>

<h3>¿Te interesa? Enviale una Notificación a {{$publicacion->user->name}} <a href="" class="btn btn-sm  fa fa-bell" style="font-size: 20px;">Haz click aqui!!</a></h3>
@include('includes.footerdos')
@endsection