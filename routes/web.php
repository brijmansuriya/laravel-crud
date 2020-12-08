<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/store','insert@store');
Route::get('/show','insert@show');

// Route::post('/update','insert@update');
// Route::get('/update1', function () {
//     return view('update');
// });
Route::get('delete/{id}','insert@delete');
// Route::get('delete/{id}','CrudController@destroy');

// Route::get('update/{id}', function () {
//     return view('update');
// });
Route::get('update/{id}','insert@update'); 
Route::post('update/{id}','insert@update1')->name('update'); 


