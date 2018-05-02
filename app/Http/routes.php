<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('Home', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('products', function () {
    return view('products');
});
Route::get('about', function () {
    return view('about');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('services', function () {
    return view('services');
});

Route::match(array('GET', 'POST'), '/addorder', array(
            'as'    =>  'addorder',
            'uses'  =>  'HomeController@GetItemDetails'
));
//Route::post('form', array('as' => 'form', 'uses'=>'HomeController@GetItemDetails'));
Route::get('insert','HomeController@insertform');
Route::post('create','HomeController@insert');

//**********Add Quotation**************//
Route::get('insertquot','HomeController@insertQuotform');
Route::post('createquot','HomeController@Quotinsert');

Route::get('AddQuotation', function () {
    return view('AddQuotation');
});

Route::match(array('GET', 'POST'), '/savemessage', array(
            'as'    =>  'savemessage',
            'uses'  =>  'HomeController@SaveMessage'
));
