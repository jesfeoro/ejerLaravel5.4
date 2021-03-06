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

//Route::get('/', function () {
//    //  return "Pantalla Principal desde la ruta";
//    return view('home');
//});
Route::get('/', 'HomeController@getHome');


//Route::get('/auth/login', function () {
//    //return "Login Usuario";
//    return view('auth.login');
//});
//Route::get('/logout', function () {
//    return "Logout Usuario";
//});



//Route::get('/catalog/show/{id}', function ($id) {
//   // return "Vista de pelicula " . $id;
//   
//    return view('catalog.show', array('id'=>$id));
//});
Route::get('/catalog/show/{id}', 'CatalogController@getShow');

//Route::get('/catalog/edit/{id}', function ($id) {
//   // return "Modificar pelicula " . $id;
// 
//    return view('catalog.edit',array('id'=>$id));
//});
Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');

//Route::get('/catalog/create', function () {
//   // return "Añadir  pelicula ";
//    return view('catalog.create');
//});
Route::get('/catalog/create', 'CatalogController@getCreate');
//Route::get('/catalog', function () {
//   // return "Añadir  pelicula ";
//    return view('catalog.index');
//});
Route::get('/catalog', 'CatalogController@getIndex');
//Para autentificar rutas
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
// Especificamos claramente que rutas tienen que estar logueados para poder entrar
Route::group(['middleware' => 'auth'], function() {
    Route::get('catalog',        'CatalogController@getIndex');
    Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');
    Route::get('/catalog/create', 'CatalogController@getCreate');
    Route::get('/catalog/show/{id}', 'CatalogController@getShow');
    Route::post('/catalog/create','CatalogController@postCreate');
    Route::put('/catalog/edit/{id}', 'CatalogController@putEdit');
    // ...
});

Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');



