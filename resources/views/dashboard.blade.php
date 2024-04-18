<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>


                <div class="sm:flex mx-auto sm:px-6 lg:px-8 sm:items-center">
                    <div>
                        <h1 class="font-bold text-xl underline">Account Info: </h1>
                        <h1>User ID: {{ $user->id }}</h1>
                        <h1 class="">{{ 'Name: ' . $user->first_name . ' ' . $user->last_name }}</h1>
                        <h1 class="">{{ 'Email: ' . $user->email }}</h1>
                        <br>

                        <h1 class="font-bold  text-xl underline">Liquid Accounts</h1>
                        @foreach ($liquidAccounts as $field)
                            <p class="">{{ 'Bank Name: ' . $field->bank_name }}</p>
                            <p class="">{{ 'Account Type: ' . $field->account_type }}</p>
                            <p class="">{{ 'Account Number: ' . $field->account_number }}</p>
                            <p class="">{{ 'Balance: $' . number_format($field->balance, 2) }}</p>
                            <br>
                        @endforeach

                        <h1 class="font-bold text-xl underline">Investment Accounts</h1>

                        {{-- @foreach ($investmentAccounts as $account)
                        <h1 class="font-bold text-xl underline">{{ $account }}</h1>
                    @endforeach --}}

                        @foreach ($investmentAccounts as $account)
                            <p class="">{{ 'Platform Name: ' . $account->platform_name }}</p>
                            <p class="">{{ 'Investment Type: ' . $account->investment_type }}</p>
                            <p class="">
                                {{ 'Initial Investment: $' . number_format($account->initial_investment, 2) }}
                            </p>
                            <p class="">
                                {{ 'Quantity Bought: ' . number_format($account->quantity, 0) }}
                            </p>
                            <p class="">
                                {{ 'Current Value: $' . number_format($account->current_value, 2) }}
                            </p>
                            <br>
                        @endforeach


                        <h1 class="font-bold text-xl underline">Retirement Assets</h1>

                        @foreach ($retirementAccounts as $account)
                            <p class="">{{ 'Platform Name: ' . $account->platform_name }}</p>
                            <p class="">{{ 'Retirement Type: ' . $account->retirement_type }}</p>
                            <p class="">
                                {{ 'Initial Investment: $' . number_format($account->initial_investment, 2) }}
                            </p>
                            <p class="">
                                {{ 'Quantity Bought: ' . number_format($account->quantity, 0) }}
                            </p>
                            <p class="">
                                {{ 'Current Value: $' . number_format($account->current_value, 2) }}
                            </p>
                            <br>
                        @endforeach



                        <h1 class="font-bold text-xl underline">Tangible Assets</h1>

                        @foreach ($tangibleAssets as $asset)
                            <p class="">{{ 'Name: ' . $asset->tangible_name }}</p>
                            <p class="">{{ 'Type: ' . $asset->tangible_type }}</p>
                            <p class="">
                                {{ 'Initial Investment: $' . number_format($asset->initial_investment, 2) }}
                            </p>
                            <p class="">
                                {{ 'Quantity Bought: ' . number_format($asset->quantity, 0) }}
                            </p>
                            <p class="">
                                {{ 'Current Value: $' . number_format($asset->current_value, 2) }}
                            </p>
                            <br>
                        @endforeach


                        <h1 class="font-bold text-xl underline">Miscellaneous Assets</h1>
                        @foreach ($miscAssets as $asset)
                            <p class="">{{ 'Name: ' . $asset->misc_asset_name }}</p>
                            <p class="">{{ 'Type: ' . $asset->misc_asset_type }}</p>
                            <p class="">
                                {{ 'Initial Investment: $' . number_format($asset->initial_investment, 2) }}
                            </p>
                            <p class="">
                                {{ 'Quantity Bought: ' . number_format($asset->quantity, 0) }}
                            </p>
                            <p class="">
                                {{ 'Current Value: $' . number_format($asset->current_value, 2) }}
                            </p>
                            <br>
                        @endforeach

                        <h1 class="font-bold text-xl underline">Categories</h1>
                        @foreach ($categories as $category)
                            <p class="">{{ 'Category ID: ' . $category->id }}</p>
                            <p class="">{{ 'Category Name: ' . $category->category_name }}</p>
                            <p class="">{{ 'Category Description: ' . $category->category_description }}</p>

                            <br>
                        @endforeach






                        <h1 class="font-bold text-xl underline">Transactions</h1>
                        @foreach ($transactions as $transaction)
                            <p class="">{{ 'Date: ' . $transaction->date }}</p>
                            <p class="">{{ 'Category ID: ' . $transaction->category->category_name }}</p>
                            <p class="">{{ 'Amount: $' . $transaction->amount }}</p>
                            <p class="">{{ 'Type: ' . $transaction->type }}</p>
                            <p class="">{{ 'Status: ' . $transaction->status }}</p>

                            <br>
                        @endforeach

                        <h1 class="font-bold text-xl underline">Debts</h1>
                        @foreach ($user->debts as $debt)
                            <p class="">{{ 'Name: ' . $debt->debt_name }}</p>

                            @if ($debt->loan)
                                <p class="">{{ 'Loan Name: ' . $debt->loan->loan_name }}</p>
                                <p class="">{{ 'Loan Type: ' . $debt->loan->loan_type }}</p>
                            @endif
                            @if ($debt->creditCard)
                                <p class="">{{ 'Credit Card Name: ' . $debt->creditCard->card_name }}</p>
                                <p class="">{{ 'Credit Card Type: ' . $debt->creditCard->card_type }}</p>
                            @endif



                            <p class="">{{ 'Date : ' . $debt->date_received }}</p>
                            <p class="">{{ 'Principle: $' . number_format($debt->principle, 2) }}</p>
                            <p class="">{{ 'Balance: $' . number_format($debt->balance, 2) }}</p>
                            <p class="">{{ 'Payment Frequency: ' . $debt->pmt_frequency }}</p>
                            <p class="">
                                {{ 'Recurring Payment Amount: $' . number_format($debt->recurring_pmt_amt, 2) }}
                            </p>
                            <p class="">{{ 'Interest: ' . $debt->apr_interest }}</p>
                            <p class="">
                                {{ 'Days Payment Deferred: ' . number_format($debt->days_pmt_deferred, 0) }}</p>
                            <br>
                        @endforeach


                        <br>
                        <a href="/users" class="font-bold">Go Back</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
