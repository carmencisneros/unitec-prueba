<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNiveles()
    {
        $niveles = Nivel::all();

        return response()->json(['niveles' => $niveles ]);
    }
}
