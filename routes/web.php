<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnswerController;
use App\Models\Answer;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use League\Csv\Reader;

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

Route::get('/', function () {
    return view('top');
});

Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'adminLogout'])->name('admin.logout');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth:admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/class/{id}', [AdminController::class, 'class'])->name('class');
    Route::get('/club/{id}', [AdminController::class, 'club'])->name('club');
    Route::get('/students/{id}', [AdminController::class, 'student'])->name('student');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/mypage', [AnswerController::class, 'mypage'])->name('index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('form', function () {
    $today = Carbon::today()->toDateString();
    return redirect("https://docs.google.com/forms/d/e/1FAIpQLSeTrkcmNjYMYZUqfw5suWYJn-9r3Y9nwVVqEx-Ez3bd3chCZQ/viewform?usp=pp_url&entry.501475986=$today");
});
