<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MessageController;
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


Route::get('/',[HomeController::class,'index'])->name('homepage');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/home/aboutus',[HomeController::class, 'aboutus'])->name('home_aboutus');
Route::get('/home/faq',[HomeController::class, 'faq'])->name('home_faq');
Route::get('/home/references',[HomeController::class, 'references'])->name('home_references');
Route::get('/home/contact',[HomeController::class, 'contact'])->name('home_contact');
Route::get('/home/login',[HomeController::class, 'signin'])->name('home_login');
Route::post('/sendmessage',[HomeController::class, 'sendmessage'])->name('sendmessage');

Route::get('/hotel/{id}', [HomeController::class, 'hotel'])->name('hotel');
Route::get('/categoryhotels/{id}', [HomeController::class, 'categoryhotels'])->name('categoryhotels');

Route::get('/bookaroom/{id}', [HomeController::class, 'bookaroom'])->name('bookaroom');


Route::get('/test/{id}/{name}',[HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');


// Admin
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');


    #hotel
    Route::prefix('hotel')->group(function () {
        //route assigned name "admin.users"
        Route::get('/', [\App\Http\Controllers\Admin\HotelController::class, 'index'])->name('admin_hotels');
        Route::get('create', [\App\Http\Controllers\Admin\HotelController::class, 'create'])->name('admin_hotel_add');
        Route::post('store', [\App\Http\Controllers\Admin\HotelController::class, 'store'])->name('admin_hotel_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'edit'])->name('admin_hotel_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'update'])->name('admin_hotel_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'destroy'])->name('admin_hotel_delete');
        Route::post('show', [\App\Http\Controllers\Admin\HotelController::class, 'show'])->name('admin_hotel_show');


    });

    #hotel
    Route::prefix('messages')->group(function () {
        //route assigned name "admin.users"
        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::post('show', [MessageController::class, 'show'])->name('admin_message_show');


    });
    #hotel image category
    Route::prefix('image')->group(function (){
        Route::get('create/{hotel_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{hotel_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{hotel_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::post('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');

    });

    #room category
    Route::prefix('room')->group(function () {

        Route::get('create/{hotel_id}',[\App\Http\Controllers\Admin\RoomController::class,'create'])->name('admin_room_add');
        Route::post('store/{hotel_id}',[\App\Http\Controllers\Admin\RoomController::class,'store'])->name('admin_room_store');
        Route::get('delete/{id}/{hotel_id}',[\App\Http\Controllers\Admin\RoomController::class,'destroy'])->name('admin_room_delete');
        Route::post('show',[\App\Http\Controllers\Admin\RoomController::class,'show'])->name('admin_room_show');


    });

    #Reservation
    Route::prefix('reservation')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('admin_reservation');

        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('admin_reservation_delete');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'update'])->name('admin_reservation_update');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'show'])->name('admin_reservation_show');



    });

    #setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');

});
#USER
Route::middleware('auth')->prefix('my_profile')->namespace('user')->group(function (){
    Route::get('/profile',[UserController::class,'index'])->name('userprofile');
    #hotel
    Route::prefix('hotel')->group(function () {
        //route assigned name "admin.users"
        Route::get('/', [\App\Http\Controllers\HotelController::class, 'index'])->name('user_hotels');
        Route::get('create', [\App\Http\Controllers\HotelController::class, 'create'])->name('user_hotel_add');
        Route::post('store', [\App\Http\Controllers\HotelController::class, 'store'])->name('user_hotel_store');
        Route::get('edit/{id}', [\App\Http\Controllers\HotelController::class, 'edit'])->name('user_hotel_edit');
        Route::post('update/{id}', [\App\Http\Controllers\HotelController::class, 'update'])->name('user_hotel_update');
        Route::get('delete/{id}', [\App\Http\Controllers\HotelController::class, 'destroy'])->name('user_hotel_delete');
        Route::post('show', [\App\Http\Controllers\HotelController::class, 'show'])->name('user_hotel_show');


    });
    #hotel image category
    Route::prefix('image')->group(function (){
        Route::get('create/{hotel_id}',[\App\Http\Controllers\ImageController::class,'create'])->name('user_image_add');
        Route::post('store/{hotel_id}',[\App\Http\Controllers\ImageController::class,'store'])->name('user_image_store');
        Route::get('delete/{id}/{hotel_id}',[\App\Http\Controllers\ImageController::class,'destroy'])->name('user_image_delete');
        Route::post('show',[\App\Http\Controllers\ImageController::class,'show'])->name('user_image_show');

    });

    #room user
    Route::prefix('rooms')->group(function () {

        Route::get('/bla/{id}', [\App\Http\Controllers\RoomController::class, 'index'])->name('user_rooms');
        Route::post('store', [\App\Http\Controllers\RoomController::class, 'store'])->name('user_rooms_store');
        Route::post('update/{id}', [\App\Http\Controllers\RoomController::class, 'update'])->name('user_rooms_update');
        Route::get('delete/{id}', [\App\Http\Controllers\RoomController::class, 'destroy'])->name('user_rooms_delete');


    });

    #Shopcart
    Route::prefix('shopcart')->group(function () {
        //route assigned name "admin.users"
        Route::get('/', [\App\Http\Controllers\ShopcartController::class, 'index'])->name('user_shopcart');
        Route::post('store/{id}/{hotel_id}', [\App\Http\Controllers\ShopcartController::class, 'store'])->name('user_shopcart_add');
        Route::post('update/{id}', [\App\Http\Controllers\ShopcartController::class, 'update'])->name('user_shopcart_update');
        Route::get('delete/{id}', [\App\Http\Controllers\ShopcartController::class, 'destroy'])->name('user_shopcart_delete');


    });
    Route::prefix('reservation')->group(function () {
        //route assigned name "admin.users"
        Route::get('/', [\App\Http\Controllers\ReservationController::class, 'index'])->name('user_reservation');
        Route::post('store/{id}/{hotel_id}', [\App\Http\Controllers\ReservationController::class, 'store'])->name('user_reservation_add');
        Route::get('delete/{reservation_id}', [\App\Http\Controllers\ReservationController::class, 'destroy'])->name('user_reservation_delete');


    });

});


Route::get('/admin/login',[HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
