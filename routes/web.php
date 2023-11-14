<?php

use App\Http\Controllers\articleController;
use App\Http\Controllers\fournController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//All
Route::get('/', function () {
    return view('Home');
})->name('home');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Fornisseur all questions
Route::get('fornisseurshome',[fournController::class,'forn_home'])->name('fornisseurhome');
//The insert.. in fornisseur 
Route::get('fornisseurshome/insert',[fournController::class,'new_insert'])->name('fornisseurhome_insert');
//List des Fornisseurs
Route::get('fornisseurshome/list',[fournController::class,'new_list'])->name('fornisseurhome_list');
//List des noms et villes Fornisseurs
Route::get('fornisseurshome/list_noms_villes',[fournController::class,'new_list_noms_ville'])->name('fornisseurhome_list_noms_villes');
//List des Fornisseurs d'Agadir
Route::get('fornisseurshome/list_agadir',[fournController::class,'new_agadir'])->name('fornisseurhome_agadir');
//List des Villes desFornisseurs 
Route::get('fornisseurshome/list_villes',[fournController::class,'new_villes'])->name('fornisseurhome_villes');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//article home
Route::get('articlehome',[articleController::class,'arti_home'])->name('articlehome');
//Q5
Route::get('articlehome/Q5',[articleController::class,'q5'])->name('articlehome_5');
//Q6
Route::get('articlehome/Q6',[articleController::class,'q6'])->name('articlehome_6');
//Q7
Route::get('articlehome/Q7',[articleController::class,'q7'])->name('articlehome_7');
//Q8
Route::get('articlehome/Q8',[articleController::class,'q8'])->name('articlehome_8');
//Q9
Route::get('articlehome/Q9',[articleController::class,'q9'])->name('articlehome_9');
//Q10
Route::get('articlehome/Q10',[articleController::class,'q10'])->name('articlehome_10');
//Q11
Route::get('articlehome/Q11',[articleController::class,'q11'])->name('articlehome_11');
//Q12
Route::get('articlehome/Q12',[articleController::class,'q12'])->name('articlehome_12');


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//show
Route::get('fornisseurs/{fornisseur}/show',[fournController::class,'show'])->name('show_forn');

//edit n update
Route::get('fornisseurs/{fornisseur}/edit',[fournController::class,'edit'])->name('edit_forn');
Route::put('fornisseurs/{fornisseur}/update',[fournController::class,'update'])->name('update_forn');

//destroy
Route::get('fornisseurs/{fornisseur}/destroy',[fournController::class,'destroy'])->name('destroy_forn');
