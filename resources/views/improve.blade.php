<x-app-layout>

    <div class="text-blueGray-700 antialiased">
        <noscript>You need to enable JavaScript to run this app.</noscript>

        <div id="root" class="relative">
            @include('dashboard.dash-nav')



            <div class="relative md:ml-64 bg-dots-darker bg-blueGray-50">
                @include('dashboard.dash-header', [
                    'header' => 'Where to Improve',
                ])
                <!-- Header -->

                <div class="px-4 md:px-10 mx-auto w-full -m-24">


                    <div class="antialiased relative sans-serif h-screen bg-gray-100 rounded m-4 ">
                        <h1>Improve Your Finances</h1>
                    </div>

                    <div class="flex flex-wrap mt-4">



                        <footer class="block py-4">
                            <div class="container mx-auto px-4">
                                <hr class="mb-4 border-b-1 border-blueGray-200" />
                                <div class="flex flex-wrap items-center md:justify-between justify-center">
                                    <div class="w-full md:w-4/12 px-4">
                                        <div class="text-sm text-blueGray-500 font-semibold py-1">
                                            Copyright © <span id="javascript-date"></span>
                                            <a href="https://www.creative-tim.com"
                                                class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
                                                Creative Tim
                                            </a>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-8/12 px-4">
                                        <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                                            <li>
                                                <a href="https://www.creative-tim.com"
                                                    class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                                    Creative Tim
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.creative-tim.com/presentation"
                                                    class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                                    About Us
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://blog.creative-tim.com"
                                                    class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://github.com/creativetimofficial/tailwind-starter-kit/blob/main/LICENSE.md"
                                                    class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3">
                                                    MIT License
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" charset="utf-8"></script>
            <script src="https://kit.fontawesome.com/899cb1dfa3.js" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>


        </div>



</x-app-layout>
