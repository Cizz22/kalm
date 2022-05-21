<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
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

    //General Feature
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::get('/register' , [RegisterController::class, 'index'])->name('register');
    });


    //Landing Page



//     Route::middleware('auth')->group(function(){
//         //Verification
//         Route::get('/email/verify', \App\Http\Livewire\Auth\Emailverification::class)->name('verification.notice');
//         Route::get('/email/verified', EmailVerified::class)->name('email.verified');
//         Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//             $request->fulfill();

//             return redirect('/email/verified');
//         })->middleware(['auth', 'signed'])->name('verification.verify');

//         Route::middleware('verified')->group(function() {
//           //Patner Route
//           Route::group(['middleware' => 'usertypecheck:patners', 'prefix' => 'patner'] ,function() {
//             Route::get('profile', PatnerProfile::class)->name('patner.profile');
//         });

//         //Buyer Route
//         Route::group(['middleware' => 'usertypecheck:buyers', 'prefix'=>'buyer'] ,function(){
//             Route::get('profile', Profil::class)->name('buyer.profile');
//             Route::get('transaction', BuyerTransaksi::class)->name('buyer.transaksi');
//         });

//         //Order Route
//         Route::group(['prefix' => 'order'] ,function () {
//             Route::get('{slug}/checkout', Checkout::class)->name('transaction.checkout');
//             Route::get('{slug}/{id}/payment', Payment::class)->name('transaction.payment');
//         });
//         });
//     });

//     //Testing livewire Component
//     Route::get('/test2', Profil::class);


//     //==testing for front-end==//
//     Route::get('/test', function () {
//         return view('landing.favourites');
//     });
//     //=========================//

//     Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// //});







Route::get('/', function () {
    return view('layouts.layout');
});

Route::get('/home', function () {
    return view('pages.landing-page.home');
});

Route::get('/profile', function () {
    return view('pages.landing-page.profile');
});
