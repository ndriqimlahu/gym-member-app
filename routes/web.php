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

Route::get('/studenti', 'App\Http\Controllers\StudentiController@studenti');

Route::get('/addMember', function () {
    return view('gym-add-member');
})->name('addMember');

Route::post('/addedMember','App\Http\Controllers\GymMemberController@storeGymMember')->name('addedMember');

Route::get('/viewMember', function () {
    return view('gym-view-member');
})->name('viewMember');
