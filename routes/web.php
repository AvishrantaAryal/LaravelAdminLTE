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


//ABout
Route::get('/about','AboutController@about');
Route::get('/aboutshow','AboutController@aboutshow');
Route::get('/aboutdetail/{id}','AboutController@aboutdetail');
Route::post('/aboutstore','AboutController@aboutstore');
Route::post('/aboutupdate/{id}','AboutController@aboutupdate');


//CAROUSEL
Route::get('/carousel','CarouselController@carousel');
Route::get('/addcarousel','CarouselController@addcarousel');
Route::post('/storecarousel','CarouselController@store');
Route::post('/statuscar/{id}','CarouselController@statusupdate');
Route::get('/deletecar/{id}','CarouselController@delete');






//SERVICES
Route::get('/allservices','ServiceController@viewservice');
Route::get('/addservice','ServiceController@addservice');
Route::post('/storeservices','ServiceController@store');
Route::get('/editservices/{id}','ServiceController@edit');
Route::post('/update/{id}','ServiceController@update');
Route::get('/delete/{id}','ServiceController@delete');
Route::post('/statusup/{id}','ServiceController@sup');



//packages
Route::get('/allpackages','PackageController@viewpackage');
Route::get('/addpackages','PackageController@addpackage');
Route::post('/storepackages','PackageController@store');
Route::post('/updatepackage/{id}','PackageController@update');
Route::post('/status/{id}','PackageController@sup');
Route::get('/deletepackages/{id}','PackageController@delete');





//Review
Route::get('/addreview','ReviewController@addreview');
Route::get('/review','ReviewController@viewreview');
Route::post('/storereview','ReviewController@store');
Route::post('/updatereview/{id}','ReviewController@update');
Route::get('/deletereview/{id}','ReviewController@delete');
Route::post('/statusupdate/{id}','ReviewController@status');



//Gallery

Route::get('/addgallery','GalleryController@create');
Route::get('/gallery','GalleryController@viewalbum');
Route::get('/igallery/{id}','GalleryController@image');
Route::get('/addimage/{id}','GalleryController@addimage');
Route::post('/gallerystore','GalleryController@gstore');
Route::get('/deletegallery/{id}','GalleryController@gremove');
Route::post('/imagestore/{id}','GalleryController@istore');
Route::get('/deleteimage/{id}','GalleryController@iremove');
Route::Post('/gsupdate/{id}','GalleryController@gsupdate');
Route::Post('/isupdate/{id}','GalleryController@isupdate');





Route::get('/bookings','AdminController@booking');




Route::get('/contact','AdminController@contact');

Route::get('/aseo','AdminController@aseo');

Route::post('/store','AboutController@store')->name('store');








Route::post('/storecarousel','CarouselController@store');


