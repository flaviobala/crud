<?php
namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduto;
use App\Models\Componentes;
use App\Models\Produto;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{   
     
     public function __construct(Produto $produto)
    {
        $this->produto = $produto; 
    }
     public function index (Request $request)
    {
        $pesquisar = $request->Pesquisar;
        $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');
        
        return view('pages.produtos.paginacao',compact('findProduto'));
    }
     public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Produto::find($id);
        $buscaRegistro->delete();
        return response()->json(['success' => true]);
    }
    public function cadastrarProduto(FormRequestProduto $request)
    {
        if($request->method() == "POST"){
           
            //criar produtos
           
          $data = $request->all();
          $componentes = new Componentes();
          $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
          Produto::create($data);
          Toastr::success('Gravado com sucesso');
          return redirect()->route('produto.index');
        }
        return view('pages.produtos.create');
    }

    public function atualizarProduto(FormRequestProduto $request, $id)
    { 
        if($request->method() == "PUT"){
         
            //criar produtos
         $data = $request->all();
         $componentes = new Componentes();
         $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
         $buscaRegistro = Produto::find($id);
         $buscaRegistro->update($data);
         Toastr::success('Dados atualizados com sucesso.');
         return redirect()->route('produto.index');
        }
        $findProduto = Produto::where('id', '=',$id)->first();
       
        return view('pages.produtos.atualiza', compact('findProduto'));
    }
}
