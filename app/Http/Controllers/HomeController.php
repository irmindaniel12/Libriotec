<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $publicaciones = Publicacion::orderBy('id', 'desc')->paginate(6);

        return view('home',[
			'publicaciones' => $publicaciones
		]);
    }
    
}
