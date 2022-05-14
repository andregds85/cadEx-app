<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController  extends Controller
{
      public function index()
    {
     return view('Produto.index');
    }
      
    public function store(Request $request)
    {
        request()->validate([
              
        ]);    
        Produto::create($request->all());
        echo "<script> alert('Cadastro Efetuado com Sucesso'); </script>";
        return view('/home');

      }

}

