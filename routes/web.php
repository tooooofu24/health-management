<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;
use App\Models\Answer;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

// Route::middleware(['guest', 'guest:admin'])->get('/', function () {
//     return view('top');
// })->name('top');

Route::get('/', function () {
    return view('top');
})->name('top');

Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'adminLogout'])->name('admin.logout');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth:admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/classes/{id}', [AdminController::class, 'class'])->name('class');
    Route::get('/clubs/{id}', [AdminController::class, 'club'])->name('club');
    // student
    Route::get('/students/{id}', [AdminController::class, 'student'])->name('student');
    Route::post('students', [StudentController::class, 'store'])->name('students.store');
    Route::put('students/{id}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/mypage', [AnswerController::class, 'mypage'])->name('index');
});

Route::group(['as' => 'form.', 'prefix' => 'form'], function () {
    Route::get('/1', [FormController::class, 'showPageOne'])->name('show.1');
    Route::post('/2', [FormController::class, 'showPageTwo'])->name('show.2');
    Route::post('/3', [FormController::class, 'showPageThree'])->name('show.3');
    Route::post('/4', [FormController::class, 'showPageFour'])->name('show.4');
    Route::post('/store', [FormController::class, 'store'])->name('store');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
