<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DeliberationController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\FrontAssociationController;
use App\Http\Controllers\FrontMemberController;
use App\Http\Controllers\FrontDeliberationController;
use App\Http\Controllers\FrontArticleController;
use App\Http\Controllers\FrontServiceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('home', [FrontHomeController::class, 'index'])->name('home');
Route::get('/nos-associations', [FrontAssociationController::class, 'index'])->name('nos-associations');    
Route::get('/nos-membres', [FrontMemberController::class,'index'])->name('nos-membres');
Route::get('/nos-deliberations', [FrontDeliberationController::class, 'index'])->name('nos-deliberations');
Route::get('/nos-articles', [FrontArticleController::class, 'index'])->name('nos-articles');
Route::get('/article/{article}',[FrontArticleController::class, 'show'])->name('article');
Route::get('/services-alentours', [FrontServiceController::class, 'index'])->name('services-alentours');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/admin/profile', function(){
    return view('profile.show-admin');

})->name('profile.admin');

Route::resource('articles', ArticleController::class);

Route::resource('members', MemberController::class);

Route:: resource('deliberations', DeliberationController::class);

Route:: resource('associations', AssociationController::class);

Route::resource('services', ServiceController::class);