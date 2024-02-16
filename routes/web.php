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

Route::get('/', function () {
    return view('welcome');
});


Route::get('about', function () {
    return "<h1> About Page </h1>";
})->name('about');

Route::get('contact',function(){
    return "<h1>Contact Page</h1>";
});

// #Route Parameters
Route::get('contact/{id}',function($id){
    return $id;
})->name('edit-contact');



// #Route Naming
// Route::get('home',function(){
//     return "<a href='".route('about')."'>About</a>";
// });

Route::get('home',function(){
    return "<a href='".route('edit-contact',12)."'>About</a>";
});

//  #Route Grouping
// รูปแบบการเชียน
// Route::group([],function(){

// });
Route::group(['prefix'=>'customer'],function(){
    Route::get('/',function(){
        return "<h1>Customer List</h1>"; });

    Route::get('/create',function(){
        return "<h1>Customer Create</h1>"; });

    Route::get('/show',function(){
    return "<h1>Customer Show</h1>"; });

});

