<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\FrontendController;

  
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
Route::get('/submit-player', [FrontendController::class, 'playerForm'])->name('players.form');
Route::post('/player-submit', [FrontendController::class, 'playerSubmit'])->name('players.submit');

Auth::routes();
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/players/create', [PlayersController::class, 'create'])->name('players.create');
    Route::post('/admin/players/store', [PlayersController::class, 'store'])->name('players.store');
    Route::get('/admin/players', [PlayersController::class, 'index'])->name('players.index');
    Route::get('admin/players/getPlayers', [PlayersController::class, 'getPlayers'])->name('admin.players.getPlayers');
    Route::get('/players/export-csv', [PlayersController::class, 'exportCsv'])->name('players.exportCsv');
});