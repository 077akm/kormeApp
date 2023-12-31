<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth2\RegisterController;
use App\Http\Controllers\Auth2\LoginController;
use App\Http\Controllers\Adm\UserController;
use App\Http\Controllers\Adm\ItemderController;
use App\Http\Controllers\Adm\CommentterController;
use App\Http\Controllers\Adm\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Adm\OrderController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\WalletController;

Route::get('/', function (){
    return redirect()->route('items.index');
});


Route::get('lang/{lang}/', [LangController::class, 'switchLang'])->name('switch.lang');

Route::middleware('auth')->group(function (){
    Route::resource('items', ItemController::class)->except('index', 'show');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('comments', CommentController::class)->except('show');

    Route::post('/items/{item}/rate', [ItemController::class, 'rate'])->name('items.rate');
    Route::post('/items/{item}/unrate', [ItemController::class, 'unrate'])->name('items.unrate');

    Route::post('/items/{item}/carting', [ItemController::class, 'carting'])->name('items.carting');
    Route::post('/items/{item}/uncarting', [ItemController::class, 'uncarting'])->name('items.uncarting');
    Route::get('/shoping', [ItemController::class, 'shoping'])->name('shoping.index');

    Route::post('/items/{item}/addkol', [ItemController::class, 'addkol'])->name('items.addkol');
    Route::post('/items/{item}/unaddkol', [ItemController::class, 'unaddkol'])->name('items.unaddkol');
    Route::post('/cart/{user}', [CartController::class, 'buy'])->name('cart.buy');

    Route::get('/items/payshow', [WalletController::class, 'index'])->name('items.payshow');
    Route::post('/items/{user}/addmon', [WalletController::class, 'addmon'])->name('items.addmon');
    Route::get('/items/lang', [LangController::class, 'langbet'])->name('items.langbet');

    Route::prefix('adm')->as('adm.')->middleware('hasrole:admin')->group(function (){
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/search', [UserController::class, 'index'])->name('users.search');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::put('/users/{user}/ban', [UserController::class, 'ban'])->name('users.ban');
        Route::put('/users/{user}/unban', [UserController::class, 'unban'])->name('users.unban');
        Route::get('/users/{user}/edrole', [UserController::class, 'edrole'])->name('users.edrole');

        Route::get('/items', [ItemderController::class, 'showItems'])->name('items');


        Route::get('/cart', [OrderController::class, 'cart'])->name('cart.index');
        Route::put('/cart/{cart}/confirm', [OrderController::class, 'confirm'])->name('cart.confirm');
    });

    Route::prefix('adm')->as('adm.')->middleware('hasrole:moderator')->group(function (){
        Route::get('/categories/index', [CategoryController::class, 'showCategory'])->name('categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::delete('/categories/{category}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::get('/comments', [CommentterController::class, 'showComments'])->name('comments');
    });
});

Route::get('/items/profile', [ItemController::class, 'profile'])->name('items.profile');
Route::get('/items/search', [ItemController::class, 'index'])->name('items.search');
Route::resource('items', ItemController::class)->only('index', 'show');
Route::get('/items/category/{category}', [ItemController::class, 'itemsByCategory'])->name('items.category')/*->middleware('hasrole:moderator')*/;
Route::get('/items/condition/{condition}', [ItemController::class, 'itemsByCondition'])->name('items.condition');
//Auth::routes();

Route::resource('comments', CommentController::class)->only('show');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [LoginController::class, 'create'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

