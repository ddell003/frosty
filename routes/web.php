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

use App\MenuItem;
use App\MenuSection;

/**
 * These are all the end points for this project. From here we tell the server what views to render to the user
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/reviews', function () {
    return view('reviews');
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

    //make an array and add a key called items, make a model request to get all menu items from the database
    $data['items'] = $items = MenuItem::get();

    $itemPrice = [];
    foreach($items as $item){
        $itemPrice[$item->id] = $item->price;
    }

    $data['itemPrice'] = $itemPrice;
    return view('order', $data);
});

Route::post('/order', function () {

    dd('in post for orders');
    return view('reviews');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
