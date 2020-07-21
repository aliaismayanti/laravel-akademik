<?php

Route::get('/', 'PagesController@homepage' );
Route::get('about', 'PagesController@about' );


Route::get('session_manager', function () {
    return view('pages/config.session_manager');
});


Route::get('mahasiswa', 'mahasiswaController@index' );
Route::get('mahasiswa/create', 'mahasiswaController@create' );

Route::post('mahasiswa', 'mahasiswaController@store' );

route::get('mahasiswa/{mahasiswa}', 'mahasiswaController@show');

route::get('mahasiswa/{mahasiswa}/edit', 'mahasiswaController@edit');
route::patch('mahasiswa/{mahasiswa}', 'mahasiswaController@update');

route::delete('mahasiswa/{mahasiswa}', 'mahasiswaController@destroy');

