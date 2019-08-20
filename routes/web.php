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

Route::get('/', function () {
    return view('cd-admin.home.home');
});

Route::get('/view-all-admin','AdminController@adminshow');


Route::get('/about','AdminController@about');


//CAROUSEL
Route::get('/carousel','CarouselController@carousel');
Route::get('/viewcarousel','CarouselController@viewcarousel');
Route::get('/addcarousel','CarouselController@addcarousel');
Route::post('/storecarousel','CarouselController@store');






//SERVICES
Route::get('/allservices','ServiceController@viewservice');

Route::get('/addservice','ServiceController@addservice');
Route::post('/storeservices','ServiceController@store');
Route::get('/editservices/{id}','ServiceController@edit');
Route::post('/update/{id}','ServiceController@update');
Route::get('/delete/{id}','ServiceController@delete');

//packages

Route::get('/allpackages','PackageController@viewpackage');
Route::get('/addpackages','PackageController@addpackage');
Route::post('/storepackages','PackageController@store');
Route::post('/updatepackage/{id}','PackageController@update');
Route::get('/delete/{id}','PackageController@delete');


Route::get('/bookings','AdminController@booking');

Route::get('/addgallery','AdminController@addalbum');

Route::get('/gallery','AdminController@viewalbum');
	
Route::get('/igallery','AdminController@viewimage');
	
Route::get('/addimage','AdminController@addimage');

Route::get('/addreview','AdminController@addreview');

Route::get('/review','AdminController@viewreview');

Route::get('/contact','AdminController@contact');

Route::get('/aseo','AdminController@aseo');

Route::post('/store','AboutController@store')->name('store');

Route::get('/about','AboutController@view');






Route::post('/storecarousel','CarouselController@store');


