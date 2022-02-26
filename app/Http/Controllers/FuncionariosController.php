<?php

namespace App\Http\Controllers;

use App\Models\Setor;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index()
    {
        $setor = Setor::pluck('nome', 'id')->toArray();
        return view('site.pages.funcionarios', compact('setor'));
    }
}
