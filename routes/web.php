<?php

use Illuminate\Support\Facades\Route;

use App\Jobs\ProcessPodcast;

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


// добавление задания в очередь
Route::get('add', function () {
    ProcessPodcast::dispatch('Это супер-очередь');
    dd(['добавить задание 11']);
    // return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
