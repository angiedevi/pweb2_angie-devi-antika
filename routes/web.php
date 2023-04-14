<?php

use App\Http\Controllers\EtalaseController;
use App\Http\Controllers\ProfileController;
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

// masuk pertamakali mendarat kemana, defaultnya ke "welcome", nah ini aku maw langsung ke login
// Route::get('/edit', function () {
//     return view('editetalase'); //auth titik login karena loginnya di folder auth
// });
Route::get('/', function () {
    return redirect('/login'); //auth titik login karena loginnya di folder auth
});



// buat ngelink
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/tambahetalase', function () {
//     return view('tambahetalase'); //ga selalu return view tergantung path filenya dimana, namanya sesuai sama nama file
// })->middleware(['auth', 'verified'])->name('tambahetalase');

// Route::get('/')

// Route::get('/kelolaetalase', function () {
//     return view('kelolaetalase');
// })->middleware(['auth', 'verified'])->name('kelolaetalase');

// Route::get('/lihatetalase', function () {
//     return view('lihatetalase');
// })->middleware(['auth', 'verified'])->name('lihatetalase');

// Route::get('/editetalase', function () {
//     return view('editetalase');
// })->middleware(['auth', 'verified'])->name('editetalase');

Route::get('/dashboard', [EtalaseController::class, 'dashboard'])->name('dashboard');
Route::get('/etalase', [EtalaseController::class, 'index'])->name('index');
Route::get('/etalase/create', [EtalaseController::class, 'create'])->name('create');
Route::post('/etalase/store', [EtalaseController::class, 'store'])->name('store');
Route::get('/etalase/edit', [EtalaseController::class, 'edit'])->name('edit');
Route::delete('/etalase/{id}', [EtalaseController::class, 'destroy'])->name('hapus');
Route::get('/etalase/{id}/edit', [EtalaseController::class, 'view_edit'])->name('view.edit');
Route::post('/etalase/{id}/edit', [EtalaseController::class, 'update'])->name('update');


//middleware auth biar gabisa balik, misal dari dashboard biar gabisa balik ke login lewat alamat dia search enginee
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
