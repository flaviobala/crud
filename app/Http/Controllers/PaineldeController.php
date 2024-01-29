<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use Illuminate\Http\Request;

class PaineldeController extends Controller
{
    public function index ()
    {
        $totalDeProdutoCadastrado = $this->buscaTotalProdutoCadastrado();
        $totalDeClienteCadastrado = $this->buscaTotalClienteCadastrado();
        $totalDeVendaCadastrado = $this->buscaTotalVendaCadastrado();
        $totalDeUsuarioCadastrado = $this->buscaTotalUsuarioCadastrado();

        
       return view('pages.painel.painel', compact('totalDeProdutoCadastrado','totalDeClienteCadastrado','totalDeVendaCadastrado','totalDeUsuarioCadastrado'));
    }

    public function buscaTotalProdutoCadastrado()
    {
        $findProduto = Produto::all()->count();

        return $findProduto;
    }

    public function buscaTotalClienteCadastrado()
    {
        $findCliente = Cliente::all()->count();

        return $findCliente;
    }

    public function buscaTotalVendaCadastrado()
    {
        $findVenda = Venda::all()->count();

        return $findVenda;
    }

    public function buscaTotalUsuarioCadastrado()
    {
        $findUsuario = User::all()->count();

        return $findUsuario;
    }
}
