<x-layout>
    <x-slot name="slot">

        <div class="sm:flex sm:justify-center sm:items-center max-w-7xl mx-auto lg:p-11">
            <div class="flex-col">
                @foreach ($users as $user)
                    <a href="/users/{{ $user->id }}" class="font-bold underline">
                        <h1>{{ $user->first_name . ' ' . $user->last_name }}</h1>
                    </a>
                @endforeach
            </div>
        </div>




    </x-slot>
</x-layout>
