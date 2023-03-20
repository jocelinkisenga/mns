<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Client\CategorieController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\CardController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\InvoceController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\StripeTestController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/topProducts', [App\Http\Controllers\Client\ProductController::class, 'top_products'])->name('top.products');
Route::get('/plusVendus', [App\Http\Controllers\Client\ProductController::class, 'most_sell'])->name('most.products');

Route::get('/products', [ProductController::class, 'index'])->name("client-products");
Route::get('/products/{id}', [ProductController::class, 'index'])->name("client-products.paginate");
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post("/products/filter", [ProductController::class, 'filter'])->name('product.filter');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/productDetails/{id}', [ProductController::class, 'show'])->name('client.productDetails');
Route::get('categories/{id}',[CategorieController::class,'show'])->name('client.categorie');
Route::get('/admin/corbeille', [App\Http\Controllers\Admin\HomeController::class, 'corbeille'])->name('admin.corbeille');

// Route::get('/test', [StripeTestController::class, 'index']);


require __DIR__ . "/Admin.php";

Route::middleware('auth')->group(function () {

        Route::get("/profile", [ProfileController::class, "me"])->name("profile");
        Route::get('/cart', [CardController::class, 'index'])->name('client-cart');
        Route::get('/checkout', [CheckoutController::class, 'create'])->name('client-checkout');
        Route::post('checkout', [CheckoutController::class, 'store'])->name('store-order');
        Route::get('/invoce', [InvoceController::class, 'show'])->name('invoce-client');
        Route::get('EditProfile', [ProfileController::class, 'create'])->name('edit-profile');
        Route::put('/updateProfile', [ProfileController::class, 'update'])->name('update.profile');
//      Route::get('/checkoutHome', [CheckoutController::class, 'checkout_back'])->name("checkout-back");

});

require __DIR__ . "/auth.php";
Route::get('/{id}',[OrderController::class,'index'])->middleware('auth')->name('myOrders');
