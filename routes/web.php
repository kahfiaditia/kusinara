<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\KKategoriController;
use App\Http\Controllers\KUtamaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\TeamController;
use App\Models\BlogModel;

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

Route::get('/', [FrontEndController::class, 'index'])->name('index');
Route::get('/utama', [KUtamaController::class, 'index'])->name('utama');
Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');
Route::get('/blogs', [FrontEndController::class, 'blogs'])->name('blogs');
Route::get('/blog/{id}', [FrontEndController::class, 'blog'])->name('blog');
Route::get('/galery/{id}', [FrontEndController::class, 'galery'])->name('galery');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');

Route::get('/login', function () {
    return view('admin.login.login');
})->name('login');

Route::group(
    [
        'prefix'     => 'login'
    ],
    function () {
        Route::post('/proses', [LoginController::class, 'authenticate'])->name('login.proses');
        Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
    }
);

Route::group(
    [
        'prefix'     => 'admin',
        'middleware' => 'auth'
    ],
    function () {
        Route::resource('/akun', AkunController::class);
        Route::get('/profile/{id}', [AkunController::class, 'profile'])->name('akun.profile');
        Route::resource('/slider', SlidersController::class);
        Route::resource('/about', AboutUsController::class);
        Route::resource('/contact_us', ContactUsController::class);
        Route::resource('/blog', BlogController::class);
        Route::resource('/galery', GaleryController::class);
        Route::resource('/setting', SettingController::class);
        Route::resource('/member', MemberController::class);
        Route::resource('/kategori', KKategoriController::class);
        Route::resource('/pendidikan', PendidikanController::class);
    }
);
