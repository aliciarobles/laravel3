<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Función para mostrar los préstamos del usuario autenticado
    public function showMyLoans()
    {
        // Obtener los préstamos del usuario autenticado
        $prestamos = auth()->user()->prestamos;

        // Devolver una vista que muestre los préstamos del usuario
        return view('my-loans', ['prestamos' => $prestamos]);
    }

}
