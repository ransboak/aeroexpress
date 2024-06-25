<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShipmentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('home') ;
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('aboutUs') ;
Route::get('/services', [PageController::class, 'services'])->name('services') ;
Route::get('/track', [PageController::class, 'track'])->name('track') ;
Route::get('/blog', [PageController::class, 'blog'])->name('blog') ;
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contactUs') ;
Route::get('/request-quote', [PageController::class, 'requestQuote'])->name('requestQuote') ;

Route::post('addShipment', [ShipmentController::class, 'addShipment'])->name('shipments.store');
Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/shipments', [PageController::class, 'shipments'])->name('shipments');
    Route::get('/packages', [PageController::class, 'packages'])->name('packages');
    Route::get('invoice', [PageController::class, 'invoice'])->name('invoice');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
