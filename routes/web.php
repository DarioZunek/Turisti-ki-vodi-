<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromjeniOvlasti;
use App\Http\Controllers\PromjeniTemu;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CommentController;

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


Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function()
 {
   if ( Auth::user() && Auth::user()->type>=2 )
    return view('admin');
   else
    return redirect('/'); 
 })->name('admin');


Route::controller(PromjeniOvlasti::class)->group(function () {
    Route::get('/ovlasti/{id}', 'direktno')->name('promjeniovlasti');
});

Route::controller(PromjeniTemu::class)->group(function () {
    Route::get('/tema/{id}', 'direktno')->name('promjenitemu');
});

Route::view('/', 'homepage')->name('homepage');

Route::view('/london', 'london')->name('london');

Route::view('/pariz', 'pariz')->name('pariz');

Route::view('/tecaj', 'tecaj')->name('tecaj');

Route::view('/newyork', 'newYork')->name('newyork');

Route::view('/dubai', 'dubai')->name('dubai');

Route::get('send-email', [App\Http\Controllers\EmailController::class, 'sendEmail']);

Route::resource('cities', CityController::class);
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
Route::controller(CommentController::class)->group(function () {
    Route::get('/comments/delete/{id}', 'delete')->name('comments.delete');
});

require __DIR__.'/auth.php';
