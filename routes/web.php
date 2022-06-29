<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SpaceshipController;
use App\Http\Controllers\CrewRoleController;

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

Route::get(
    '/home',
    [UserController::class, 'logged'],
)->middleware(['auth', 'agecheck']);

Route::get('/fv_profil', [UserController::class, 'detail'])
    ->middleware(['auth', 'agecheck']);

Route::get('fv_uebersicht', [AdminController::class, 'detail'])
    ->middleware(['auth', 'agecheck', 'adminauth']);

Route::get('fv_datenbank', function () {
    return view('fv_datenbank');
})->middleware(['auth', 'agecheck']);



Route::get('/register', [RegisterController::class, 'detail'])
    ->middleware(['agecheck']);

Route::post('/addCrew', [RegisterController::class, 'addCrew'])
    ->middleware(['agecheck']);

Route::get('/fv_add-spaceship  ', [SpaceshipController::class, 'detail'])
    ->middleware(['agecheck']);

Route::post('/addSpaceship', [SpaceshipController::class, 'addSpaceship'])
    ->middleware(['agecheck']);

Route::get(
    'fv_edit-crew/{userId}',
    [UserController::class, 'editUser']
)->middleware(['auth', 'agecheck']);

Route::put(
    '/updateCrew/{userId}',
    [UserController::class, 'update']
)->middleware(['auth', 'agecheck']);

Route::get(
    '/fv_delete-crew/{userId}',
    [UserController::class, 'deleteUser']
)->middleware(['auth', 'agecheck']);

Route::get(
    '/fv_delete-crew-y/{userId}',
    [UserController::class, 'delete']
)->middleware(['auth', 'agecheck']);
