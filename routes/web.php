<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\PageController::class, 'home']);
Route::get('/about', [\App\Http\Controllers\PageController::class, 'about']);
Route::get('/postavka', [\App\Http\Controllers\PageController::class, 'postavka']);
Route::get('/servisnoe-obsluzhivanie', [\App\Http\Controllers\PageController::class, 'services']);
Route::get('/transportnye-uslugi', [\App\Http\Controllers\PageController::class, 'transport']);
Route::get('/documents', [\App\Http\Controllers\PageController::class, 'documents']);
Route::get('/reviews', [\App\Http\Controllers\PageController::class, 'reviews']);
Route::get('/contacts', [\App\Http\Controllers\PageController::class, 'contacts']);

Route::post('/add-feedback', [\App\Http\Controllers\ApplicationsController::class, 'store'])->name('add-feedback');
Route::post('/add-review', [\App\Http\Controllers\ApplicationsController::class, 'review'])->name('add-review');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'moonshine']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


