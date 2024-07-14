<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(AdminController::class)->group(function () {
    Route::get('admin/data/user', 'dataUser')->name('index.dataUser');
    Route::get('admin/search/user', 'searchUser')->name('search.user');
    Route::delete('admin/delete/user', 'deleteUser')->name('delete.user');
    Route::get('admin/data/item', 'dataItem')->name('index.dataItem');
    Route::get('admin/search/item', 'adminSearchItem')->name('search.item');
    Route::delete('admin/delete/item', 'deleteItem')->name('delete.item');

});
Route::controller(\App\Http\Controllers\User\UserController::class)->group(function () {
    Route::get('user/profile', 'profileUser')->name('profile.user');
    Route::put('user/update/profile/{id}', 'updateProfile')->name('user.update.profile');
    Route::get('/user/items', 'showMyItem')->name('user.show.myItem');
    Route::get('user/create/myItem', 'createItem')->name('user.create.myItem');
    Route::post('user/store/myItem', 'storeItem')->name('user.store.myItem');
    Route::delete('user/delete/item', 'deleteItem')->name('user.delete.myItem');
    Route::get('user/search/my/item', 'userSearchItem')->name('user.search.myItem');
    Route::get('user/status/item', 'userStatusItem')->name('user.status.item');
    Route::get('user/add/status/item/{id}', 'addStatusItem')->name('user.add.status.item');
    Route::get('user/store/status/item/{id}', 'addStoreItem')->name('user.store.status.item');
});

Route::controller(FrontController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/items', 'items')->name('items');
    Route::get('/detail/item/{id}', 'detail')->name('index.detail');
    Route::get('/search', 'search')->name('search.front');
    Route::get('/load/more', 'loadMore')->name('load.more.front');
});