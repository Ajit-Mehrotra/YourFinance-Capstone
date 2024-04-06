@php
    $features = [
        [
            'title' => 'Digestible and Actionable Insights',
            'description' =>
                "Build your site using React, Svelte, Vue, Preact, web components, or just plain ol' HTML + JavaScript.",
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>',
        ],
        [
            'title' => 'Accurate Expense Forecasting',
            'description' =>
                'Astro renders your entire page to static HTML, removing all JavaScript from your final build by default.',
            'icon' => 'bx:bxs-window-alt',
        ],
        [
            'title' => 'Real-Time Economic Adaptation',
            'description' =>
                'Need some JS? Astro can automatically hydrate interactive components when they become visible on the page.',
            'icon' => 'bx:bxs-data',
        ],
        [
            'title' => 'Tailored & Flexible Goal Setting',
            'description' =>
                'Astro supports TypeScript, Scoped CSS, CSS Modules, Sass, Tailwind, Markdown, MDX, and any other npm packages.',
            'icon' => 'bx:bxs-bot',
        ],
        [
            'title' => 'Automated Budget & Savings',
            'description' =>
                'Automatic sitemaps, RSS feeds, pagination and collections take the pain out of SEO and syndication. It just works!',
            'icon' => 'bx:bxs-file-find',
        ],
        [
            'title' => 'Community',
            'description' =>
                'Astro is an open source project powered by hundreds of contributors making thousands of individual contributions.',
            'icon' => 'bx:bxs-user',
        ],
    ];
@endphp

