<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    //

    public function getUserTransactionsWithCategories($userId)
{
    $user = User::with(['transactions.categories_id'])->find($userId);

    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }

    return view('user.transactions', ['transactions' => $user->transactions]);
}
}