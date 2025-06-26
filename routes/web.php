<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/sobrenos', function(){
    return 'Essa é a página sobre nós';
});
 
Route::get('/index',function(){
    return view('index');
});
 
// Rota de contato - Read
Route::get('/contatos', [ContatosController::class, 'index']) ->name('contatos.index');
 
// Rota Delete
Route::delete('/contatos/{contatoId}', [ContatosController::class, 'delete'])->name('contatos.delete');
 
//Rota de Create - método get
Route::get('/contatos/create', [ContatosController::class, 'create'])->name('contatos.create.get');
 
// Rota de Create - Post
Route::post('/contatos/create', [ContatosController::class, 'create'])->name('contatos.create.post');
 
 
// Rota de Update - método get
Route::get('/contatos/update/{contatoID}', [ContatosController::class, 'update'])->name('contatos.update.get');
 
// Rota de Update - método put
Route::put('/contatos/update/{contatoID}', [ContatosController::class, 'update'])->name('contatos.update.put');

 