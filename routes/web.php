<?php
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TracksController;
use App\Http\Controllers\CarController;
use App\Models\Tracks;
use App\Models\Team;
use App\Models\Car;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "F1 | Home"
    ]);
});

Route::get('/team/all', [TeamController::class, 'index']);

Route::get('/tracks/all', [TracksController::class, 'index']);

Route::get('/cars/all', [CarController::class, 'index']);

Route::get('/tracks/detail/{tracks}', [TracksController::class, 'show']);

Route::get('/team/detail/{team}', [TeamController::class, 'show']);

Route::get('/cars/detail/{car}', [CarController::class, 'show']);

