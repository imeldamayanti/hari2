<?php

use App\Http\Controllers\InputAspirasiController;
use App\Models\InputAspirasi;
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
    return view('index', [
        "tittle" => "Halaman Aspirasi"
    ]);
});

Route::get('/login', function () {
    return view('admin.login', [
        "tittle" => "Halaman Login"
    ]);
});

Route::post('/', [InputAspirasiController::class, 'store']);

Route::get('/dashboard', function () {
    //  
    return view('admin.dashboard', [
        "tittle" => "Dashboard Admin",
        "aspirasis" => InputAspirasi::all()
    ]);
});
