 @extends('layouts.navbars')
 @include('includes.estiloslibro')
@include('Usuario.EstiloPerfil')
<!--Resultado de controler de usuario -->
<!--Ususario-->
<h1>{{$usuario->name}}</h1>
<h1>{{$usuario->ApellidoPaterno}}</h1>
<h1>{{$usuario->ApellidoMaterno}}</h1>
<h1>{{$usuario->Telefono}}</h1>
<h1>{{$usuario->nickname}}</h1>
<h1>{{$usuario->email}}</h1>
<h1>--------------------libros-------------------</h1>
<!--libros del usuario-->
@foreach($libros as $libro)
<img src="{{asset($libro->Imagenes)}}" alt="productoimagen" width="250">
<h1>{{$libro->titulo}}</h1>
<h1>{{$libro->Description}}</h1>
<h1>{{$libro->Genero}}</h1>
<h1>{{$libro->Editorial}}</h1>
<h1>{{$libro->Autor}}</h1>
<h1>{{$libro->Fecha_Publicacion}}</h1>
<h1>{{$libro->Numero_paginas}}</h1>
@endforeach
 @include('includes.footerdos')

