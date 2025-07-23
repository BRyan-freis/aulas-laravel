<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosController;
use App\Http\Controllers\UsuariosController;

// Contacts Routes

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

// User routes

//Rota de Usuários - Read
Route::get('/usuarios', [UsuariosController::class, 'index']) ->name('usuarios.index');
 
// Rota Delete de Usuários
Route::delete('/usuarios/{contatoId}', [UsuariosController::class, 'delete'])->name('usuarios.delete');
 
//Rota de Create Usuários - método get
Route::get('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create.get');
 
// Rota de Create Usuários - Post
Route::post('/usuarios/create', [UsuariosController::class, 'create'])->name('usuarios.create.post');
 
 
// Rota de Update de Usuários - método get
Route::get('/usuarios/update/{userID}', [UsuariosController::class, 'update'])->name('usuarios.update.get');
 
// Rota de Update Usuários - método put
Route::put('/usuarios/update/{userID}', [UsuariosController::class, 'update'])->name('usuarios.update.put');

 Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/sobrenos', function(){
    return 'Essa é a página sobre nós';
});
 
Route::get('/index',function(){
    return view('index');
});