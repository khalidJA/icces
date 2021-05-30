<?php

use App\Http\Controllers\sys;
use App\Mail\CompleteRegister;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\linksController;
use App\Http\Controllers\menusController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\contentsController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\committeesController;
use App\Http\Controllers\personsComsController;
use App\Http\Controllers\subContentsController;
use App\Http\Controllers\relatedContentsController;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('register', registerController::class);   
    Route::resource('settings', settingsController::class)->except(['index','create','show','sotre']);
    Route::resource('contents', contentsController::class);
Route::resource('contact', contactController::class)->except(['create','store','index']);
Route::resource('committees', committeesController::class);
Route::resource('rcontents', relatedContentsController::class)->except(['create','index']);

Route::get('rcontents/create/{content_id}', [relatedContentsController::class,'create'])->name('rcontents.create');
Route::get('rcontents/index/{content_id}',[ relatedContentsController::class,'index'])->name('rcontents.index');
Route::resource('persons_coms', personsComsController::class)->except(['create','index']);
Route::get('persons_coms/create/{committees_id}', [personsComsController::class,'create'])->name('persons_coms.create');
Route::get('persons_coms/index/{committees_id}',[ personsComsController::class,'index'])->name('persons_coms.index');
Route::resource('sub_contents', subContentsController::class)->except(['create','index']);
Route::get('sub_contents/create/{content_id}', [subContentsController::class,'create'])->name('sub_contents.create');
Route::get('sub_contents/index/{content_id}',[ subContentsController::class,'index'])->name('sub_contents.index');
Route::resource('menus', menusController::class)->except(['create','index']);
Route::get('menus/create/{content_id}', [menusController::class,'create'])->name('menus.create');
Route::get('menus/index/{content_id}',[ menusController::class,'index'])->name('menus.index');
Route::resource('links', linksController::class)->except(['create','index']);
Route::get('links/create/{type}/{id?}', [linksController::class,'create'])->name('links.create');
Route::get('links/index/{type}/{id?}',[ linksController::class,'index'])->name('links.index');
Route::get('DashboardDataRelated/{related_content}/{content_id}',[ sys::class,'DashboardDataRelated'])->name('DashboardDataRelated');
Route::get('contacts',[contactController::class,'index'])->name('contact.index');
Route::get('/administrator', [sys::class,'Dashaboard']);

});





Route::get('/',[sys::class,'Home'])->name('home');
Route::get('/active/{code}/{email}',[sys::class,'active']);

Route::post('reg',[sys::class,'reg'])->name('reg');
Route::post('search',[sys::class,'search'])->name('search');



Route::get('/contents/links/{id}', [sys::class,'OneContent'])->name('content');
Route::get('join',[sys::class,'join'])->name('join');

Route::get('contact',[sys::class,'Contact'])->name('contact');
Route::post('contact.send',[sys::class,'storeContact'])->name('contact.store');


