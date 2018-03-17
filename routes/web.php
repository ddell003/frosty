<?php

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

use App\MenuSection;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/menu', function () {

    //make an array
    $data = [];

    //make a key called sections, make a model request to get all sections from the database
    $data['sections'] = MenuSection::get();

    //we made a view called menu.blade.php in resources/views we pass the variable data to be used in the view
    return view('menu', $data);
});

Route::get('/order', function () {

    $data['sections'] = $sections = MenuSection::get();
    //dd($sections);
    return view('order', $data);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
