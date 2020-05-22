<?php
/**controlador del perfil de usuario*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UsuarioController extends Controller
{
    public function PostUsuario(Type $var = null)
    {
        # code...
    }

    public function getUsuario(){
        if(empty((auth()->user()->id))){
            return redirect()->action('HomeController@index');
        }
        else{
            $Usuario=DB::table('users')->where('id',(auth()->user()->id))->first();
            $libros=DB::table('publicaciones')->where('Id_usuario',(auth()->user()->id))->get();
            return view('Usuario.Perfil',array(
                'usuario'=>$Usuario,
                'libros'=>$libros
            ));
        }
    }
/**public function postUpdateUsuario(id $id,array $data) {
        $Usuario=DB::table('users')->where('id',$id)->update(array(
            //'name' => $data->input('name'),
            'name' => $data['name'],
        ));
        return redirect()->action('HomeController@index');
    }
 */
    /**public function postUpdateUsuario(array $data,id $id) {
        $datosUsuario=$request->except(['_token','_method']);
        $Usuario=DB::table('users')->where('id',(auth()->user()->id))->update(array(
            'name' => $data->input('name'),

        ));
        return redirect()->action('HomeController@index');
    } */

    public function update(array $data,_token $_token)
    {
        $datosUsuario=$data->except($_token);
         User::update('id',(auth()->user()->id), [
            'name' => $datosUsuario['name'],
            ]);
    }

    public function getUpdateUsuario(){

        if(empty((auth()->user()->id))){
            return redirect()->action('HomeController@index');
        }
        else{
            $Usuario=DB::table('users')->where('id',(auth()->user()->id))->first();
            return view('Usuario.Actualizar',array(
                'usuario'=>$Usuario,
            ));
        }
    }

}
