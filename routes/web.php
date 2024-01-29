<?php
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\PaineldeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VendaController;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

    Route::get('/', function() {
      return view('index');

    });

     Route::prefix('painel')->group(function (){
     Route::get('/',[PaineldeController::class,'index'])->name('painel.index');

    });

 Route::prefix('produtos')->group(function (){
 Route::get('/', [ProdutosController::class,'index'])->name('produto.index');
//Cadastro de produto
 Route::get('/cadastrarProduto', [ProdutosController::class,'cadastrarProduto'])->name('cadastrar.produto');
 Route::post('/cadastrarProduto', [ProdutosController::class,'cadastrarProduto'])->name('cadastrar.produto');
//Atualizar produto
 Route::get('/atualizarProduto/{id}', [ProdutosController::class,'atualizarProduto'])->name('atualizar.produto');
 Route::put('/atualizarProduto/{id}', [ProdutosController::class,'atualizarProduto'])->name('atualizar.produto');
 Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
});

    Route::prefix('Clientes')->group(function (){
    Route::get('/',[ClientesController::class,'index'])->name('cliente.index');
                                           //Cadastro de Cliente
    Route::get('/cadastrarCliente', [ClientesController::class,'cadastrarCliente'])->name('cadastrar.cliente');
    Route::post('/cadastrarCliente', [ClientesController::class,'cadastrarCliente'])->name('cadastrar.cliente');
                                           //Atualizar Cliente
    Route::get('/atualizarCliente/{id}', [ClientesController::class,'atualizarCliente'])->name('atualizar.cliente');
    Route::put('/atualizarCliente/{id}', [ClientesController::class,'atualizarCliente'])->name('atualizar.cliente');
    Route::delete('/delete', [ClientesController::class, 'delete'])->name('cliente.delete');
    });

    Route::prefix('Vendas')->group(function (){
    Route::get('/',[VendaController::class,'index'])->name('venda.index');
                                               
    Route::get('/cadastrarVenda', [VendaController::class,'cadastrarVenda'])->name('cadastrar.venda');
    Route::post('/cadastrarVenda', [VendaController::class,'cadastrarVenda'])->name('cadastrar.venda');
    Route::get('/enviacomprovantedeemail/{id}', [VendaController::class,'enviacomprovantedeemail'])->name('enviacomprovantedeemail.venda');
    });

    Route::prefix('Usuario')->group(function (){
        Route::get('/',[UsuarioController::class,'index'])->name('usuario.index');
        Route::get('/cadastrarUsuario', [UsuarioController::class,'cadastrarUsuario'])->name('cadastrar.usuario');
        Route::post('/cadastrarUsuario', [UsuarioController::class,'cadastrarUsuario'])->name('cadastrar.usuario');
                                               //Atualizar usuario
        Route::get('/atualizarUsuario/{id}', [UsuarioController::class,'atualizarUsuario'])->name('atualizar.usuario');
        Route::put('/atualizarUsuario/{id}', [UsuarioController::class,'atualizarUsuario'])->name('atualizar.usuario');
        Route::delete('/delete', [UsuarioController::class, 'delete'])->name('usuario.delete');
                                                   
      });