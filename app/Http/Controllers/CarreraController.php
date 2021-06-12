<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCarreras($request)
    {
        $carreras = Carrera::where('id_nivel', $request)->get();

        return response()->json(['carreras' => $carreras ]);
    }
}
