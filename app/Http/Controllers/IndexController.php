<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::orderBy('nome', 'desc')->get();
        return view('site.index.index', compact('funcionarios'));
    }
}
