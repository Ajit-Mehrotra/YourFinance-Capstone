<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
    </style>
</head>

<body class="antialiased">
    <div
        class="relative p-6  min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-green-500 selection:text-white">
        @if (Route::has('login'))


            <nav class="md:flex md:justify-between md:items-center">
                <div>
                    <a href="/">
                        <img src="./images/md-logo.svg" alt="Laracasts Logo" width="165" height="16">
                    </a>
                </div>

                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="transition-colors duration-300  hover:bg-gray-800  bg-green-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">My
                        Dashboard</a>
                @else
                    <div class="mt-8 md:mt-0">
                        <a href="{{ route('login') }}" class="text-xs font-bold uppercase">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="transition-colors duration-300  hover:bg-gray-800  bg-green-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Register</a>
                        @endif


                    </div>
                @endauth
            </nav>



        @endif




        {{ $slot }}

    </div>

</body>







<footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
    <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
    <h5 class="text-3xl">Stay in touch with the latest posts</h5>
    <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

    <div class="mt-10">
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

            <form method="POST" action="#" class="lg:flex text-sm">
                <div class="lg:py-3 lg:px-5 flex items-center">
                    <label for="email" class="hidden lg:inline-block">
                        <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                    </label>`
                    <input id="email" type="text" placeholder="Your email address"
                        class="lg:bg-transparent border-none border-0 py-2 lg:py-0 pl-4">
                </div>

                <button type="submit"
                    class="transition-colors duration-300  bg-green-500 hover:bg-green-600 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</footer>

</html>
