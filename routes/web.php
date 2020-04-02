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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@home_show');
Route::get('/home/member', 'MemberController@member_show');
Route::get('/home/member/mai', 'MemberController@mai');
Route::get('/home/member/airi', 'MemberController@airi');
Route::get('/home/member/mihiro', 'MemberController@mihiro');
Route::get('/home/member/ayaka', 'MemberController@ayaka');
Route::get('/home/member/moe', 'MemberController@moe');
