<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;

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
})->name('welcome');

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Auth::routes();

Route::resource('authors', App\Http\Controllers\AuthorController::class);
Route::resource('books', App\Http\Controllers\BookController::class);
Route::resource('borrowings', App\Http\Controllers\BorrowingController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('copies', App\Http\Controllers\CopyController::class);
Route::resource('externals', App\Http\Controllers\ExternalController::class);
Route::resource('fines', App\Http\Controllers\FineController::class);
Route::resource('logs', App\Http\Controllers\LogController::class);
Route::resource('members', App\Http\Controllers\MemberController::class);
Route::resource('methods', App\Http\Controllers\MethodController::class);
Route::resource('notifications', App\Http\Controllers\NotificationController::class);
Route::resource('payments', App\Http\Controllers\PaymentController::class);
Route::resource('publishers', App\Http\Controllers\PublisherController::class);
Route::resource('reservations', App\Http\Controllers\ReservationController::class);
Route::resource('resources', App\Http\Controllers\ResourceController::class);
Route::resource('types', App\Http\Controllers\TypeController::class);
Route::resource('waitings', App\Http\Controllers\WaitingController::class);