<?php

namespace App\Http\Controllers;


use App\Models\Transactions;
use Illuminate\Support\Carbon;




class CalendarController extends Controller
{
    public function showCalendar()
    {
        $transactions = Transactions::select(['date', 'name', 'amount', 'type', 'status'])->get();

        $today = Carbon::today();
        $events = $transactions->map(function ($transaction) use ($today) {
            // Format the date to JavaScript Date object initialization format
            $date = Carbon::createFromFormat('Y-m-d', $transaction->date);
            $month = $date->month - 1; // JavaScript months are 0-indexed
            $day = $date->day;
            $year = $date->year;
    
            $event_title = ($transaction->type == 'income' ? '+' : '-') . '$' . number_format($transaction->amount,0) . ' ' . $transaction->name;
    
            // Determine the event theme based on transaction type and date
            $event_theme = 'purple'; // Default to gray if the date is in the future
            if ($date->isPast() || $date->isToday()) {
                $event_theme = $transaction->type == 'cost' ? 'red' : 'green';
            }
    
            return [
                'event_date' => $date,
                'event_title' => $event_title,
                'event_theme' => $event_theme
            ];
        });
        
        $user = auth()->user(); 
        $user_id = $user->id;
       
        $transactions = Transactions::with('category')->where('user_id', $user_id) ->orderBy('date', 'asc')->paginate(10);

        $transactionCount =  Transactions::with('category')->where('user_id', $user_id)->count();


        $categories = Transactions::with('category')->where('user_id', $user_id)->selectRaw('categories_id, COUNT(*) as total')
                ->groupBy('categories_id')
                ->orderBy('total', 'desc')
                ->get();

        
        return view('dashboard_test', ['events' => $events, 'transactions' => $transactions, 'categories' => $categories, 'user' => $user, 'transactionCount' => $transactionCount, ]);
    }
}