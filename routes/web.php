<?php

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

Route::get('/testmodel', function() {
	$query = App\Post::all();
	return $query;
});
Route::get('/testmodel', function() {
	$query = App\Post::find(1);
	return $query;
});
Route::get('/testmodel', function() {
	$query = App\Post::where('title','like','%cepat nikah%')->get();
	return $query;
});
Route::get('/testmodel', function() {
	$post = App\Post::find(1);
	$post->title = "Ciri keluarga Sakinah";
	$post->save();
	return $post;
});

Route::get('/testsiswa', function() {
	$query = App\Siswa::all();
	return $query;
});