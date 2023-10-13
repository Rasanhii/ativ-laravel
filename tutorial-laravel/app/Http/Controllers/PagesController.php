<?php

namespace App\Http\Controllers;

use Illuminate\View\View;


class PagesController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function amigos() {
        $amigos = [

        ['nome' => 'Amanda Cursino', 'idade' => 19],
        ['nome' => 'Rafael Faria', 'idade' => 18],
        ['nome' => 'Neto', 'idade' => 24]
    ];
    return $amigos;
    }

    public function sobre(): View
    {
        $eu = [
            'nome' => 'Jônatas Pereira',
            'idade' => 19
        ];
        
        return view('sobre', compact('eu'));
    }
};
