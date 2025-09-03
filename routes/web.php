<?php

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

Route::get('/', function () {
    return view('home');
});

//dashboard admin//

Route::get('/admin/dashboard', function () {
    return view('dashboard.admin');
})->name('admin.dashboard');


Route::get('/', function () {
    return view('home'); // file: resources/views/home.blade.php
})->name('home');

// Dashboard Penilai
Route::get('/penilai/dashboard', [PenilaiController::class, 'index'])->name('penilai.dashboard');

Route::get('/penilai/dashboard', function () {
    return view('dashboard.penilai');
})->name('penilai.dashboard');

//fom LKE//
Route::get('/penilai/lke-form', function () {
    return view('penilai.lke-form');
})->name('penilai.lke.form');

//form penilai //
Route::get('/form-penilai', function () {
    return view('penilai.form-penilai');
})->name('penilai.form');


// login //

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Auth Routes (Closure)
|--------------------------------------------------------------------------
*/

// Tampilkan form login
Route::view('/login', 'auth.login')
    ->name('login')
    ->middleware('guest');

// Proses login
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email'    => ['required', 'email'],
        'password' => ['required'],
    ]);

    $remember = $request->boolean('remember');

    if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();
        return redirect()->intended(route('dashboard'));
    }

    return back()
        ->withErrors(['email' => 'Kredensial tidak cocok.'])
        ->onlyInput('email');
})->name('login.post')->middleware('guest');

// Logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
})->name('logout')->middleware('auth');

// Contoh halaman setelah login
Route::get('/dashboard', function () {
    return 'Halo, ini dashboard.';
})->middleware('auth')->name('dashboard');

// Opsional: arahkan root ke login
//Route::redirect('/', '/login'); //