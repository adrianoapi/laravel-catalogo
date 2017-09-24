<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Produto;

class ProdutosController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        return view('produto.index', array('produtos' => $produtos));
    }

    public function show($id)
    {
        $produtos = Produto::find($id);
        echo "<pre>";
        print_r($produtos);
        echo "</pre>";
    }

}
