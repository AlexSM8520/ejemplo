<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class visit_Controler extends Controller
{
    public function saludar($nombre)
    {
        return view('saludo', ['nombre' => $nombre]);
    }
}
