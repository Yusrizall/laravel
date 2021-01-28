<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/data', 'siswacontroller@create');
Route::post('/data', 'siswacontroller@store');
Route::get('/viewdata', 'siswacontroller@index')-> name('viewData');
Route::get('/data/{id}/edit', 'siswacontroller@edit') -> name('editData');
Route::post('/data/{id}/update', 'siswacontroller@update') -> name('updateData'); 
Route::get('/data/{id}/delete', 'siswacontroller@destroy') -> name('deleteData');

//closure
// Route::get('/profil', function() {
// 	return "profil siswa";
// })->name('profil');

// //route name
// Route::get("/testname", function() {
// 	return route('profil');
// });

// //parameter
// Route::get('/profil/{id}', function($id) {
// 	return $id;
// });

// //controller
// Route::get('/tescontroller', 'TesController@show');

// //resource
// Route::resource('siswa', 'siswacontroller');

