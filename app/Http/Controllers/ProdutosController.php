<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto; 
    }

    public function index (Request $request){
        
        $pesquisar = $request->Pesquisar;
        $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.produtos.paginacao',compact('findProduto'));

    }
    public function delete(Request $request){

    }
}
