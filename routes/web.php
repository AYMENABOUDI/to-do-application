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




Route::get('tasks', 'admin\MyCalendarController@index')->name('tasks.index'); 
Route::get('createposts', 'admin\MyCalendarController@create');
Route::post('store', 'admin\MyCalendarController@store');
Route::post('destroy', 'admin\MyCalendarController@destroy');
Route::get('show', 'admin\MyCalendarController@show');
Route::resource('tasks', 'admin\MyCalendarController');


Route::get('myday', 'admin\MydayController@index');  
Route::get('createposts', 'admin\MydayController@create');
Route::post('store', 'admin\MydayController@store');
Route::post('destroy', 'admin\MydayController@destroy');
Route::get('show', 'admin\MydayController@show');
Route::resource('myday', 'admin\MydayController');



Route::get('mydocuments', 'admin\MydocumentsController@index'); 
Route::get('createposts', 'admin\MydocumentsController@create');
Route::post('store', 'admin\MydocumentsController@store');
Route::post('destroy', 'admin\MydocumentsController@destroy');
Route::get('show', 'admin\MydocumentsController@show');
Route::resource('mydocuments', 'admin\MydocumentsController');



//fullcalender
Route::get('fullcalendar','admin\PagesController@index')->name('fullcalendar.view');
Route::post('fullcalendar/create','admin\PagesController@create');
Route::post('fullcalendar/update','admin\PagesController@update');
Route::post('fullcalendar/delete','admin\PagesController@destroy');




Route::get('/', 'AdminLoginController@index')->name('login');

Route::get('admin', 'AdminLoginController@index')->name('login');
Route::post('admin', 'AdminLoginController@postLogin')->name('saveadminlogin'); 

Route::middleware('auth')->group(function(){
Route::get('admin/home', 'admin\AdminController@dashboard')->name('home'); 


Route::post('admin/logout', 'AdminLoginController@logout')->name('logout'); 
});
//Admin profile
Route::get('admin/profile', 'admin\ProfileController@profile')->name('admin.profile');
Route::get('admin/profile/edit','admin\ProfileController@show')->name('admin.edit.profile');
Route::post('admin/profile/edit','admin\ProfileController@edit')->name('admin.edit');
Route::get('admin/profile/edit/pic','admin\PhotoController@show')->name('change.pic.adminview');
Route::post('admin/profile/edit/pic','admin\PhotoController@edit')->name('change.pic.admin');
Route::get('admin/profile/change-password', 'admin\ChangePasswordController@index')->name('change.password.adminview');
Route::post('admin/profile/change-password', 'admin\ChangePasswordController@store')->name('change.password.admin');	

