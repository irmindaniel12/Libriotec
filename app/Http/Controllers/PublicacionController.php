<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Publicacion;
use App\notificacion;
use Illuminate\Support\Facades\Auth;


class PublicacionController extends Controller
{
	// public function __construct(){
    //     $this->middleware('auth');
    // }

	public function create(){
		return view('Publicacion.create');
	}

	public function save(Request $request){

		//Validación
		$validate = $this->validate($request, [
            'titulo' => 'required|string|max:255',
            'image_path'  => 'required|image',
            'description' => 'required',
            'genero' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'autor' => 'required|string|max:255',

		]);

        // Recoger datos
        $titulo = $request->input('titulo');
		$image_path = $request->file('image_path');
        $description = $request->input('description');
        $genero = $request->input('genero');
        $editorial = $request->input('editorial');
        $autor = $request->input('autor');
        $fecha_publicacion = $request->input('fecha_publicacion');
        $numero_paginas = $request->input('numero_paginas');

		// Asignar valores nuevo objeto
		$user = \Auth::user();
		$publi = new Publicacion();
        $publi->user_id = $user->id;
        $publi->titulo = $titulo;
        $publi->description = $description;
        $publi->genero = $genero;
        $publi->editorial = $editorial;
        $publi->autor = $autor;
        $publi->fecha_publicacion = $fecha_publicacion;
        $publi->numero_paginas = $numero_paginas;

		// Subir fichero
		if($image_path){
			$image_path_name = time().$image_path->getClientOriginalName();
			Storage::disk('images')->put($image_path_name, File::get($image_path));
			$publi->image_path = $image_path_name;
		}

		$publi->save();

		return redirect()->route('home')->with([
			'message' => 'Has subido tu libro de manera exitosa!!!'
		]);
	}

	public function getImage($filename){
		$file = Storage::disk('images')->get($filename);
		return new Response($file, 200);
	}

	public function detail($id){
		$publicacion = Publicacion::find($id);

		return view('Publicacion.detail',[
			'publicacion' => $publicacion
		]);
	}

	public function delete($id){
		$user = \Auth::user();
		$publicacion = Publicacion::find($id);

		if($user && $publicacion && $publicacion->user->id == $user->id){

			// Eliminar ficheros de imagen
			Storage::disk('images')->delete($publicacion->image_path);

			// Eliminar registro imagen
			$publicacion->delete();

			$message = array('message' => 'La imagen se ha borrado correctamente.');
		}else{
			$message = array('message' => 'La imagen no se ha borrado.');
		}

		return redirect()->route('home')->with($message);
	}

	public function edit($id){
		$user = \Auth::user();
		$publicacion = Publicacion::find($id);

		if($user && $publicacion && $publicacion->user->id == $user->id){
			return view('publicacion.edit', [
				'publicacion' => $publicacion
			]);
		}else{
			return redirect()->route('home');
		}
	}

	public function update(Request $request){
		//Validación
		$validate = $this->validate($request, [
			'titulo' => 'required|string|max:255',
            'image_path'  => 'image',
            'description' => 'required',
            'genero' => 'string|max:255',
            'editorial' => 'string|max:255',
            'autor' => 'string|max:255',
		]);

		// Recoger datos
		$id = $request->input('id');
		$titulo = $request->input('titulo');
		$image_path = $request->file('image_path');
        $description = $request->input('description');
        $genero = $request->input('genero');
        $editorial = $request->input('editorial');
        $autor = $request->input('autor');
        $fecha_publicacion = $request->input('fecha_publicacion');
        $numero_paginas = $request->input('numero_paginas');

		// Conseguir objeto image
		$publi = Publicacion::find($id);
		$publi->titulo = $titulo;
		$publi->description = $description;
		$publi->genero = $genero;
		$publi->editorial = $editorial;
		$publi->autor = $autor;
		$publi->fecha_publicacion = $fecha_publicacion;
		$publi->numero_paginas = $numero_paginas;

		// Subir fichero
		if($image_path){
			$image_path_name = time().$image_path->getClientOriginalName();
			Storage::disk('images')->put($image_path_name, File::get($image_path));
			$publi->image_path = $image_path_name;
		}

		// Actualizar registro
        $publi->update();

		return redirect()->route('publicacion.detail', ['id' => $id])
						 ->with(['message' => 'Imagen actualizada con exito']);
	}



   // solicitar libros
   public function solicitar(Request $request){
            //Validación

        $validate = $this->validate($request, [
            'user_creacion_id' => 'required|numeric|max:255',
            'nombre_user_creacion' => 'required|max:255',
            'user_pedido_id' => 'required|numeric|max:255',
            'nombre_usu_pedido' => 'required|max:255',
            'nombre_libro' => 'required|max:255',
        ]);

         //cargar datos
         $notificacion=new notificacion();
         $user = \Auth::user();
         $notificacion->user_creacion_id=$request->input('user_creacion_id');
         $notificacion->nombre_user_creacion=$request->input('nombre_user_creacion');
         $notificacion->user_pedido_id=$request->input('user_pedido_id');
         $notificacion->nombre_usu_pedido=$request->input('nombre_usu_pedido');
         $notificacion->nombre_libro=$request->input('nombre_libro');

          //guardar datos
         $notificacion->save();
         $datos = ['request' => $request];
		return redirect()->route('home')->with('status','libro solicitado ' );

   }




    //Para guardar si el usuario aceptop o rechaso el cambio
    public function valiarcambio(Request $request){

        //Validación
    $user = \Auth::user();
    $validate = $this->validate($request, [
        'status' => 'required|numeric|max:255',
    ]);

        // Recoger datos
        $id = $request->input('id');
        $status=$request->input('status');

         //cargar datos
            $notificacion = notificacion::find($id);
	    	$notificacion->status = $status;

          //guardar datos
         $notificacion->update();
         if ( $status==2) {
            return redirect()->route('profile', ['id' => Auth::user()->id])->with('status','Aceptaste  el cambio' );
         } else {
        return redirect()->route('profile', ['id' => Auth::user()->id])->with('status','Rechazarte el cambio' );
    }




}


}
