<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
    return view('index');
});
Route::get('/skills', function () {
    return view('skills');
});
Route::get('/skills', function () {
    return view('Contacts');
});

Route::get('client/add', function(){
	DB::table('clients')->insert([
		'name' => 'Mirzakhid',
		'surname' => 'Osmankulov',
		'age' => 18
	]);
});

Route::get('client', [ClientController::class, 'index']);
Route::get('client/create', function() {
	return view('client.create');
});

Route::post('client/create',[ClientController::class,'store'])->name('add-client');