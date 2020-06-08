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
							Si elimina esta publicación nunca podrás recuperarla, ¿estas seguro de querer borrarla?
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


                                @if (Auth::guest())
                                    <h1>el usuario no inicio</h1>
                                @else
                                <form method="POST" action="{{route('solicitors')}}" nctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" type="number" name="user_creacion_id" value="{{$publicacion->user_id}}">
                                    <input type="hidden" type="text" name="nombre_user_creacion" value="{{$publicacion->user->name}}">
                                    <input type="hidden" type="number" name="user_pedido_id" value="{{auth()->user()->id}}">
                                    <input type="hidden" type="text" name="nombre_usu_pedido" value="{{ auth()->user()->name }}">
                                    <input type="hidden" type="text" name="nombre_libro" value="{{$publicacion->titulo}}">

<h3>¿Te interesa? Enviale una Notificación a {{$publicacion->user->name}}  <button style="padding-top:0px; padding-left:0; " type="submit"  style="font-size: 20px;" class="btn btn-link"><h1 class="btn btn-sm  fa fa-bell"> Haz click aqui!!</h1></button></h3>



                                 </form>
                                @endif
@include('includes.footerdos')
@endsection
