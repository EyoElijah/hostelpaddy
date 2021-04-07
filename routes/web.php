<?php
use App\Http\Controllers\MailingList;
use App\Http\Controllers\StudentsController;

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

require __DIR__.'/studentauth.php';

// search route
Route::get('/search',[App\Http\Controllers\SearchController::class, 'search']);

//This route is used to collect emails
Route::get('/mail', [MailingList::class, 'form']);
Route::post('/mail', [MailingList::class, 'submit']);

// Students Route
// Route::post('/students', [StudentsController::class, 'index']);
// Route::get('/student', function () {
//     return view('students.index');
// })->middleware(['auth'])->name('students.index');

// Route::resource('students', [StudentsController::class]);

Route::get('/student', [StudentsController::class, 'index'])
    // ->middleware('auth:student')
    ->name('student.index');