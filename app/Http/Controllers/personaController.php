<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class personaController extends Controller
{
    public function Saludar(){                
        $arreglo=["nombre"=>"Esther"];
        return view("vista1",$arreglo);
    }
}
