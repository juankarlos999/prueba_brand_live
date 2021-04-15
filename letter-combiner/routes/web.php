<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\CombinerController;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;

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

Route::post('/listado', [CalculatorController::class, 'calculatorCombiner'], function () {
    $page = Input::get('page');
    $posts = range(1, 50);
    $posts = new LengthAwarePaginator($posts, $total = 50, 10, $page);
    $posts->setPath('blog');
    return view('pagination')->withPosts($posts);
})->name('string.calculatorCombiner');
Route::get('list-test', [CombinerController::class, 'generarCodigos']);