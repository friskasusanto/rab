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

Route::get('/', function () {
    return view('backend.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register_home', 'HomeController@register_login')->name('home_register');
Route::get('/', 'HomeController@login_login')->name('home_register');

//admin
	//PENGADAAN ALAT KANTOR DAN RUMAHTANGGA
	Route::get('/alatkantor_rumahtangga_list', 'backend\AdminController@list_alatkantor')->name('alatkantor_rumahtangga_list');
	Route::get('/alatkantor_rumahtangga', 'backend\AdminController@index')->name('alatkantor_rumahtangga');
	Route::post('/alatkantor_rumahtangga', 'backend\AdminController@add_alatkantor')->name('alatkantor_rumahtangga');
	Route::get('/alatkantor_rumahtangga_delete/{id}', 'backend\AdminController@delete_alatkantor')->name('alatkantor_rumahtangga_delete');
	Route::get('/edit_alatkantor/{id}', 'backend\AdminController@edit_alatkantor')->name('alatkantor_rumahtangga_edit');
	Route::post('/edit_alatkantor_store/{id}', 'backend\AdminController@edit_alatkantor_store')->name('alatkantor_rumahtangga_store');
	Route::get('/detail_alatkantor/{id}', 'backend\AdminController@detail_alatkantor')->name('alatkantor_rumahtangga_detail');

	//PENGADAAN ALAT ANGKUT DARAT BERMOTOR
	Route::get('/alatangkut_daratbermotor_list', 'backend\AdminController@list_alatbermotor')->name('alatangkut_daratbermotor_list');
	Route::get('/alatangkut_daratbermotor', 'backend\AdminController@index_alatbermotor')->name('alatangkut_daratbermotor');
	Route::post('/alatangkut_daratbermotor', 'backend\AdminController@add_alatbermotor')->name('alatangkut_daratbermotor');
	Route::get('/alatangkut_daratbermotor_delete/{id}', 'backend\AdminController@delete_alatbermotor')->name('alatangkut_daratbermotor_delete');
	Route::get('/edit_alatangkut_daratbermotor/{id}', 'backend\AdminController@edit_alatbermotor')->name('alatangkut_daratbermotor_edit');
	Route::post('/edit_alatangkut_daratbermotor_store/{id}', 'backend\AdminController@edit_alatbermotor_store')->name('alatangkut_daratbermotor_store');
	Route::get('/detail_alatangkut_daratbermotor/{id}', 'backend\AdminController@detail_alatbermotor')->name('alatangkut_daratbermotor_detail');

	//PENGADAAN ALAT ANGKUT DARAT TAK BERMOTOR
	Route::get('/alattakbermotor_list', 'backend\AdminController@list_alattakbermotor')->name('alattakbermotor_list');
	Route::get('/alattakbermotor', 'backend\AdminController@index_alattakbermotor')->name('alattakbermotor');
	Route::post('/alattakbermotor', 'backend\AdminController@add_alattakbermotor')->name('alattakbermotor');
	Route::get('/alattakbermotor_delete/{id}', 'backend\AdminController@delete_alattakbermotor')->name('alattakbermotor_delete');
	Route::get('/edit_alattakbermotor/{id}', 'backend\AdminController@edit_alattakbermotor')->name('alattakbermotor_edit');
	Route::post('/edit_alattakbermotor_store/{id}', 'backend\AdminController@edit_alattakbermotor_store')->name('alattakbermotor_store');
	Route::get('/detail_alattakbermotor/{id}', 'backend\AdminController@detail_alattakbermotor')->name('alattakbermotor_detail');

	//PENGADAAN ALAT KALIBRASI
	Route::get('/alatkalibrasi_list', 'backend\AdminController@list_alatkalibrasi')->name('alatkalibrasi_list');
	Route::get('/alatkalibrasi', 'backend\AdminController@index_alatkalibrasi')->name('alatkalibrasi');
	Route::post('/alatkalibrasi', 'backend\AdminController@add_alatkalibrasi')->name('alatkalibrasi');
	Route::get('/alatkalibrasi_delete/{id}', 'backend\AdminController@delete_alatkalibrasi')->name('alatkalibrasi_delete');
	Route::get('/edit_alatkalibrasi/{id}', 'backend\AdminController@edit_alatkalibrasi')->name('alatkalibrasi_edit');
	Route::post('/edit_alatkalibrasi_store/{id}', 'backend\AdminController@edit_alatkalibrasi_store')->name('alatkalibrasi_store');
	Route::get('/detail_alatkalibrasi/{id}', 'backend\AdminController@detail_alatkalibrasi')->name('alatkalibrasi_detail');

	//PENGADAAN MEJA DAN KURSI KERJA/RAPAT PEJABAT
	Route::get('/mejakursi_pejabat_list', 'backend\AdminController@list_mejakursi_pejabat')->name('mejakursi_pejabat_list');
	Route::get('/mejakursi_pejabat', 'backend\AdminController@index_mejakursi_pejabat')->name('mejakursi_pejabat');
	Route::post('/mejakursi_pejabat', 'backend\AdminController@add_mejakursi_pejabat')->name('mejakursi_pejabat');
	Route::get('/mejakursi_pejabat_delete/{id}', 'backend\AdminController@delete_mejakursi_pejabat')->name('mejakursi_pejabat_delete');
	Route::get('/edit_mejakursi_pejabat/{id}', 'backend\AdminController@edit_mejakursi_pejabat')->name('mejakursi_pejabat_edit');
	Route::post('/mejakursi_pejabat_store/{id}', 'backend\AdminController@edit_mejakursi_pejabat_store')->name('mejakursi_pejabat_store');
	Route::get('/detail_mejakursi_pejabat/{id}', 'backend\AdminController@detail_mejakursi_pejabat')->name('mejakursi_pejabat_detail');

	//BELANJA MODAL PENGADAAN GEDUNG & BANGUNAN BLUD
	Route::get('/bangunan_blud_list', 'backend\AdminController@list_bangunan_blud')->name('bangunan_blud_list');
	Route::get('/bangunan_blud', 'backend\AdminController@index_bangunan_blud')->name('bangunan_blud');
	Route::post('/bangunan_blud', 'backend\AdminController@add_bangunan_blud')->name('bangunan_blud');
	Route::get('/bangunan_blud_delete/{id}', 'backend\AdminController@delete_bangunan_blud')->name('bangunan_blud_delete');
	Route::get('/edit_bangunan_blud/{id}', 'backend\AdminController@edit_bangunan_blud')->name('bangunan_blud_edit');
	Route::post('/edit_bangunan_blud_store/{id}', 'backend\AdminController@edit_bangunan_blud_store')->name('bangunan_blud_store');
	Route::get('/detail_bangunan_blud/{id}', 'backend\AdminController@detail_bangunan_blud')->name('bangunan_blud_detail');
