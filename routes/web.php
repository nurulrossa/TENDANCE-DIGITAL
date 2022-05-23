<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfilControllers;
use App\Http\Controllers\AcademyControllers;

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

Route::get('/', [AcademyControllers::class, 'index']);
Route::post('getHarga/{id}', [AcademyController::class, 'getHarga']);
// Route::get('/', function () {
//     return view('public/index');
// });
Route::get('/karir', function () {
    return view('public/karir');
});
// Route::get('/about', function () {
//     return view('public/about');
// });

Route::get('/about', [ProfilControllers::class, 'index']);

Route::get('/blog', function () {
    return view('public/blog');
});
Route::get('/academy', function () {
    return view('public/academy');
});

Route::get('/service', function () {
    return view('public/service');
});
