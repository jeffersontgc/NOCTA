<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContacController;
use App\Mail\ContactMailable;
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

Route::controller(TeamController::class)->group(function () {
    Route::get('/', 'loginview')->name('login');
    Route::get('/home', 'WelcomeView')->name('welcome');
    Route::get('teams', 'index')->name('teams.index');
    Route::post('teams/create', 'createClub')->name('createClub');
    Route::get('teams/details/{id}', 'details')->name('teamsDetailsT');
    Route::post('teams/update/{id}', 'updateTeam')->name('updateTeam');
    Route::get('teams/delete/{id}', 'deleteTeam')->name('deleteTeam');
    Route::get('example/categoria', 'viewExample')->name('viewnext');
    Route::get('example/categoria/{id}', 'viewCategory')->name('detailcategorie');

});

Route::controller(ContacController::class)->group(function () {
    Route::get('contactanos', 'index')->name('contactanos.index');
    Route::post('contactanos', 'store')->name('contactanos.store');

});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('homex', [ToastrController::class, 'indexx'])->name('homex');

Auth::routes();
