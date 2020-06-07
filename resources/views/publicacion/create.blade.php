@extends('layouts.navbars')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

			<div class="card">
				<div class="card-header">Subir un libro</div>


				<div class="card-body">

					<form method="POST" action="{{ route('publicacion.save') }}" enctype="multipart/form-data">
						@csrf

						<!-- TITULO -->
						<div class="form-group row">
							<label for="titulo" class="col-md-3 col-form-label text-md-right">Titulo</label>
							<div class="col-md-7">
								<input id="titulo" name="titulo" type="text"  class="form-control {{ $errors->has('titulo') ? 'is-invalid' : '' }}" required>

								@if($errors->has('titulo'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('titulo') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<!-- Imagen del libro -->
						<div class="form-group row">
							<label for="image_path" class="col-md-3 col-form-label text-md-right">Imagen</label>
							<div class="col-md-7">
								<input id="image_path" type="file" name="image_path" class="form-control {{ $errors->has('image_path') ? 'is-invalid' : '' }}" required/>

								@if($errors->has('image_path'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('image_path') }}</strong>
								</span>
								@endif
								
							</div>
						</div>
						
						<!-- Descripción -->
						<div class="form-group row">
							<label for="description" class="col-md-3 col-form-label text-md-right">Descripción</label>
							<div class="col-md-7">
								<textarea id="description" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" required></textarea>

								@if($errors->has('description'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('description') }}</strong>
								</span>
								@endif
							</div>
						</div>
						
						<!-- Genero -->
						<div class="form-group row">
							<label for="genero" class="col-md-3 col-form-label text-md-right">Genero</label>
							<div class="col-md-7">
								<input id="genero" name="genero" type="text"  class="form-control {{ $errors->has('genero') ? 'is-invalid' : '' }}" required>

								@if($errors->has('genero'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('genero') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<!-- Editorial -->
						<div class="form-group row">
							<label for="editorial" class="col-md-3 col-form-label text-md-right">Editorial</label>
							<div class="col-md-7">
								<input id="editorial" name="editorial" type="text"  class="form-control {{ $errors->has('editorial') ? 'is-invalid' : '' }}" required>

								@if($errors->has('editorial'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('editorial') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<!-- Autor -->
						<div class="form-group row">
							<label for="autor" class="col-md-3 col-form-label text-md-right">Autor</label>
							<div class="col-md-7">
								<input id="autor" name="autor" type="text"  class="form-control {{ $errors->has('autor') ? 'is-invalid' : '' }}" required>

								@if($errors->has('autor'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('autor') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<!-- Fecha Publicación -->
						<div class="form-group row">
							<label for="fecha_publicacion" class="col-md-3 col-form-label text-md-right">Fecha de Publicación</label>
							<div class="col-md-7">
								<input id="fecha_publicacion" name="fecha_publicacion" type="date"  class="form-control {{ $errors->has('fecha_publicacion') ? 'is-invalid' : '' }}" required>

								@if($errors->has('fecha_publicacion'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('fecha_publicacion') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<!-- Numero de paginas -->
						<div class="form-group row">
							<label for="numero_paginas" class="col-md-3 col-form-label text-md-right">Numero de Paginas</label>
							<div class="col-md-7">
								<input id="numero_paginas" name="numero_paginas" type="number"  class="form-control {{ $errors->has('numero_paginas') ? 'is-invalid' : '' }}" required>

								@if($errors->has('numero_paginas'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('numero_paginas') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							
							<div class="col-md-6 offset-md-3">
								<input type="submit" class="btn btn-primary" value="Subir libro">
							</div>
						</div>


					</form>

				</div>
			</div>

        </div>
    </div>
</div>

@endsection
