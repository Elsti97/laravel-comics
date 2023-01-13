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

    $comics = config('comics');

    return view('home', compact('comics'));
});

Route::get('/comics', function () {



return view('comics', compact('comic'));
});

Route::get('/comic/{id}', function ($id) {

    $comics = config('comics');

    if( is_numeric($id) && $id >= 0 && $id < count($comics) ){
        $single_comic = $comics[$id];
    } else {
        abort(404);
    }

    return view('comic', compact('single_comic'));
})->name('comic');