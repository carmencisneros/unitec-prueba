<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function created(Request $request)
    {
        $user=User::create([
            'name'             => $request->data['nombre'],
            'apellido_paterno' => $request->data['apellido_paterno'],
            'apellido_materno' => $request->data['apellido_materno'],
            'edad'             => $request->data['edad'],
            'id_estado_civil'  => $request->data['estado_civil'],
            'id_genero'        => $request->data['genero'],
            'id_nivel'         => $request->data['nivel'],
            'id_carrera'       => $request->data['carrera'],
            'email'            => $request->data['email'],
            'password'         => bcrypt($request->data['contraseña']),
        ]);
        Auth::login($user);
        return response()->json(['response' => 'OK' ]);
    }
}
