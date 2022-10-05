<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ilkkontrolcum;
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

Route::view('/', 'giris');

Route::view('/ogrenci_hesapolustur','hesapolustur');
Route::view('/ogrenci_giris','giris');
Route::view('/ogrenci_sifresifirla','sifresifirla');

Route::view('/ogrenci_anamenu','anamenu');
Route::view('/ogrenci_cap','cap');
Route::view('/ogrenci_yazokulu','yazokulu');
Route::view('/ogrenci_yatay','yatay');
Route::view('/ogrenci_intibak','intibak');
Route::view('/ogrenci_dgs','dgs');

Route::view('/ogrenci_onaylanan','onaylanan');
Route::view('/ogrenci_onaylanmayan','onaylanmayan');
Route::view('/ogrenci_bekleyen','bekleyen');

Route::view('/akademisyen_ana_menu','akademisyenanamenu');
Route::view('/akademisyen_sifre_unuttum','akademisyensifreunuttum');
Route::view('/akademisyen_giris','akademisyengiris');

Route::view('/yatay_pdf','yatayPDF');
