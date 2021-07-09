<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecettesController;

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
    return view('home');
});

Route::get('/ajout', function () {
    return view('ajoutRecette');
});

Route::get('/recettes', [RecettesController::class, "showRecipes"]);
Route::get('/recettes/{id}', [RecettesController::class, "showRecipe"]);
Route::post('/ajoutRecette', [RecettesController::class, "store"]);
