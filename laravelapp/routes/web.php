<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ShopController;

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

Route::get('tests/test', [ TestController::class, 'index' ]);

Route::get('shops', [ ShopController::class, 'index' ]);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::resource('contacts', ContactFormController::class);

//Route::get('contents', [ContactFormController::class,'index'])->name('contacts.index');


Route::prefix('contacts')//頭に　contactをつける
    ->middleware(['auth'])//認証
    ->controller(ContactFormController::class)//コントローラー指定
    ->name('contacts.')//ルート名
    ->group(function(){//グループ化
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create'); //名前付きルート
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}', 'update')->name('update');
        Route::post('{id}/destroy', 'destroy') ->name('destroy');

    });
    