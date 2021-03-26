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


// Second Route method – Root URL with ID will match this method
Route::get('/ID/{id}',function($id){
    echo 'ID: '.$id;
    });

    // Third Route method – Root URL with or without name will match this method
    Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
        echo "Name: ".$name;
        });
    
        Route::get('/form', [MailingList::class,'form'])->name('mail.form');
        Route::post('/mail', [MailingList::class,'submit'])->name('email.submit');
