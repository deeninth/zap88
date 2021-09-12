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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'indexgtr'])->name('home');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');




Route::get('/member/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/member/deposit', [App\Http\Controllers\DepositController::class, 'index'])->name('deposit');

Route::get('/member/withdrawal', [App\Http\Controllers\WithdrawalController::class, 'index'])->name('withdrawal');
Route::get('/member/vip', [App\Http\Controllers\VipController::class, 'index'])->name('vip');
Route::get('/member/wallethistory', [App\Http\Controllers\WalletHistoryController::class, 'index'])->name('wallethistory');
Route::get('/member/affiliate', [App\Http\Controllers\AffiliateController::class, 'index'])->name('aff');
Route::get('/member/affiliate/member', [App\Http\Controllers\AffiliateController::class, 'member'])->name('aff_member');
Route::get('/member/affiliate/income', [App\Http\Controllers\AffiliateController::class, 'income'])->name('aff_income');
Route::get('/member/affiliate/withdrawal', [App\Http\Controllers\AffiliateController::class, 'withdrawal'])->name('aff_withdrawal');








