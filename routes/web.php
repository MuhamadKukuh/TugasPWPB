<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;
use App\Models\kelas;
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
    return view('insert', [
        'kelas' => kelas::all()
    ]);
});

Route::post('/update/{id}', [crudController::class, 'update']);
Route::post('/insert', [crudController::class, 'insert']);
Route::get('/home', [crudController::class, 'index'])->name('index');
Route::get('/edit/{id}', [crudController::class, 'edit'])->name('apa');

Route::get('/delete/{id}', [crudController::class, 'destroy']);