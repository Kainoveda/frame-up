
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\API\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('home');
});

Route::get('/explore', function () {
    return view('explore');
});

Route::get('/artists', function () {
    return view('artists');

});

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register.store');




Route::get('/user/{user_id}', [AuthController::class, 'user']);


Route::get('/jobs', [JobController::class, 'index']);
Route::post('/jobs', [JobController::class, 'store']);

Route::get('/upload', function () {
    return view('upload'); // The form view
})->name('upload.index');

// Route::get('/images', function () {
//     return view('images.index', ['images' => \App\Models\Image::all()]);
// })->name('images.index');

// Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::post('/upload', [ImageController::class, 'store'])->name('upload.store');