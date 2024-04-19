<?php

use App\Models\User;
use App\Models\Categories;
use App\Models\Transactions;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PlaidController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalendarController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/chat', [ChatController::class, 'chat']);

Route::get('/chat', function () {
    return view('chat');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




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


Route::get('/dashboard', function () {
    $user = auth()->user(); 
    $user_id = $user->id;
    
    $categories = Categories::with(['transactions'])->get();
    
    $transactions = Transactions::with('category')->where('user_id', $user_id)->get();
  
   
    return view('dashboard', ['user' => $user, 'liquidAccounts' => $user->liquidAccounts, 
    'investmentAccounts' => $user->investmentAccounts, 'transactions' => $transactions, 
    'retirementAccounts' => $user->retirementAccounts, 'miscAssets' => $user->miscAssets, 'tangibleAssets' => $user->tangibleAssets, 'categories'=> $categories]);
})->middleware(['auth', 'verified'])->name('dashboard');



// Route::get('/dashboard_test', function () {

//     $user = auth()->user(); 
//     $user_id = $user->id;
    
//     $transactions = Transactions::with('category')->where('user_id', $user_id)->get();


//     return view('dashboard_test', ['user' => $user,'transactions' => $transactions,]);
// });

Route::get('/dashboard_test', [CalendarController::class, 'showCalendar']);

Route::get('/improve', function () {
    return view('improve');
});


Route::get('/createLinkToken', [PlaidController::class, 'createLinkToken']);
Route::post('/storePlaidAccount', [PlaidController::class, 'storePlaidAccount']);
Route::post('/getInvestmentHoldings', [PlaidController::class, 'getInvestmentHoldings']);


Route::get('/plaid', function () {
    return view('plaid');
});


require __DIR__.'/auth.php';