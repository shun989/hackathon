<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatsController;
use Illuminate\Support\Facades\Auth;
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
})->name('home-page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/chats')->group(function (){

    Route::get('/',[ChatsController::class,'index'])->name('chats.index');
    Route::get('messages', [ChatsController::class,'fetchMessages'])->name('chats.fetchMessages');
    Route::post('messages', [ChatsController::class,'sendMessage'])->name('chats.sendMessage');
    Route::get('/create',[ChatController::class,'createRoom'])->name('chats.createRoom');
    Route::post('/create',[ChatController::class,'create'])->name('chats.create');
});

