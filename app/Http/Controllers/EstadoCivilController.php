<?php

namespace App\Http\Controllers;

use App\Models\EstadoCivil;
use Illuminate\Http\Request;

class EstadoCivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEdosCiviles()
    {
        $edosCiviles = EstadoCivil::all();

        return response()->json(['edosCiviles' => $edosCiviles ]);
    }
}
