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
//    return view('welcome');
//});

//Route::get('/about', function () {
//    return '<center><h1>Hallo!</h1>'
//    .'Selamat datang di web app saya<br>'
//    .'Laravel emang keren!</center>';
//});
//Route::get('/about1', function () {

//Route::get('/about4', function () {
//    return '<center><h1>Hallo! about 4</h1>'
//    .'Selamat datang di web app saya<br>'
//    .'Hublaaa </center>';
//});

//Route::get('/kantin/{a}/{b}/{c}', function ($a, $b, $c) {
//   return 'Saya memakan ' .$a. '<br>' 
//   .'Meminun ' .$b. '<br>'
//   .'Tambah cemilan ' .$c ;

Route::get('/user/{nama?}/{kepanjangan?}', function ($nama = 'Rizky', $kepanjangan = 'Musthafa') {
return 'Nama saya : ' .$nama. ' Kepanjangannya : ' .$kepanjangan. ;
});
?>

