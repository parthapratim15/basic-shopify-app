<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyController;

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

Route::get('/', [\App\Http\Controllers\ShopController::class, 'index'])
    ->middleware(['verify.shopify'])
    ->name('home');

Route::get('/shop',[\App\Http\Controllers\ShopController::class, 'index'])
    ->middleware(['verify.shopify'])
    ->name('shop');

Route::get('/collections',[\App\Http\Controllers\CollectionController::class, 'index'])
    ->middleware(['verify.shopify'])
    ->name('collections');

Route::post('/collections', [\App\Http\Controllers\CollectionController::class, 'index'])
    ->middleware(['verify.shopify'])
    ->name('collection.save');

Route::get('/products/{collectionid}', [\App\Http\Controllers\CollectionController::class, 'products'])
    ->middleware(['verify.shopify'])
    ->name('collection.products');

Route::post('/products/{collectionid}', [\App\Http\Controllers\CollectionController::class, 'products'])
    ->middleware(['verify.shopify'])
    ->name('collection.products.save');

// Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])
//     ->middleware(['verify.shopify'])->name('product.index');

// Route::get('/groups-index', [\App\Http\Controllers\FaqController::class, 'groupIndex'])
//     ->middleware(['verify.shopify'])
//     ->name('group.index');

// Route::post('/groups-index', [\App\Http\Controllers\FaqController::class, 'groupIndex'])
//     ->middleware(['verify.shopify'])
//     ->name('group.save');

// Route::post('/groups', [\App\Http\Controllers\FaqController::class, 'groupStore'])
//     ->middleware(['verify.shopify'])
//     ->name('group.store');


// Route::get('/faqs/{groupid}', [\App\Http\Controllers\FaqController::class, 'faqs'])
//     ->middleware(['verify.shopify'])
//     ->name('group.faqs');
// Route::post('/faqs/{groupid}', [\App\Http\Controllers\FaqController::class, 'faqs'])
//     ->middleware(['verify.shopify'])
//     ->name('group.faqs.save');

// Route::get('/shop',function(){
//     return response("Shops", 200);
// })->middleware(['verify.shopify'])->name('shop');



