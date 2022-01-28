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

Route::get('/addMember', function () {
    return view('gym-add-member');
})->middleware('auth')->name('addMember');

Route::post('/addedMember','App\Http\Controllers\GymMemberController@storeGymMember')->name('addedMember');

Route::get('/viewMember', function () {
    return view('gym-view-member');
})->middleware('auth')->name('viewMember');

Route::get('/editMember', function () {
    return view('gym-edit-member');
})->middleware('auth')->name('editMember');

Route::post('/edit/{id}', 'App\Http\Controllers\GymMemberController@showDataEditMember')->name('showDataEditMember');

Route::post('/edit', 'App\Http\Controllers\GymMemberController@editGymMember')->name('editGymMember');

Route::delete('/deleteMember/{id}', 'App\Http\Controllers\GymMemberController@deleteGymMember')->name('deleteGymMember');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
