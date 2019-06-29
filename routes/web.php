<?php
use Illuminate\Support\Facades\Route;
use Carbon\Traits\Rounding;

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/service', function(){
    return view('layouts.service');
});

// entertaiment
Route::get('/rajabadut', 'EntertaimentController@b1')->name('rajabadut');
Route::get('/badut', 'EntertaimentController@b2')->name('');
Route::get('/badut', 'EntertaimentController@b3')->name('');
Route::get('/badut', 'EntertaimentController@b4')->name('');
Route::get('/badut', 'EntertaimentController@b5')->name('');
Route::get('/badut', 'EntertaimentController@b6')->name('');
Route::get('/badut', 'EntertaimentController@b7')->name('');
Route::get('/badut', 'EntertaimentController@b8')->name('');
Route::get('/badut', 'EntertaimentController@b9')->name('');
Route::get('/badut', 'EntertaimentController@b10')->name('');


// //home cleaner
// Route::get('/', 'HomeCleanerController@h1')->name('');
// Route::get('/', 'HomeCleanerController@h2')->name('');
// Route::get('/', 'HomeCleanerController@h3')->name('');
// Route::get('/', 'HomeCleanerController@h4')->name('');
// Route::get('/', 'HomeCleanerController@h5')->name('');
// Route::get('/', 'HomeCleanerController@h6')->name('');
// Route::get('/', 'HomeCleanerController@h7')->name('');
// Route::get('/', 'HomeCleanerController@h8')->name('');
// Route::get('/', 'HomeCleanerController@h9')->name('');
// Route::get('/', 'HomeCleanerController@h10')->name('');


// // londry
// Route::get('/', 'LondryController@l1')->name('');
// Route::get('/', 'LondryController@l2')->name('');
// Route::get('/', 'LondryController@l3')->name('');
// Route::get('/', 'LondryController@l4')->name('');
// Route::get('/', 'LondryController@l5')->name('');
// Route::get('/', 'LondryController@l6')->name('');
// Route::get('/', 'LondryController@l7')->name('');
// Route::get('/', 'LondryController@l8')->name('');
// Route::get('/', 'LondryController@l9')->name('');
// Route::get('/', 'LondryController@l10')->name('');


// //pijet
// Route::get('/', 'PijetController@p1')->name('');
// Route::get('/', 'PijetController@p2')->name('');
// Route::get('/', 'PijetController@p3')->name('');
// Route::get('/', 'PijetController@p4')->name('');
// Route::get('/', 'PijetController@p5')->name('');
// Route::get('/', 'PijetController@p6')->name('');
// Route::get('/', 'PijetController@p7')->name('');
// Route::get('/', 'PijetController@p8')->name('');
// Route::get('/', 'PijetController@p9')->name('');
// Route::get('/', 'PijetController@p10')->name('');


// // private les
// Route::get('/', 'PrivateLesController@pl1')->name('');
// Route::get('/', 'PrivateLesController@pl2')->name('');
// Route::get('/', 'PrivateLesController@pl3')->name('');
// Route::get('/', 'PrivateLesController@pl4')->name('');
// Route::get('/', 'PrivateLesController@pl5')->name('');
// Route::get('/', 'PrivateLesController@pl6')->name('');
// Route::get('/', 'PrivateLesController@pl7')->name('');
// Route::get('/', 'PrivateLesController@pl8')->name('');
// Route::get('/', 'PrivateLesController@pl9')->name('');
// Route::get('/', 'PrivateLesController@pl10')->name('');


// //self beauty
// Route::get('/', 'SelfBeautyController@s1')->name('');
// Route::get('/', 'SelfBeautyController@s2')->name('');
// Route::get('/', 'SelfBeautyController@s3')->name('');
// Route::get('/', 'SelfBeautyController@s4')->name('');
// Route::get('/', 'SelfBeautyController@s5')->name('');
// Route::get('/', 'SelfBeautyController@s6')->name('');
// Route::get('/', 'SelfBeautyController@s7')->name('');
// Route::get('/', 'SelfBeautyController@s8')->name('');
// Route::get('/', 'SelfBeautyController@s9')->name('');
// Route::get('/', 'SelfBeautyController@s10')->name('');





Route::group(['prefix' => '/admin'], function (){


    Route::get('/login','Auth\AdminLoginController@showLoginForm');
    Route::post('/login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
    Route::get('/register','Auth\AdminLoginController@showRegisterPage');
    Route::post('/register', 'Auth\AdminLoginController@register')->name('admin.register');

    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

    //kategori
    Route::match(['get', 'post'], '/add-category', 'CategoryController@TambahKategori')->name('tambah-kategori');
    Route::match(['get', 'post'], '/edit-category/{id}', 'CategoryController@editKategori')->name('edit-kategori');
    Route::get('/view-category', 'CategoryController@ViewCategory')->name('data-kategori');

    //data jasa
    Route::get('/service', 'ServiceController@service')->name('service');
    Route::get('/service/tambah','ServiceController@tambah')->name('service-tambah');
    Route::post('/service/store','ServiceController@store')->name('service-store');

    //data pengguna
    Route::get('/data-user', 'UserController@pengguna')->name('data-user');
    Route::get('user/hapus/{id}','UserController@hapus')->name('hapus-user');

    //payment
    Route::get('/payment', 'PaymentController@payment')->name('payment');
});
