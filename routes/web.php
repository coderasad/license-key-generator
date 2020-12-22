<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();

// Admin Route 
Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin', 'middleware'=>['auth','admin']], function () {											
    Route::get('/dashboard','DashboardController@index')->name('dashboard');					
    Route::get('/create-license','DashboardController@createLicense')->name('createLicense');		
    Route::post('/create-license','DashboardController@storeLicense')->name('createLicense');	
    Route::post('/license-key','DashboardController@licenseKey')->name('licenseKey');								
});											
     
// Author Route 
Route::group(['as'=>'author.','namespace'=>'Author', 'middleware'=>['auth','author']], function () {									
    Route::get('/','DashboardController@index');
    Route::get('/active-key','DashboardController@activeKey')->name('activeKey');
    Route::post('/active-key','DashboardController@activeKeyStore')->name('activeKey');											
});											
