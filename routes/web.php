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

Route::get('/', function () {
    return view('welcome');
});
route::get('/about', function() {
   return view('siken');
})->name('ajay');


/*0route::get('/about', function() {
    return view('siken');
 });*/
//Route::get('/search/{name}/{age}',function($name,$age)
//{
   // echo $name;
   // echo"<br>";
    //echo $age;
//})->name('ajay');

Route::get('/the',function() {
  return view('karanti');
})->name('bijay');    

 
