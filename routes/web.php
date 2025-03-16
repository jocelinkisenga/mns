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
Route::get('/products', [ProductController::class, 'index'])->name("client-products");
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/productDetails/{id}', [ProductController::class, 'show'])->name('client.productDetails');
Route::get('categories/{id}',[CategorieController::class,'show'])->name('client.categorie');


// Route::get('/test', [StripeTestController::class, 'index']);




Route::middleware('auth')->group(function () {

        Route::get("/profile", [ProfileController::class, "me"])->name("profile");
        Route::get('/cart', [CardController::class, 'index'])->name('client-cart');
        Route::get('/checkout', [CheckoutController::class, 'create'])->name('client-checkout');
        Route::post('checkout', [CheckoutController::class, 'store'])->name('store-order');
        Route::get('/invoce', [InvoceController::class, 'show'])->name('invoce-client');
        Route::get('EditProfile', [ProfileController::class, 'create'])->name('edit-profile');
        Route::put('/updateProfile', [ProfileController::class, 'update'])->name('update.profile');
//      Route::get('/checkoutHome', [CheckoutController::class, 'checkout_back'])->name("checkout-back");
        Route::get('/admindashboard',[HomeController::class,'index'])->name('admin.dashboard');
    Route::get('/commandes',[CommandeController::class,'index'])->name('admin-commandes');
    
    Route::get('/adminproducts',[ProductController::class,'index'])->name('admin.products');
    Route::post('/admin-store',[ProductController::class,'store'])->name('admin.products.store');
    Route::get('/adminProduct/{id}',[ProductController::class,'show'])->name('admin.productDetail');
    Route::put('updateProduct',[ProductController::class,'update'])->name('admin.updateProduct');
    Route::post('/updateQuantity',[ProductController::class,'update_quantity'])->name('admin.updateQuantity');
    Route::get('rapport', [RapportController::class, 'index'])->name('rapport');
    
    Route::get('/admincategories',[CategoryController::class,'index'])->name('admin.categories');
    Route::post('/categories',[CategoryController::class,'store'])->name('admin-categories');
    Route::get('/clients', [ClientController::class, 'index'])->name('admin.clients');
    Route::get('/client/{id}', [ClientController::class, 'show'])->name('admin.client.details');
    Route::get('/commandesDetails/{id}',[CommandeController::class,'update'])->name('admin-commandes-update');
    Route::post('rapportSearch', [RapportController::class, 'search'])->name('search');
    route::get('/deleteProduct/{id}', [ProductController::class, 'delete'])->name('admin.delete.product');
    Route::get('/deleteCategorie/{id}',[CategoryController::class,'delete'])->name('admin.delete.categorie');
    Route::get('/restoreCategorie/{id}',[CategoryController::class,'restore'])->name('admin.restore.categorie');
    route::get('/restoreProduct/{id}', [ProductController::class, 'restore'])->name('admin.restore.product');
    route::get('/destroyproduct/{id}', [ProductController::class, 'destroy'])->name('admin.destroy.product');

    Route::post('storeImage', [ProductController::class, 'add_image'])->name('add_image');

});
Route::get('/{id}',[OrderController::class,'index'])->middleware('auth')->name('myOrders');
require __DIR__ . "/auth.php";

