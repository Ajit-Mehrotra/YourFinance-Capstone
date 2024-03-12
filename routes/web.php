<?php

use App\Models\User;
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