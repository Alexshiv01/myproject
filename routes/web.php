<?php

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

/*Route::get('/', function () {
     return view('welcome');
});
// */
// Route::get('/about',function(){
//     return view('pages.about');
// });
// Route::get('/index',function(){
//     return view('pages.index');
// });
route::get('/','pagescontroller@index');
route::get('/about','pagescontroller@about');
route::get('/services','pagescontroller@services');

route::resource('posts','Postscontroller');

// Auth::routes();

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
