<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function FormularioCadastroCarro(){
        return view('cadastrarCarro');
    }//fim da funcao

    public function EditarCarro(){
        return view('editarCarro');
    }//fim da funcao
}//fim da classe
