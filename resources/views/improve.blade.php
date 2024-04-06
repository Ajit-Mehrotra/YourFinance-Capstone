<x-app-layout>

    <div class="text-blueGray-700 antialiased">
        <noscript>You need to enable JavaScript to run this app.</noscript>

        <div id="root" class="relative">
            <div
                class="md:left-0 md:block md:absolute md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
                <div
                    class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
                    <button
                        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                        type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                        <i class="fas fa-bars"></i></button>
                    <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-4  no-underline">
                        Understand Your Money
                    </h6>
                    <ul class="md:hidden items-center flex flex-wrap list-none">
                        <li class="inline-block relative">
                            <a class="text-blueGray-500 block py-1 px-3" href="#pablo"
                                onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                                style="min-width: 12rem;" id="notification-dropdown">
                                <a href="#pablo"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                                    href="#pablo"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                                    action</a><a href="#pablo"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                                    else here</a>
                                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                                <a href="#pablo"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                                    link</a>
                            </div>
                        </li>
                        <li class="inline-block relative">
                            <a class="text-blueGray-500 block" href="#pablo"
                                onclick="openDropdown(event,'user-responsive-dropdown')">
                                <div class="items-center flex">
                                    <span
                                        class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                                            alt="..."
                                            class="w-full rounded-full align-middle border-none shadow-lg"
                                            src="./assets/img/team-1-800x800.jpg" /></span>
                                </div>
                            </a>
                            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                                style="min-width: 12rem;" id="user-responsive-dropdown">
                                <a href="#pablo"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                                    href="#pablo"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                                    action</a><a href="#pablo"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                                    else here</a>
                                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                                <a href="#pablo"
                                    class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                                    link</a>
                            </div>
                        </li>
                    </ul>
                    <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
                        id="example-collapse-sidebar">
                        <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                            <div class="flex flex-wrap">
                                <div class="w-6/12">
                                    <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                                        href="javascript:void(0)">
                                        Tailwind Starter Kit
                                    </a>
                                </div>
                                <div class="w-6/12 flex justify-end">
                                    <button type="button"
                                        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                                        onclick="toggleNavbar('example-collapse-sidebar')">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <form class="mt-6 mb-4 md:hidden">
                            <div class="mb-3 pt-0">
                                <input type="text" placeholder="Search"
                                    class="border-0 px-3 py-2 h-12 border border-solid  border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal" />
                            </div>
                        </form>
                        <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                            <li class="items-center">
                                <a class="text-green-500 hover:text-green-600 text-xs uppercase py-3 font-bold block"
                                    href="dashboard_test"><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                                    Your Current Situation</a>
                            </li>
                            <li class="items-center">
                                <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                    href="improve"><i class="fas fa-newspaper text-blueGray-400 mr-2 text-sm"></i>
                                    Where to Improve</a>
                            </li>
                            <li class="items-center">
                                <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                    href="#/profile"><i class="fas fa-user-circle text-blueGray-400 mr-2 text-sm"></i>
                                    How to Improve</a>
                            </li>
                        </ul>
                        <hr class="my-4 md:min-w-full" />
                        <ul>
                            <h6
                                class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                                Tools to Improve
                            </h6>
                            <li class="items-center">
                                <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                    href="#/login"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                                    Change Where Money Goes
                                </a>
                            </li>
                            <li class="items-center">
                                <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                    href="#/login"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                                    Predicitive Analytics
                                </a>
                            </li>
                            <li class="items-center">
                                <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                    href="#/login"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                                    Auto Money Distribution
                                </a>
                            </li>
                            <li class="items-center">
                                <a class="text-blueGray-300 text-xs uppercase py-3 font-bold block" href="#pablo"><i
                                        class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"></i>
                                    Investments Analytics</a>
                            </li>
                            <li class="items-center">
                                <a class="text-blueGray-300 text-xs uppercase py-3 font-bold block" href="#pablo"><i
                                        class="fas fa-tools text-blueGray-300 mr-2 text-sm"></i>
                                    Planning (soon)</a>
                            </li>
                        </ul>
                        <hr class="my-4 md:min-w-full" />
                        <h6
                            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                            Getting Set Up
                        </h6>
                        <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                            <li class="items-center">
                                <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                    href="#/login"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                                    See Linked Accounts
                                </a>
                            </li>
                            <li class="items-center">
                                <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                    href="#/login"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                                    Add/Import Transactions
                                </a>
                            </li>
                            <li class="items-center">
                                <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                    href="#/login"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                                    Suggest A Feature
                                </a>
                            </li>
                            <li class="items-center">
                                <a class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase py-3 font-bold block"
                                    href="#/login"><i class="fas fa-fingerprint text-blueGray-400 mr-2 text-sm"></i>
                                    Report a bug
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>



            <div class="relative md:ml-64 bg-dots-darker bg-blueGray-50">
                <nav
                    class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
                    <div
                        class="w-full mx-auto items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
                        <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
                            href="./index.html">Current Financial Situation</a>
                        <form class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3">
                            <div class="relative flex w-full flex-wrap items-stretch">
                                <span
                                    class="z-10 h-full leading-snug font-normal absolute text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"><i
                                        class="fas fa-search"></i></span>
                                <input type="text" placeholder="Search here..."
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative   rounded text-sm shadow outline-none focus:outline-none focus:ring w-full pl-10" />
                            </div>
                        </form>
                    </div>
                </nav>
                <!-- Header -->
                <div class="relative bg-green-600 md:pt-32 pb-32 pt-12">
                    <div class="px-4 md:px-10 mx-auto w-full">
                        <div>
                            <!-- Card stats -->
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                        <div class="flex-auto p-4">
                                            <div class="flex flex-wrap">
                                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                        You Can Spend
                                                    </h5>
                                                    <span class="font-semibold underline text-xl text-red-500">
                                                        $3,000
                                                    </span>
                                                </div>
                                                <div class="relative w-auto pl-4 flex-initial">
                                                    <div
                                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                                        <i class="fa-solid fa-exclamation"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-blueGray-400 mt-4">
                                                <span class="text-emerald-500 mr-2">
                                                    <i class="fas fa-arrow-up"></i> 3.48%
                                                </span>
                                                <span class="whitespace-nowrap">
                                                    This time last month
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                        <div class="flex-auto p-4">
                                            <div class="flex flex-wrap">
                                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                        You're Worth
                                                    </h5>
                                                    <span class="font-semibold text-xl text-blueGray-700">
                                                        $12,000
                                                    </span>
                                                </div>

                                            </div>
                                            <p class="text-sm text-blueGray-400 mt-4">
                                                <span class="text-red-500 mr-2">
                                                    <i class="fas fa-arrow-down"></i> 3.48%
                                                </span>
                                                <span class="whitespace-nowrap">
                                                    Since last week
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                        <div class="flex-auto p-4">
                                            <div class="flex flex-wrap">
                                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                        Credit Score
                                                    </h5>
                                                    <span class="font-semibold text-xl text-blueGray-700">
                                                        620
                                                    </span>
                                                </div>
                                                <div class="relative w-auto pl-4 flex-initial">
                                                    <div
                                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                                                        <i class="fa-solid fa-triangle-exclamation"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-sm text-blueGray-400 mt-4">
                                                <span class="text-orange-500 mr-2">
                                                    <i class="fas fa-arrow-down"></i> 1.10%
                                                </span>
                                                <span class="whitespace-nowrap">
                                                    Since yesterday
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                    <div
                                        class="relative flex place-content-center flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                                        <div class="flex-auto p-4">
                                            <div class="flex flex-wrap">
                                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">
                                                        See Key Metric Breakdown
                                                    </h5>

                                                </div>
                                                <div class="relative w-auto pl-4 flex-initial">
                                                    <div
                                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-green-500">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
