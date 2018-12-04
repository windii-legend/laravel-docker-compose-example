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

use App\Jobs\TestJob;

Route::get('/', function () {
    //return view('welcome');
    $test = (new TestJob)->delay(10);
    dispatch($test);
    return 'テストJobをQueueに追加しました！';
});
