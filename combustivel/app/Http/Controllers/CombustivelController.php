<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use resources\views\consumo;

use App\Models\CalculoDeCombustivel;

class CombustivelController extends Controller
{
    public function index(): View
    {

        return view('consumo');
    }

    public function gasto(): View
    {

       $CalculoDeCombustivel = new CalculoDeCombustivel();

       $valor = $CalculoDeCombustivel->calcular();

        return view('resultado',['valor'=>$valor]);
    }
}