<x-layout>
    <x-slot name="slot">

        {{-- Hero Section --}}

        <div class="flex flex-col justify-center h-full py-12 ">
            <div class="self-center items-center flex flex-col sm:flex-row w-full md:w-2/3 xl:w-2/3 px-4 sm:px-0">
                <div class="w-full text-center sm:text-left sm:w-3/4 py-12 sm:px-8">
                    <h1 class="tracking-wide text-green-600 text-2xl mb-6">
                        A New Thing: <span class="text-gray-800 font-bold tracking tracking-widest">financial
                            freedom</span>
                    </h1>
                    <h2 class="font-bold tracking-widest text-4xl">
                        spend wisely by...
                    </h2>
                    <span class="content__container block font-light text-browngray text-2xl my-6">
                        <ul class="content__container__list">
                            <li class="content__container__list__item xl:pl-3">Staying Ahead of Expenses</li>
                            <li class="content__container__list__item xl:pl-3">Adapting to the Economy</li>
                            <li class="content__container__list__item xl:pl-3">Reducing Overspending</li>
                            <li class="content__container__list__item xl:pl-3">Getting Better Insights</li>
                            <li class="content__container__list__item xl:pl-3">Setting Financial Automations</li>
                            <li class="content__container__list__item xl:pl-3">Constructing Effective Goals</li>
                            <li class="content__container__list__item xl:pl-3">An App that Changes with You</li>
                        </ul>
                    </span>
                    <p class="font-bold tracking-widest text-4xl">...think about it!</p>

                    <div class="flex flex-row w-full justify-center pt-12">
                        <a class="px-10 py-2 text-white bg-green-600 rounded-full shadow-md text-lg hover:bg-gray-800 duration-300 ease-in-out"
                            href="https://forms.gle/ee2CdxmbzeGuhtw97" target="_blank">
                            Join the Waitlist
                        </a>
                    </div>


                    <p class="text-sm text-center pt-4 ">AND</p>

                    <a href="#features" class="text-sm flex justify-center pt-4">
                        <span class="link bg-gray-200 text-black transition duration-300 hover:bg-green-200 px-1 t">See
                            how we do it.</span>
                    </a>




                </div>
                <div class="relative w-full  sm:w-1/2 ml-10 flex justify-center">
                    {{-- <img class="rounded-2xl shadow-xl" src="./images/asian.jpg" alt="AWE.SOME header"> --}}

                    <!-- Start of the responsive layered images -->

                    <!-- Background images with responsive adjustments -->
                    {{-- <img class="rounded-2xl shadow-xl absolute sm:-right-20 sm: top-20 w-3/4 sm:blur-lg sm:scale-105"
                         src="./images/asian.jpg" alt="Background image 1" style="z-index: 4;">
                     <img class="rounded-2xl shadow-xl absolute sm:-right-40 sm:-bottom-4 w-3/4 sm:blur-lg sm:scale-105"
                         src="./images/asian.jpg" alt="Background image 2" style="z-index: 3;"> --}}

                    <img class="rounded-2xl shadow-xl absolute sm:-left-4  sm:-top-4 w-3/4 sm:blur-lg sm:scale-105"
                        src="./images/asian.jpg" alt="Background image 1" style="z-index: 4;">
                    <img class="rounded-2xl shadow-xl absolute sm:-right-4 sm:-bottom-4 w-3/4 sm:blur-lg sm:scale-105"
                        src="./images/asian.jpg" alt="Background image 2" style="z-index: 3;">

                    <!-- Foreground image -->
                    <img class="rounded-2xl shadow-xl relative z-10 w-5/6 sm:w-full" src="./images/asian.jpg"
                        alt="AWE.SOME header">

                    <!-- End of the responsive layered images -->
                </div>
            </div>
        </div>



        </div>


        </section>


        </div>
        <div class="flex justify-center ">
            {{-- min-h-screen w-3/4 flex flex-col justify-center  bg-slate-50 --}}
            <section class="relative min-h-screen w-3/4 flex flex-col justify-center   overflow-hidden">
                <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
                    <div class="flex flex-col justify-center ">

                        <div class="w-full max-w-3xl mx-auto">

                            <div class="text-center m-16 md:mt-0">
                                <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
                                    Get your sh*t together in less than <span class="underline">1 hour</span>
                                </h2>

                                <p class="text-lg mt-4 text-slate-600">
                                    Modern tech + your finances = better managed finances
                                    <br>
                                    <br>Our personal finance copilot adapts to the economy and your financial
                                    circumstances to help you manage your finances


                                </p>
                            </div>
                            <!-- Start: Vertical Timeline #2 -->

                            <div class="w-full max-w-3xl mx-auto">


                                <!-- Vertical Timeline #1 -->
                                <div class="-my-6">

                                    <!-- Item #1 -->
                                    <div class="relative pl-8 sm:pl-32 py-6 group">
                                        <!-- Purple label -->
                                        <div class=" font-medium text-2xl text-green-500 mb-1 sm:mb-0">collect
                                        </div>
                                        <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
                                        <div
                                            class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-green-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                            <p
                                                class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">
                                                30 min</p>
                                            <div class="text-xl font-bold text-slate-900">Centralize your money
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra
                                            pharetra
                                            massa
                                            massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus
                                            risus.
                                        </div>
                                    </div>

                                    <!-- Item #2 -->
                                    <div class="relative pl-8 sm:pl-32 py-6 group">
                                        <!-- Purple label -->
                                        <div class="font-medium text-2xl text-green-500 mb-1 sm:mb-0">understand
                                        </div>
                                        <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
                                        <div
                                            class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-green-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                            <p
                                                class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">
                                                10 min</p>
                                            <div class="text-xl font-bold text-slate-900">Economic/financial analytics
                                                &
                                                predictions
                                            </div>
                                        </div>
                                        <!-- Content -->
                                        <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra
                                            pharetra
                                            massa
                                            massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus
                                            risus.
                                        </div>
                                    </div>

                                    <!-- Item #3 -->
                                    <div class="relative pl-8 sm:pl-32 py-6 group">
                                        <!-- Purple label -->
                                        <div class=" font-medium text-2xl text-green-500 mb-1 sm:mb-0">execute
                                        </div>
                                        <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
                                        <div
                                            class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-green-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                            <p
                                                class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">
                                                15 min</p>
                                            <div class="text-xl font-bold text-slate-900">Insights & predictions based
                                                on
                                                your finances</div>
                                        </div>
                                        <!-- Content -->
                                        <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra
                                            pharetra
                                            massa
                                            massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus
                                            risus.
                                        </div>
                                    </div>

                                    <!-- Item #4 -->
                                    <div class="relative pl-8 sm:pl-32 py-6 group">
                                        <!-- Purple label -->
                                        <div class=" font-medium text-2xl text-green-500 mb-1 sm:mb-0">adapt

                                        </div>
                                        <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
                                        <div
                                            class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-green-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                            <p
                                                class="sm:absolute left-0 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-20 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">
                                                10 min</p>
                                            <div class="text-xl font-bold text-slate-900">Change as your situation &
                                                the
                                                economy changes</div>
                                        </div>
                                        <!-- Content -->
                                        <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra
                                            pharetra
                                            massa
                                            massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus
                                            risus.
                                        </div>
                                    </div>

                                </div>
                                <!-- End: Vertical Timeline #1 -->


                            </div>

                            <div class="flex justify-center p-12 ">
                                <hr class="rounded w-3/4 ">
                            </div>

                            <!-- Vertical Timeline #1 -->
                            <div class="-my-6">
                                <div class="text-center m-16 md:mt-0">
                                    <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
                                        <span class="underline">Understand</span> your finances
                                    </h2>
                                    <p class="text-lg mt-4 text-slate-600">
                                        Astro comes batteries included. It takes the best parts of state-of-the-art
                                        tools and adds its own innovations.
                                    </p>
                                </div>
                                <!-- Item #1 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <!-- Purple label -->
                                    <div class=" font-medium text-2xl text-green-500 mb-1 sm:mb-0">first we help you
                                    </div>
                                    <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
                                    <div
                                        class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-green-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <p
                                            class="sm:absolute -left-2 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-24 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">
                                            Collect</p>
                                        <div class="text-xl font-bold text-slate-900">Centralize your money
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra pharetra
                                        massa
                                        massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus risus.
                                    </div>
                                </div>

                                <!-- Item #2 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <!-- Purple label -->
                                    <div class="font-medium text-2xl text-green-500 mb-1 sm:mb-0">then we provide
                                    </div>
                                    <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
                                    <div
                                        class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-green-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <p
                                            class="sm:absolute -left-2 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-24 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">
                                            understand</p>
                                        <div class="text-xl font-bold text-slate-900">Economic/financial analytics &
                                            predictions
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra pharetra
                                        massa
                                        massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus risus.
                                    </div>
                                </div>

                                <!-- Item #3 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <!-- Purple label -->
                                    <div class=" font-medium text-2xl text-green-500 mb-1 sm:mb-0">next we give
                                    </div>
                                    <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
                                    <div
                                        class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-green-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <p
                                            class="sm:absolute -left-2 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-24 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">
                                            execute</p>
                                        <div class="text-xl font-bold text-slate-900">Insights & predictions based on
                                            your finances</div>
                                    </div>
                                    <!-- Content -->
                                    <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra pharetra
                                        massa
                                        massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus risus.
                                    </div>
                                </div>

                                <!-- Item #4 -->
                                <div class="relative pl-8 sm:pl-32 py-6 group">
                                    <!-- Purple label -->
                                    <div class=" font-medium text-2xl text-green-500 mb-1 sm:mb-0">and we help you

                                    </div>
                                    <!-- Vertical line (::before) ~ Date ~ Title ~ Circle marker (::after) -->
                                    <div
                                        class="flex flex-col sm:flex-row items-start mb-1 group-last:before:hidden before:absolute before:left-2 sm:before:left-0 before:h-full before:px-px before:bg-slate-300 sm:before:ml-[6.5rem] before:self-start before:-translate-x-1/2 before:translate-y-3 after:absolute after:left-2 sm:after:left-0 after:w-2 after:h-2 after:bg-green-600 after:border-4 after:box-content after:border-slate-50 after:rounded-full sm:after:ml-[6.5rem] after:-translate-x-1/2 after:translate-y-1.5">
                                        <p
                                            class="sm:absolute -left-2 translate-y-0.5 inline-flex items-center justify-center text-xs font-semibold uppercase w-24 h-6 mb-3 sm:mb-0 text-emerald-600 bg-emerald-100 rounded-full">
                                            Adapt</p>
                                        <div class="text-xl font-bold text-slate-900">Change as your situation & the
                                            economy changes</div>
                                    </div>
                                    <!-- Content -->
                                    <div class="text-slate-500">Pretium lectus quam id leo. Urna et pharetra pharetra
                                        massa
                                        massa. Adipiscing enim eu neque aliquam vestibulum morbi blandit cursus risus.
                                    </div>
                                </div>

                            </div>
                            <!-- End: Vertical Timeline #1 -->



                        </div>



                    </div>


                </div>
        </div>



        {{-- Features Section --}}
        <section id="features">

        </section>

        <div class="text-center mt-16 md:mt-0">
            <h2 class="text-4xl lg:text-5xl font-bold lg:tracking-tight">
                <span class="underline">Understand</span> your finances
            </h2>
            <p class="text-lg mt-4 text-slate-600">
                Astro comes batteries included. It takes the best parts of state-of-the-art
                tools and adds its own innovations.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 mt-16 gap-16">

            @foreach ($features as $feature)
                <div class="flex gap-4 items-start">
                    <div class="mt-1 bg-black rounded-full  p-2 w-8 h-8 shrink-0">
                        {!! $feature['icon'] !!}
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg">{{ $feature['title'] }}</h3>
                        <p class="text-slate-500 mt-2 leading-relaxed">{{ $feature['description'] }}</p>
                    </div>
                </div>
            @endforeach





    </x-slot>
</x-layout>
