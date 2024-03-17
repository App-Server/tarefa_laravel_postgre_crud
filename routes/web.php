<?php

use App\Http\Controllers\IntracomController;
use App\Http\Controllers\TarefaController;
use App\Models\TarefaModel;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

// Routas de Tarefas
Route::get('/tarefa', [TarefaController::class, 'create'])->name('tarefa.index');
Route::get('/tarefa/create', [TarefaController::class, 'create'])->name('tarefa.create');
Route::post('/tarefa', [TarefaController::class, 'store'])->name('tarefa.store');
Route::get('/tarefa/{id}', [TarefaController::class, 'show'])->name('tarefa.show');
Route::get('/tarefa/{tarefa}/edit', [TarefaController::class, 'edit'])->name('tarefa.edit');
Route::put('/tarefa/{tarefa}', [TarefaController::class, 'update'])->name('tarefa.update');
Route::delete('/tarefa/{tarefa}', [TarefaController::class, 'destroy'])->name('tarefa.destroy');

// Routas do Intracom
Route::get('/intracom', [IntracomController::class, 'index'])->name('intracom.index');
Route::get('/intracom/create_intranet_comunicacao', [IntracomController::class, 'create'])->name('intracom.create');
Route::post('/intracom', [IntracomController::class, 'store'])->name('intracom.store');
Route::get('/intracom/show_intranet_comunicacao', [IntracomController::class, 'show'])->name('intracom.show');
Route::delete('/intracom/{infos}', [IntracomController::class, 'destroy'])->name('intracom.destroy');

// Rotas Financeiro
Route::get('/cadastrar-despesas', function (){
    return view('cadastrar-despesas');
});


// Rotas Comentar Tarefa
Route::get('/tarefa/comentar', function () {
    return view('tarefa.comentar');
});


// Rotas Home
Route::get('/painel/home', function () {
    return view('painel.home');
});