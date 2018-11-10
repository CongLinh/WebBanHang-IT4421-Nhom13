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
//     return view('index');
// })->name('home');
Route::get('/','ProductController@homePage')->name('home');

Route::post('checklogin', 'UserController@checklogin');

Route::post('/register', 'UserController@register');

Route::get('logout', ['as'=>'logout', function(){
    session()->flush();
    return redirect()->Route('home');
}]);

Route::post('/update', 'UserController@update');

Route::get('/about', function () {
    return view('about');
});

Route::get('/short_codes_2345', function () {
    return view('short-codes');
});

Route::get('/mail', function () {
    return view('mail');
});

Route::get('/dresses', function () {
    return view('dresses');
});

Route::get('/sweaters', function () {
    return view('sweaters');
});

Route::get('/shorts_and_skirts', function () {
    return view('skirts');
});

Route::get('/salwars', function () {
    return view('single');
});

Route::get('/sandals', function () {
    return view('sandals');
});

Route::get('/boots', function () {
    return view('sarees');
});

Route::get('/hrrls', function () {
    return view('sandals');
});

Route::get('/flats', function () {
    return view('sandals');
});


Route::get('/ad-index', function () {
    return view('ad-index');
});

Route::get('/productlist/{kind}', 'ProductController@showproductlist');

Route::get('/detailproduct/{id}', 'ProductController@showproductdetail');

Route::get('/ad-index', function(){
    return view('ad-index');
});

Route::get('/products/{category_para}', 'ProductController@index');
Route::get('/products/{category_para}/{id}', 'ProductController@show');
Route::get('/search', 'ProductController@search');
Route::post('/addCart', 'CartController@addCart');
Route::get("/displayCart", "CartController@displayCart");
Route::post("/updateCart", "CartController@updatCart");
Route::post("/deleteProductCart", "CartController@deleteProductCart");

