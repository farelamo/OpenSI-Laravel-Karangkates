<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Auth\AuthController@indexLogin')->name('login');
Route::post('/', 'Auth\AuthController@login')->name('login');
Route::get('/register', 'Auth\AuthController@indexRegister');
Route::post('/register', 'Auth\AuthController@register');

// Route::fallback(function(){ 
//     return response()->view('errors.404', [], 404); 
// });

Route::middleware('auth')->group(function(){
    Route::post('/logout', 'Auth\AuthController@logout');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/profile', 'ProfileController@index');
    Route::patch('/profile/{id}', 'ProfileController@update');
    Route::put('/photo-profile/{id}', 'ProfileController@changePhoto');

    /* PRINT ROUTE */
    Route::prefix('print')->group(function(){
        Route::get('kematian/{id}', 'Print\PrintKematianController@print');
        Route::get('usaha/{id}', 'Print\PrintUsahaController@print');
    });
    
    /* USER ROUTE */
    Route::middleware('user')->group(function(){
        // Surat Usaha User
        Route::get('/surat-usaha', 'User\UsahaController@index');
        Route::post('/surat-usaha', 'User\UsahaController@store');
        Route::put('/surat-usaha/{id}', 'User\UsahaController@update');
        Route::delete('/surat-usaha/{id}', 'User\UsahaController@destroy');
        
        // Surat Kematian User
        Route::get('/surat-kematian', 'User\KematianController@index');
        Route::post('/surat-kematian', 'User\KematianController@store');
        Route::put('/surat-kematian/{id}', 'User\KematianController@update');
        Route::delete('/surat-kematian/{id}', 'User\KematianController@destroy');

        // Surat Global User
        Route::get('/surat-lainnya', 'User\SuratGlobalController@index');
        Route::post('/surat-lainnya', 'User\SuratGlobalController@store');
        Route::put('/surat-lainnya/{id}', 'User\SuratGlobalController@update');
        Route::delete('/surat-lainnya/{id}', 'User\SuratGlobalController@destroy');
    });

    /* ADMIN ROUTE */
    Route::middleware('admin')->prefix('admin')->group(function(){

        // Surat Usaha User
        Route::get('/surat-usaha', 'Admin\UsahaController@index');
        Route::put('/surat-usaha/{id}', 'Admin\UsahaController@update');

        // Surat Kematian User
        Route::get('/surat-kematian', 'Admin\KematianController@index');
        Route::put('/surat-kematian/{id}', 'Admin\KematianController@update');

        // Surat Global User
        Route::get('/surat-lainnya', 'Admin\SuratGlobalController@index');
        Route::put('/surat-lainnya/{id}', 'Admin\SuratGlobalController@update');
    });
});
