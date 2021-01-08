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

    // dd($comics);

    $data = [
        'comics' => $comics,
    ];

    return view('home', $data);
}) -> name('home');

Route::get('/comics-details/{id}', function ($id) {
    // get all comics
    $comics = config('comics');

    // check-id: NOT-OK if id is not a key of comics-array -> 404
    if (!array_key_exists($id, $comics)) {
        abort(404);
    }

    // check-id: OK
    $data = [
        'current_comics' => $comics[$id],
    ];

    return view('comics', $data);
}) -> name('comics');
