<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\Authentication\WelcomeController;
use App\Http\Controllers\Jurnal\JurnalController;
use App\Http\Controllers\Konsultasi\KonsultasiController;
use App\Http\Controllers\Meditasi\MeditasiController;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\ProfileController;
use App\Models\Jurnal;
use App\Models\Konsultasi;
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
        Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::get('/register' , [RegisterController::class, 'index'])->name('register');
        Route::post('/register' , [RegisterController::class, 'register'])->name('register.post');
    });


    //Landing Page
    Route::middleware('auth')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('landing.home');
        Route::get('/profile' , [ProfileController::class, 'index'])->name('landing.profile');
    });

    //Konsultasi
    Route::middleware('auth')->group(function () {
        Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.home');
        Route::post('/konsultasi', [KonsultasiController::class, 'postSchedule'])->name('konsultasi.schedule.post');

        Route::get('/konsutalsi/psikolog', [KonsultasiController::class, 'psikolog'])->name('konsultasi.psikolog');
        Route::post('/konsultasi/psikolog', [KonsultasiController::class, 'postPsikolog'])->name('konsultasi.psikolog.post');

        Route::get('/konstulasi/paket',[KonsultasiController::class,'paket'])->name('konsultasi.paket');
        Route::post('/konsultasi/save', [KonsultasiController::class, 'postKonsultasi'])->name('konsultasi.post');

        Route::get('konsultasi/checkout/:konsultasiId', [KonsultasiController::class,'checkout'])->name('konsultasi.checkout');
    });

    //Journaling
    Route::middleware('auth')->group(function(){
        Route::get('/jurnal', [JurnalController::class, 'index'])->name('jurnal.index');
        Route::get('/jurnal/:slug', [JurnalController::class, 'jurnal'])->name('jurnal.open');
    });

    //Meditasi
    Route::middleware('auth')->group(function(){
        Route::get('/meditasi', [MeditasiController::class, 'index'])->name('meditasi.home');
    });


    //Testing (Kasih 'testing/' pas mau ngecek halaman, misal, localhost::3000/testing/home)
    Route::prefix('testing')->group(function () {
        Route::get('/', function () {
            return view('layouts.layout');
        });

        Route::get('/home', function () {
            return view('pages.landing-page.home');
        });

        Route::get('/profile', function () {
            return view('pages.landing-page.profile');
        });
        Route::get('/login', function(){
            return view('pages.auth.login');
        });

        Route::get('/register', function(){
            return view('pages.auth.register');
        });

        Route::get('/welcome', function(){
            return view('pages.auth.welcome');
        });

        Route::get('/konsultasi', function(){
            return view('pages.konsultasi.index');
        });

        Route::get('/paket', function(){
            return view('pages.konsultasi.paket');
        });

    });



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
