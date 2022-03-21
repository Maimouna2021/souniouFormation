<?php

use App\Models\Formation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;



Route::get('/', function () {
    $formation = Formation::all(); 
    return view('welcome');
});

Route::get('/formations', [FormationController::class,'index']);