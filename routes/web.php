<?php
use App\Http\Controllers\MailingList;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// search route
Route::get('/search',[App\Http\Controllers\SearchController::class, 'search']);

//This route is used to collect emails
Route::get('/mail', [MailingList::class, 'form']);
Route::post('/mail', [MailingList::class, 'submit']);
