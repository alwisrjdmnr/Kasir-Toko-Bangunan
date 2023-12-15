<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;
use GuzzleHttp\Middleware;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;

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
	return view('welcomes', [
		"title" => "Home"
	]);
});

// Route::group(['middleware' => ['auth','level:user']], function(){
// });

// Auth::routes();
//user


//login & logout
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::group(['middleware' => ['auth', 'level:admin']], function () {
	//admin
	Route::get('/admin', [StockController::class, 'index']);
	Route::get('/admin', [StockController::class, 'getStocks']);
	//tambah
	Route::post('/save', [StockController::class, 'save']);

	//edit
	Route::patch('/update/{id}', ['as' => 'stock.update', 'uses' => [StockController::class, 'update']]);

	//hapus
	Route::get('/delete/stock/{id}', [StockController::class, 'delete']);
});


Auth::routes();

Route::group(['middleware' => ['level:user']], function () {
	// user
	Route::get('/user', [HomeController::class, 'index']);

	Route::get('pesan/{id}', [PesanController::class, 'index']);

	Route::post('pesan/{id}', [PesanController::class, 'pesan']);

	Route::get('check-out', [PesanController::class, 'check_out']);

	Route::delete('check-out/{id}', [PesanController::class, 'delete']);

	Route::get('konfirmasi-check-out', [PesanController::class, 'konfirmasi']);

	Route::get('/profile', [ProfileController::class, 'index']);

	Route::post('profile', [ProfileController::class, 'update']);

	Route::get('history', [HistoryController::class, 'index']);

	Route::get('history/{id}', [HistoryController::class, 'detail']);

	Route::get('cetak_nota/{id}', [HistoryController::class, 'cetak_nota']);

});