<?php

use App\Http\Controllers\admin\TeamController as AdminTeamController;
use App\Http\Controllers\user\TeamController as UserTeamController;
use App\Http\Controllers\admin\PlayerController as AdminPlayerController;
use App\Http\Controllers\user\PlayerController as UserPlayerController;
use App\Http\Controllers\admin\FixtureController as AdminFixtureController;
use App\Http\Controllers\user\FixtureController as UserFixtureController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::resource('/admin/teams', AdminTeamController::class)->middleware(['auth'])->names('admin.teams');
Route::resource('/user/teams', UserTeamController::class)->middleware(['auth'])->names('user.teams')->only(['index','show']);
Route::resource('/admin/players', AdminPlayerController::class)->middleware(['auth'])->names('admin.players');
Route::resource('/user/players', UserPlayerController::class)->middleware(['auth'])->names('user.players')->only(['show']);
Route::resource('/admin/fixtures', AdminFixtureController::class)->middleware(['auth'])->names('admin.fixtures');
Route::resource('/user/fixtures', UserFixtureController::class)->middleware(['auth'])->names('user.fixtures')->only(['index','show']);
Route::get('/fixtures/{id}/check-teams', [FixtureController::class, 'checkFixtureTeams']);