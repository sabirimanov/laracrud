<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SocialGithubController;


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

Route::get('/', [DashboardController::class, 'generateCharts']);

Route::resource('clients', ClientController::class);

Route::get('auth/github', [SocialGithubController::class, 'redirectToGithub']);
Route::get('callback/github', [SocialGithubController::class, 'handleCallback']);
Route::get('logout', [SocialGithubController::class, 'logout'])->name('logout');
