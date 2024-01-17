<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ExcelUpload;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
//Route::post('/register', [RegisterController::class, 'saveWithAjax'])->name('auth.registerAjax');
Route::get('/login', [LoginController::class, 'showLoginForm'])-> name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [LoginController::class, 'forgotpass'])->name('forgotpass');
Route::get('/reset-password', [LoginController::class, 'resetpass'])->name('resetpass');

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::patch('home', [HomeController::class, 'updatePassword']);
Route::get('/profile', [HomeController::class, 'profile']) -> name('user.profile');
Route::get('/table-{model}', [HomeController::class, 'tableajax'])->name('table');

Route::resource('/admin/products', AdminController::class)->except('show')-> names('admin.products');


Route::get('/', [ProductController::class, 'index']) -> name('index');
/* AJax tab */
Route::post('/get-subcategpries', [ProductController::class, 'getSubcategories'])->name('index.getsubcategories');
Route::get('/{product}', [ProductController::class, 'show']) -> name('product.show');
Route::get('/categories/{category}', [ProductController::class, 'productByCategory'])->name('product.category');
Route::get('/tag/{tag}', [ProductController::class, 'product.productByTag'])->name('product.tag');

/**test accès composant avec ajax */
Route::get('/traitement-upload-file-excel', [ExcelUpload::class, 'uploadTraitement'])->name('upload.exceltraitement');
Route::get('/uplaod_excel_page', [ExcelUpload::class, 'uploadPage'])->name('upload.uploadexcel');

