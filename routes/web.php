<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('dashboard', function () {
//     return view('dashboard');
// });
 
 Route::get('/','LoginController@login')->name('login.user');
 Route::post('post-login','LoginController@postLogin')->name('login.post');
 Route::get('logout', 'LogoutController@perform')->name('logout.perform');


Route::group(['middleware'=>'user_auth'],function(){
});
  
    Route::get('upload','LoginController@uploadHere');
    Route::post('ocr/{id}','OCRController@extractText')->name('ocr.extractText');
    Route::get('profile','OCRController@profileView')->name('profile.view');
    
    Route::get('/pdf', 'pdfController@generatePdf')->name('pdf.generate');


    
    Route::get('register','RegController@register')->name('register.user');
    Route::post('post-register','RegController@postRegister')->name('register.post');
    Route::get('log-back','RegController@loginBack')->name('login.back');
    
   







