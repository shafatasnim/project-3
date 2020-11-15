 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
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
    return view('welcome');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);

Route::get('produk', [ProdukController::class, 'index']);

Route::get('produk/create', [ProdukController::class, 'create']);

Route::get('kategori', [HomeController::class, 'showKategori']);

Route::get('login', [HomeController::class, 'showLogin']);

Route::get('promo', [HomeController::class, 'showPromo']);

Route::get('template.base', [HomeController::class, 'showTemplate']);


