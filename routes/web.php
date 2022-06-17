<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastleController;
use App\Http\Controllers\Castle\CastleProfileController;
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

/* Castle Routes */
Route::get('castle/login',[CastleController::class,'index'])->name('login_form');
Route::post('castle/login/owner',[CastleController::class,'login'])->name('castle.login');

Route::group(['prefix' => 'castle','middleware'=>'castle'], function (){


    Route::get('/dashboard',[CastleController::class,'dashboard'])
        ->name('castle.dashboard');
    Route::get('/logout',[CastleController::class,'castleLogout'])
        ->name('castle.logout');
    Route::get('/register',[CastleController::class,'castleRegister'])
        ->name('castle.register');
    Route::post('/register/create',[CastleController::class,'castleRegisterCreate'])->name('castle.register.create');
    Route::get('/profile',[CastleProfileController::class,'castleProfile'])
        ->name('castle.profile');
    Route::get('/edit',[CastleProfileController::class,'castleProfileEdit'])
        ->name('castle.profile.edit');
    Route::post('/profile/update',[CastleProfileController::class,'castleProfileUpdate'])
        ->name('castle.profile.update');
    Route::get('/change/password',[CastleProfileController::class,'castleChangePassword'])
        ->name('castle.change.password');

    Route::post('update/change/password',[CastleProfileController::class,'castleUpdateChangePassword'])
        ->name('update.change.password');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
