<?php

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/chat', [ChatController::class, 'chat']);

Route::get('/chat', function () {
    return view('chat');
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


Route::get('/users', function () {
    
    $users = cache()->remember('users', now()->addSeconds(5), function () {
        Log::info('Retrieving users');
        return User::all();
    });
    
    return view('users',[
        'users' => $users
    ]);
});

Route::get('/users/{user}', function ($id) {
   
    $user = cache()->remember("users.{$id}", now()->addSeconds(5), function () use ($id) {
        Log::info('Showing the user profile for user: {id}', ['id' => $id]);
        $temp_user = User::find($id);
        return ['user' => $temp_user, 'liquidAccounts' => $temp_user->liquidAccounts, 'investmentAccounts' => $temp_user->investmentAccounts,];
    });
    
    return view('user', $user);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard_test', function () {
    return view('dashboard_test');
});

Route::get('/improve', function () {
    return view('improve');
});


require __DIR__.'/auth.php';