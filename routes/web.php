<?php

use App\Http\Controllers\RegionController;
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

// Route::get('get-country/{region_id}', [RegionController::class, 'getCountries']);

// Route::get('get-city', [RegionController::class, 'getCities']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-region', [RegionController::class, 'create'])->name('region.create');
Route::post('/region-store', [RegionController::class, 'store'])->name('region.store');
Route::get('/getCountry/{id}', [RegionController::class, 'getCountries']);
Route::get('/getCity/{id}', [RegionController::class, 'getCities']);

//Route::get('get-city', [RegionController::class, 'getCities']);






//Route::get('/country/{$id}', [RegionController::class, 'getCities']);
