<?php
use App\Http\Controllers\SellerProductController;

use App\Http\Controllers\SellerAuctionController;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidUser;
use App\Http\Middleware\ValidSeller;
use App\Http\Middleware\EnsureTokenIsValid;
Route::get('/', function () {
    return view('welcome');
});

//seller//product

Route::get('/productCreate',[SellerProductController::class, 'productCreate'])->name('productCreate')->middleware('ValidUser')->middleware('ValidSeller');

Route::post('/productCreate',[SellerProductController::class, 'productCreateSubmit'])->name('productCreate')->middleware('ValidUser')->middleware('ValidSeller');

Route::get('/sellerProductList',[SellerProductController::class, 'sellerProductList'])->name('sellerProductList')->middleware('ValidUser')->middleware('ValidSeller');

Route::get('/productDelete',[SellerProductController::class, 'productDelete'])->name('productDelete')->middleware('ValidUser')->middleware('ValidSeller');

Route::get('/productCatagory',[SellerProductController::class, 'productCatagory'])->name('productCatagory')->middleware('ValidUser');

Route::get('/productRegDetails',[SellerProductController::class, 'productRegDetails'])->name('productRegDetails')->middleware('ValidUser');

Route::get('/productCatagoryEdit',[SellerProductController::class, 'productCatagoryEdit'])->name('productCatagoryEdit')->middleware('ValidUser')->middleware('ValidSeller');

Route::post('/productCatagoryEdit',[SellerProductController::class, 'productCatagoryEditSubmitted'])->name('productCatagoryEdit')->middleware('ValidUser')->middleware('ValidSeller');

Route::get('/createAuction',[SellerAuctionController::class, 'createAuction'])->name('createAuction')->middleware('ValidUser')->middleware('ValidSeller');

Route::post('/createAuction',[SellerAuctionController::class, 'createAuctionSubmit'])->name('createAuction')->middleware('ValidUser')->middleware('ValidSeller');

Route::get('/sellerAuctionList',[SellerAuctionController::class, 'sellerAuctionList'])->name('sellerAuctionList')->middleware('ValidUser')->middleware('ValidSeller');

Route::get('/auctionDelete',[SellerAuctionController::class, 'auctionDelete'])->name('auctionDelete')->middleware('ValidUser')->middleware('ValidSeller');


Route::get('/viewAuctionList',[CustomerController::class, 'viewAuctionList'])->name('viewAuctionList')->middleware('ValidUser');


Route::get('/createBid',[CustomerController::class, 'createBid'])->name('createBid')->middleware('ValidUser');

Route::post('/createBid',[CustomerController::class, 'createBidSubmit'])->name('createBid')->middleware('ValidUser');

Route::get('/viewWinningProduct',[CustomerController::class, 'viewWinningProduct'])->name('viewWinningProduct')->middleware('ValidUser');

Route::get('/createPayment',[CustomerController::class, 'createPayment'])->name('createPayment')->middleware('ValidUser');

Route::post('/createPayment',[CustomerController::class, 'createPaymentSubmit'])->name('createPayment')->middleware('ValidUser');

Route::get('/viewPayment',[CustomerController::class, 'viewPayment'])->name('viewPayment')->middleware('ValidUser');



Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'loginSubmit'])->name('login');

Route::get('/dash',[UserController::class, 'dash'])->name('dash')->middleware('ValidUser');
Route::get('/logout',[UserController::class, 'logout'])->name('logout');


Route::get('/home',[UserController::class, 'home'])->name('home');


Route::get('/seller',[UserController::class, 'seller'])->name('seller')->middleware('ValidUser');
Route::post('/seller',[UserController::class, 'sellerSubmit'])->name('seller')->middleware('ValidUser');



