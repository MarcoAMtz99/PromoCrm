<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Paciente\Index;
use App\Http\Livewire\Paciente\Create;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/pacientes',Index::class)->name('pacientes');
Route::get('/pacientes/create',Create::class)->name('pacientes.create');