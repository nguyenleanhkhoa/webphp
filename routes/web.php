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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[
    'as'=>'index',
    'uses'=>'PageController@getIndex'
]);
Route::get('khoahoc',function(){
    return "Xin chào";
});
Route::get('index',[
    'as'=>'index',
    'uses'=>'PageController@getIndex'
]);
Route::get('Product/{id}',[
    'as'=>'Product',
    'uses'=>'PageController@getProduct'
]);
Route::get('About',[
    'as'=>'About',
    'uses'=>'PageController@getAbout'
]);
Route::get('Checkout',[
    'as'=>'Checkout',
    'uses'=>'PageController@getCheckout'
]);
Route::get('Contact',[
    'as'=>'Contact',
    'uses'=>'PageController@getContact'
]);
Route::get('Fags',[
    'as'=>'Fags',
    'uses'=>'PageController@getFags'
]);
Route::get('Helps',[
    'as'=>'Helps',
    'uses'=>'PageController@getHelps'
]);
Route::get('Payment',[
    'as'=>'Payment',
    'uses'=>'PageController@getPayment'
]);
Route::get('Privacy',[
    'as'=>'Privacy',
    'uses'=>'PageController@getPrivacy'
]);
Route::get('Product2',[
    'as'=>'Product2',
    'uses'=>'PageController@getProduct2'
]);
Route::get('Product',[
    'as'=>'Product2',
    'uses'=>'PageController@getProduct'
]);
Route::get('Single/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getSingle']);

Route::get('Single',[
    'as'=>'Single',
    'uses'=>'PageController@getSingle']);

Route::get('Single2',[
    'as'=>'Single2',
    'uses'=>'PageController@getSingle2'
]);
Route::get('Terms',[
    'as'=>'terms',
    'uses'=>'PageController@getTerms'
]);
Route::get("Typography",[
    'as'=>'Typography',
    'uses'=>'PageController@getTypography'
]);
Route::get('dang-ky',[
    'as'=>'dangky',
    'uses'=>'PageController@getSignin'
]);
Route::post('dang-ky',[
    'as'=>'dangky',
    'uses'=>'PageController@postSignin'
]);