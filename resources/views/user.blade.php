<x-layout>
    <x-slot name="slot">
        <div class="sm:flex sm:justify-center sm:items-center">
            <div>
                <h1 class="font-bold text-xl underline">User ID: {{ $user->id }} </h1>
                <h1 href = "/user" class="">{{ 'Name: ' . $user->first_name . ' ' . $user->last_name }}</h1>
                <h1 class="">{{ 'Email: ' . $user->email }}</h1>
                <h1 class="font-bold  text-xl underline">Liquid Accounts</h1>
                @foreach ($liquidAccounts as $field)
                    <p class="">{{ 'Bank Name: ' . $field->bank_name }}</p>
                    <p class="">{{ 'Account Type: ' . $field->account_type }}</p>
                    <br>
                @endforeach

                <h1 class="font-bold text-xl underline">Investment Accounts</h1>

                {{-- @foreach ($investmentAccounts as $account)
                <h1 class="font-bold text-xl underline">{{ $account }}</h1>
            @endforeach --}}

                @foreach ($investmentAccounts as $account)
                    <p class="">{{ 'Platform Name: ' . $account->platform_name }}</p>
                    <p class="">{{ 'Investment Type: ' . $account->investment_type }}</p>
                    <br>
                @endforeach

                <br>
                <a href="/users" class="font-bold">Go Back</a>
            </div>

        </div>


    </x-slot>
</x-layout>
