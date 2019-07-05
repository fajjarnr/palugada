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

Route::get('/about-us', function(){
    return view('about');
});

Route::get('/contact-us', function(){
    return view('contact');
});


Route::group(['prefix' => '/category'], function () {
    Route::get('/entertaiment', 'EntertaimentController@userentertaiment')->name('user.entertaiment');
    Route::get('/homecleaner', 'HomeCleanerController@userhomecleaner')->name('user.homecleaner');
    Route::get('/laundry', 'LaundryController@userlaundry')->name('user.laundry');
    Route::get('/lesprivate', 'LesPrivateController@userlesprivate')->name('user.lesprivate');
    Route::get('/massage', 'MassageController@usermassage')->name('user.massage');
    Route::get('/selfbeauty', 'SelfBeautyController@userselfbeauty')->name('user.selfbeauty');
});

Route::group(['prefix' => '/admin'], function (){

    Route::get('/login','Auth\AdminLoginController@showLoginForm');
    Route::post('/login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
    Route::get('/register','Auth\AdminLoginController@showRegisterPage');
    Route::post('/register', 'Auth\AdminLoginController@register')->name('admin.register');

    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

    //kategori
    Route::get('/category', 'CategoryController@index')->name('kategori');
    Route::get('/add/category', 'CategoryController@create')->name('create.category');
    Route::post('/store/category', 'CategoryController@store')->name('store.category');
    Route::get('/edit/category/{id}', 'CategoryController@edit')->name('edit.category');
    Route::patch('/update/category/{id}', 'CategoryController@update')->name('update.category');
    Route::get('/show/category', 'CategoryController@show')->name('show.category');
    Route::get('/delete/category/{id}', 'CategoryController@destroy')->name('delete.category');

    //data jasa Entertaiment
    Route::get('/entertaiment', 'EntertaimentController@index')->name('entertaiment');
    Route::get('/addentertaiment', 'EntertaimentController@create')->name('create.entertaiment');
    Route::post('/store/entertaiment', 'EntertaimentController@store')->name('store.entertaiment');
    Route::get('/edit/entertaiment/{id}', 'EntertaimentController@edit')->name('edit.entertaiment');
    Route::patch('/update/entertaiment/{id}', 'EntertaimentController@update')->name('update.entertaiment');
    Route::get('/show/entertaiment', 'EntertaimentController@show')->name('show.show');
    Route::get('/delete/entertaiment/{id}', 'EntertaimentController@destroy')->name('delete.entertaiment');

    //data jasa Home Cleaner
    Route::get('/home-cleaner', 'HomeCleanerController@index')->name('homecleaner');
    Route::get('/add/homecleaner', 'HomeCleanerController@create')->name('create.homecleaner');
    Route::post('/store/homecleaner', 'HomeCleanerController@store')->name('store.homecleaner');
    Route::get('/edit/homecleaner/{id}', 'HomeCleanerController@edit')->name('edit.homecleaner');
    Route::patch('/update/homecleaner/{id}', 'HomeCleanerController@update')->name('update.homecleaner');
    Route::get('/show/homecleaner', 'HomeCleanerController@show')->name('show.homecleaner');
    Route::get('/delete/homecleaner/{id}', 'HomeCleanerController@destroy')->name('delete.homecleaner');

    //data jasa  Laundry
    Route::get('/laundry', 'LaundryController@index')->name('laundry');
    Route::get('/add/laundry', 'LaundryController@create')->name('create.laundry');
    Route::post('/store-laundry', 'LaundryController@store')->name('store.laundry');
    Route::get('/edit/laundry/{id}', 'LaundryController@edit')->name('edit.laundry');
    Route::patch('/update/laundry/{id}', 'LaundryController@update')->name('update.laundry');
    Route::get('/show/laundry', 'LaundryController@show')->name('show.laundry');
    Route::get('/delete/laundry/{id}', 'LaundryController@destroy')->name('delete.laundry');

    //data jasa Les Private
    Route::get('/lesprivate', 'LesPrivateController@index')->name('lesprivate');
    Route::get('/add/lesprivate', 'LesPrivateController@create')->name('create.lesprivate');
    Route::post('/store/lesprivate', 'LesPrivateController@store')->name('store.lesprivate');
    Route::get('/edit/lesprivate/{id}', 'LesPrivateController@edit')->name('edit.lesprivate');
    Route::patch('/update/lesprivate/{id}', 'LesPrivateController@update')->name('update.lesprivate');
    Route::get('/show/lesprivate', 'LesPrivateController@show')->name('show.lesprivate');
    Route::get('/delete/lesprivate/{id}', 'LesPrivateController@destroy')->name('delete.lesprivate');

    //data jasa Massage
    Route::get('/massage', 'MassageController@index')->name('massage');
    Route::get('/add/massage', 'MassageController@create')->name('create.massage');
    Route::post('/store/massage', 'MassageController@store')->name('store.massage');
    Route::get('/edit/massage/{id}', 'MassageController@edit')->name('edit.massage');
    Route::patch('/update/massage/{id}', 'MassageController@update')->name('update.massage');
    Route::get('/show/massage', 'MassageController@show')->name('show.massage');
    Route::get('/delete/massage/{id}', 'MassageController@destroy')->name('delete.massage');

    //data jasa Selfbeauty
    Route::get('/selfbeauty', 'SelfBeautyController@index')->name('selfbeauty');
    Route::get('/add/selfbeauty', 'SelfBeautyController@create')->name('create.selfbeauty');
    Route::post('/store/selfbeauty', 'SelfBeautyController@store')->name('store.selfbeauty');
    Route::get('/edit/selfbeauty/{id}', 'SelfBeautyController@edit')->name('edit.selfbeauty');
    Route::patch('/update/selfbeauty/{id}', 'SelfBeautyController@update')->name('update.selfbeauty');
    Route::get('/show/selfbeauty', 'SelfBeautyController@show')->name('show.selfbeauty');
    Route::get('/delete/selfbeauty/{id}', 'SelfBeautyController@destroy')->name('delete.selfbeauty');

    //data pengguna
    Route::get('/datauser', 'UserController@index')->name('data.user');
    Route::get('/datauser/delete/{id}','UserController@destroy')->name('delete.user');

    //payment
    Route::get('/payment', 'PaymentController@payment')->name('payment');
});
