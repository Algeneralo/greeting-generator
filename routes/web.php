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

Route::get("/certificate/{color}", "CertificateController@index")->where("color", 'blue|pink');
Route::post("/certificate/download/{color}", "CertificateController@download")->where("color", 'blue|pink');