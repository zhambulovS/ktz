<?php
use Illuminate\Support\Facades\Route;
use App\Models\Account;
use App\Http\Controllers\ContactController;
Route::group(['prefix'=>'{locale}'], function (){

    Route::get('/', 'App\Http\Controllers\MainController@index')->name('main')->middleware('setLocale');
    Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about')->middleware('setLocale');
    Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact')->middleware('setLocale');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.post')->middleware('setLocale');
    Route::get('/contact/index', [ContactController::class, 'table'])->name('index')->middleware('setLocale');
    Route::get('/contact/index/search', [ContactController::class, 'search'])->name('search')->middleware('setLocale');
    Route::get('/login', 'App\Http\Controllers\AuthController@login')->name('login')->middleware('setLocale');
    Route::post('/login', 'App\Http\Controllers\AuthController@loginPost')->name('login.post')->middleware('setLocale');
    Route::get('/register', 'App\Http\Controllers\AuthController@register')->name('register')->middleware('setLocale');
    Route::post('/register',  function (){
        Account::create([
            'fname'=>request('fname'),
            'email'=>request('email'),
            'number'=>request('number'),
            'password'=>request('password')
        ]);
    })->name('register.post')->middleware('setLocale');

});
