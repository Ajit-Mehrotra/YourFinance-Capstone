<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use App\Models\Debts;
use App\Models\Loans;
use App\Models\Payers;
use App\Models\Incomes;
use App\Models\Lenders;
use App\Models\Vendors;
use App\Models\Expenses;
use App\Models\Categories;
use App\Models\MiscAssets;
use App\Models\CreditCards;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use App\Models\Subscriptions;
use App\Models\LiquidAccounts;
use App\Models\TangibleAssets;
use Illuminate\Database\Seeder;
use App\Models\InvestmentAccounts;
use App\Models\RetirementAccounts;
use App\Models\Transactions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // DB::table('users')->insert([
        //     'first_name' => Str::random(10),
        //     'last_name' => Str::random(10),
        //     'email' => Str::random(10).'@example.com',
        //     'password' => Hash::make('password'),
        // ]);
        $addresses = Address::factory()->count(10)->create();
        $lenders = Lenders::factory()->count(3)->state(function (array $attributes) use ($addresses) {
            // Assign a random address to each lender
            return ['addresses_id' => $addresses->random()->id];
        })->create(); // --> currently, the debts are not connected to Lenders, but they technically should be according to the code. 
      
        $categories = Categories::factory()->count(10)->create();
        
        User::factory()
            ->count(50)
            ->state(function (array $attributes) use ($addresses) {
                // Assign a random address to each user
                return ['addresses_id' => $addresses->random()->id];
            })
            
            ->has(LiquidAccounts::factory()->count(3)
                ->has(Incomes::factory()->count(3)
                    ->has(Payers::factory()))
                ->has(Expenses::factory()->count(3)
                    -> has(Vendors::factory()->count(3)) // --> this is fucked. Creates 200+ different vendors & categories. Shouldn't the relationship be the otherway around?
                    ->state(function (array $attributes) use ($categories) {
                        // Assign a random category to each Expense
                        return ['categories_id' => $categories->random()->id];
                    })
                    -> has(Subscriptions::factory()->count(3))
                )
                )
            ->has(Transactions::factory()->count(25)
            ->state(function (array $attributes) use ($categories) {
                // Assign a random category to each Transaction
                return ['categories_id' => $categories->random()->id];
            })
            )
                    
            ->has(InvestmentAccounts::factory()->count(3))
            ->has(RetirementAccounts::factory()->count(3))
            ->has(TangibleAssets::factory()->count(3))
            ->has(MiscAssets::factory()->count(3))
            ->has(Debts::factory()->count(3)->state(function (array $attributes, User $user) use ($lenders) {
                // Assign a random lender to each debt
                return ['lenders_id' => $lenders->random()->id];
            }))
            ->has(Debts::factory()->count(3)->state(function (array $attributes, User $user) use ($lenders) {
                // Assign a random lender to each debt
                return ['lenders_id' => $lenders->random()->id];
            })
                ->has(CreditCards::factory())
            )
            ->has(Debts::factory()->count(3)->state(function (array $attributes, User $user) use ($lenders) {
                // Assign a random lender to each debt
                return ['lenders_id' => $lenders->random()->id];
            })
                ->has(Loans::factory())
            )
            ->create();

       
          
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}