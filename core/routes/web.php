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
    return view('user.user_login');
});

Route::prefix('admin')->group(function(){
Route::get('/login', 'AdminController@login')->name('adminLogin')->middleware('adminStatus');
Route::post('/check', 'AdminController@check_admin')->name('checkAdmin');

Route::middleware(['adminDashboard'])->group(function(){

Route::get('/dashboard', 'AdminController@admin_dashboard')->name('adminDashboard');
Route::get('/logout', 'AdminController@admin_logout')->name('adminLogout');
Route::get('/manage/permission', 'AdminController@manage_permission')->name('managePermission');
Route::get('/edit/{id}/permission', 'AdminController@edit_permission')->name('editPermission');
Route::post('/update/permission', 'AdminController@update_permission')->name('updatePermission');
Route::get('/get/alluser', 'AdminController@all_user')->name('allUser');
Route::get('/get/alluser/balance', 'AdminController@all_user_balance')->name('usersTotalBalance');
Route::get('/edit/user/{id}', 'AdminController@edit_user')->name('editUser');
Route::post('/update/user', 'AdminController@update_user')->name('updateUser');

Route::get('/all/transaction', 'TransactionController@all_transaction')->name('allTransaction');
Route::get('/transactionByid/{id}', 'TransactionController@transaction_by_id')->name('transactionById');
Route::get('/give/interest', 'TransactionController@give_interest')->name('giveInterest');
Route::post('/give/interest/all', 'TransactionController@give_interest_to_alluser')->name('giveInterestToAll');
Route::get('/show/interest/transacation', 'TransactionController@show_interest_transaction')->name('showInterestTransaction');
Route::get('/show/reffered/history', 'TransactionController@show_reffered_history')->name('refferedHistory');
Route::get('/total/transfer/charge', 'TransactionController@total_transfer_charge')->name('totalTransferCharge');

});
});

Route::prefix('user')->group(function(){


Route::middleware(['userDashboard'])->group(function(){
Route::get('/dashboard', 'UserController@user_dashboard')->name('userDashboard');
Route::get('/send/money', 'UserController@user_send_money')->name('sendMoney');
Route::post('/transfer/money', 'UserController@transfer_money')->name('transferMoney');
Route::get('/reffered/link/{link}', 'UserController@get_reffered_link')->name('getRefferedLink');
Route::get('/manage/profile', 'UserController@manage_profile')->name('manageProfile');
Route::get('/edit/profile', 'UserController@edit_profile')->name('editProfile');
Route::get('/test', 'UserController@test');
Route::get('/transaction/history', 'TransactionController@transaction_history')->name('transactionHistory');
Route::get('/reffered/history', 'TransactionController@reffered_history')->name('refferedBalance');


});

Route::get('/login', 'UserController@login')->name('userLogin')->middleware('userStatus');
Route::get('/forgot/password', 'UserController@forgot_password')->name('forgotPassword');
Route::get('/password/reset/token', 'UserController@reset_password_token')->name('resetPasswordByToken');
Route::get('/password/reset/{id}', 'UserController@reset_password')->name('resetPassword');
Route::post('/update/forgot/password', 'UserController@update_forgot_password')->name('updateForgotPassword');
Route::post('/update/forgot/password/bytoken', 'UserController@update_forgot_password_by_token')->name('updateForgotPasswordByToken');
Route::post('/check/forgot/password', 'UserController@check_forgot_password')->name('checkForgotPassword');
Route::get('/register', 'UserController@register')->name('userRegister');
Route::post('/save', 'UserController@user_save')->name('userSave');

Route::post('/check', 'UserController@check_user')->name('checkUser');
Route::get('/logout', 'UserController@user_logout')->name('userLogout');


Route::get('/register/{id}', 'UserController@register_user_by_reffered')->name('userRegisterdByReffered');
Route::post('/save/by/reffered', 'UserController@save_user_by_reffered')->name('userSaveByReffered');
Route::get('/check/username', 'UserController@check_username')->name('checkUsername');





});
