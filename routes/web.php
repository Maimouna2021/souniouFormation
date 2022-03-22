<?php

use App\Models\Formation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;

Route::get('/formation', function () {
    $formation = Formation::all(); 
    return view('welcome',[
        'formation' => $formation
    ]);
});

Route::post('/formation', function () {
    return 'Formulaire reçu';
});

Route::post('/formation', function () {
    return 'Votre email est ' . $_POST['email'];
});

Route::get('/formations', [FormationController::class,'inscription']);
Route::get('/index', [FormationController::class,'index']);
Route::get('/create', [FormationController::class,'create']);
Route::post('/createEnregistre', [FormationController::class,'createEnregistre']);

