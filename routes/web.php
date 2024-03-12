<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "Hello World";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function () {
    return view('users',[
        'users' => User::all()
    ]);
});

Route::get('/users/{user}', function ($id) {
   
    return view('user',[
        'user' =>  User::find($id),
        'liquidAccounts' => User::find($id)->liquidAccounts,
        'investmentAccounts' => User::find($id)->investmentAccounts,
        
    ]);
});

Route::get('/users', function () {
    return view('users',[
        'users' => User::all()
    ]);
});



require __DIR__.'/auth.php';