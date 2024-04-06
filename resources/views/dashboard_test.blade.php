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

                    <!-- CALENDAR -->
                    <div class="antialiased relative sans-serif bg-gray-100 rounded m-4 ">
                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                            <div class="container mx-auto px-4 py-2">

                                <div class=" text-center text-gray-800 p-4 mb-4">
                                    <h6 class="">Upcoming & Past</h6>
                                    <h1 class="font-bold text-xl">Expenses and Income</h1>

                                </div>

                                <div class="bg-white rounded-lg shadow overflow-hidden">

                                    <div class="flex items-center justify-between py-2 px-6">
                                        <div>
                                            <span x-text="MONTH_NAMES[month]"
                                                class="text-lg font-bold text-gray-800"></span>
                                            <span x-text="year"
                                                class="ml-1 text-lg text-gray-600 font-normal"></span>
                                        </div>
                                        <div class="border rounded-lg px-1" style="padding-top: 2px;">
                                            <button type="button"
                                                class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center"
                                                :class="{ 'cursor-not-allowed opacity-25': month == 0 }"
                                                :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()">
                                                <svg class="h-6 w-6 text-gray-500 inline-flex leading-none"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 19l-7-7 7-7" />
                                                </svg>
                                            </button>
                                            <div class="border-r inline-flex h-6"></div>
                                            <button type="button"
                                                class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1"
                                                :class="{ 'cursor-not-allowed opacity-25': month == 11 }"
                                                :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()">
                                                <svg class="h-6 w-6 text-gray-500 inline-flex leading-none"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M9 5l7 7-7 7" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="-mx-1 -mb-1">
                                        <div class="flex flex-wrap" style="margin-bottom: -40px;">
                                            <template x-for="(day, index) in DAYS" :key="index">
                                                <div style="width: 14.26%" class="px-2 py-2">
                                                    <div x-text="day"
                                                        class="text-gray-600 text-sm uppercase tracking-wide font-bold text-center">
                                                    </div>
                                                </div>
                                            </template>
                                        </div>

                                        <div class="flex flex-wrap border-t border-l">
                                            <template x-for="blankday in blankdays">
                                                <div style="width: 14.28%; height: 120px"
                                                    class="text-center border-r border-b px-4 pt-2"></div>
                                            </template>
                                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                                <div style="width: 14.28%; height: 120px"
                                                    class="px-4 pt-2 border-r border-b relative">
                                                    <div @click="showEventModal(date)" x-text="date"
                                                        class="inline-flex w-6 h-6 items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100"
                                                        :class="{
                                                            'bg-blue-500 text-white': isToday(date) ==
                                                                true,
                                                            'text-gray-700 hover:bg-blue-200': isToday(
                                                                date) == false
                                                        }">
                                                    </div>
                                                    <div style="height: 80px;" class="overflow-y-auto mt-1">
                                                        <!-- <div
                                        class="absolute top-0 right-0 mt-2 mr-2 inline-flex items-center justify-center rounded-full text-sm w-6 h-6 bg-gray-700 text-white leading-none"
                                        x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
                                        x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div> -->

                                                        <template
                                                            x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                                            <div class="px-2 py-1 rounded-lg mt-1 overflow-hidden border"
                                                                :class="{
                                                                    'border-blue-200 text-blue-800 bg-blue-100': event
                                                                        .event_theme === 'blue',
                                                                    'border-red-200 text-red-800 bg-red-100': event
                                                                        .event_theme === 'red',
                                                                    'border-yellow-200 text-yellow-800 bg-yellow-100': event
                                                                        .event_theme === 'yellow',
                                                                    'border-green-200 text-green-800 bg-green-100': event
                                                                        .event_theme === 'green',
                                                                    'border-purple-200 text-purple-800 bg-purple-100': event
                                                                        .event_theme === 'purple'
                                                                }">
                                                                <p x-text="event.event_title"
                                                                    class="text-sm truncate leading-tight"></p>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div style=" background-color: rgba(0, 0, 0, 0.8)"
                                class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full"
                                x-show.transition.opacity="openEventModal">
                                <div
                                    class="p-4 max-w-xl mx-auto relative absolute left-0 right-0 overflow-hidden mt-24">
                                    <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
                                        x-on:click="openEventModal = !openEventModal">
                                        <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                                        </svg>
                                    </div>

                                    <div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block p-8">

                                        <h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Add
                                            Event Details</h2>

                                        <div class="mb-4">
                                            <label
                                                class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event
                                                title</label>
                                            <input
                                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                                type="text" x-model="event_title">
                                        </div>

                                        <div class="mb-4">
                                            <label
                                                class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event
                                                date</label>
                                            <input
                                                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500"
                                                type="text" x-model="event_date" readonly>
                                        </div>

                                        <div class="inline-block w-64 mb-4">
                                            <label
                                                class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Select
                                                a theme</label>
                                            <div class="relative">
                                                <select @change="event_theme = $event.target.value;"
                                                    x-model="event_theme"
                                                    class="block appearance-none w-full bg-gray-200 border-2 border-gray-200 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-blue-500 text-gray-700">
                                                    <template x-for="(theme, index) in themes">
                                                        <option :value="theme.value" x-text="theme.label">
                                                        </option>
                                                    </template>

                                                </select>
                                                <div
                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                    <svg class="fill-current h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path
                                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-8 text-right">
                                            <button type="button"
                                                class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2"
                                                @click="openEventModal = !openEventModal">
                                                Cancel
                                            </button>
                                            <button type="button"
                                                class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm"
                                                @click="addEvent()">
                                                Save Event
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Modal -->
                        </div>


                    </div>


                    <div class="flex flex-wrap">
                        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                            <div
                                class=" flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-800">
                                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                    <div class="flex flex-wrap items-center">
                                        <div class=" w-full max-w-full flex-grow flex-1">
                                            <h6 class="uppercase text-blueGray-100 mb-1 text-xs font-semibold">
                                                Overview
                                            </h6>
                                            <h2 class="text-white text-xl font-semibold">
                                                Sales value
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 flex-auto">
                                    <!-- Chart -->
                                    <div class="" style="height:350px">
                                        <canvas id="line-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full xl:w-4/12 px-4">
                            <div class=" flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                                    <div class="flex flex-wrap items-center">
                                        <div class=" w-full max-w-full flex-grow flex-1">
                                            <h6 class="uppercase text-blueGray-400 mb-1 text-xs font-semibold">
                                                Performance
                                            </h6>
                                            <h2 class="text-blueGray-700 text-xl font-semibold">
                                                Total orders
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 flex-auto">
                                    <!-- Chart -->
                                    <div class="" style="height:350px">
                                        <canvas id="bar-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-4">
                        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                            <div class=" flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                                <div class="rounded-t mb-0 px-4 py-3 border-0">
                                    <div class="flex flex-wrap items-center">
                                        <div class=" w-full px-4 max-w-full flex-grow flex-1">
                                            <h3 class="font-semibold text-base text-blueGray-700">
                                                Page visits
                                            </h3>
                                        </div>
                                        <div class=" w-full px-4 max-w-full flex-grow flex-1 text-right">
                                            <button
                                                class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                                                type="button" style="transition:all .15s ease">
                                                See all
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block w-full overflow-x-auto">
                                    <!-- Projects table -->
                                    <table class="items-center w-full bg-transparent border-collapse">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                    Page name
                                                </th>
                                                <th
                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                    Visitors
                                                </th>
                                                <th
                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                    Unique users
                                                </th>
                                                <th
                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                    Bounce rate
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    /argon/
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    4,569
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    340
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                                                    46,53%
                                                </td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    /argon/index.html
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    3,985
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    319
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                                    46,53%
                                                </td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    /argon/charts.html
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    3,513
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    294
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                                                    36,49%
                                                </td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    /argon/tables.html
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    2,050
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    147
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                                                    50,87%
                                                </td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    /argon/profile.html
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    1,795
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    190
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                                                    46,53%
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="w-full xl:w-4/12 px-4">
                            <div class=" flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                                <div class="rounded-t mb-0 px-4 py-3 border-0">
                                    <div class="flex flex-wrap items-center">
                                        <div class="w-full px-4 max-w-full flex-grow flex-1">
                                            <h3 class="font-semibold text-base text-blueGray-700">
                                                Social traffic
                                            </h3>
                                        </div>
                                        <div class="w-full px-4 max-w-full flex-grow flex-1 text-right">
                                            <button
                                                class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                                                type="button" style="transition:all .15s ease">
                                                See all
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block w-full overflow-x-auto">
                                    <!-- Projects table -->
                                    <table class="items-center w-full bg-transparent border-collapse">
                                        <thead class="thead-light">
                                            <tr>
                                                <th
                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                    Referral
                                                </th>
                                                <th
                                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                    Visitors
                                                </th>
                                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                                    style="min-width:140px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    Facebook
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    1,480
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <div class="flex items-center">
                                                        <span class="mr-2">60%</span>
                                                        <div class="relative w-full">
                                                            <div
                                                                class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                                <div style="width:60%"
                                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    Facebook
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    5,480
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <div class="flex items-center">
                                                        <span class="mr-2">70%</span>
                                                        <div class="relative w-full">
                                                            <div
                                                                class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                                                                <div style="width:70%"
                                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    Google
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    4,807
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <div class="flex items-center">
                                                        <span class="mr-2">80%</span>
                                                        <div class="relative w-full">
                                                            <div
                                                                class="overflow-hidden h-2 text-xs flex rounded bg-purple-200">
                                                                <div style="width:80%"
                                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    Instagram
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    3,678
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <div class="flex items-center">
                                                        <span class="mr-2">75%</span>
                                                        <div class="relative w-full">
                                                            <div
                                                                class="overflow-hidden h-2 text-xs flex rounded bg-lightBlue-200">
                                                                <div style="width:75%"
                                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-lightBlue-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    twitter
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    2,645
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <div class="flex items-center">
                                                        <span class="mr-2">30%</span>
                                                        <div class="relative w-full">
                                                            <div
                                                                class="overflow-hidden h-2 text-xs flex rounded bg-orange-200">
                                                                <div style="width:30%"
                                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>

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
            <script type="text/javascript">
                /* Sidebar - Side navigation menu on mobile/responsive mode */
                function toggleNavbar(collapseID) {
                    document.getElementById(collapseID).classList.toggle("hidden");
                    document.getElementById(collapseID).classList.toggle("bg-white");
                    document.getElementById(collapseID).classList.toggle("m-2");
                    document.getElementById(collapseID).classList.toggle("py-3");
                    document.getElementById(collapseID).classList.toggle("px-6");
                }
                /* Function for dropdowns */
                function openDropdown(event, dropdownID) {
                    let element = event.target;
                    while (element.nodeName !== "A") {
                        element = element.parentNode;
                    }
                    var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
                        placement: "bottom-end"
                    });
                    document.getElementById(dropdownID).classList.toggle("hidden");
                    document.getElementById(dropdownID).classList.toggle("block");
                }


                (function() {
                    /* Add current date to the footer */
                    document.getElementById("javascript-date").innerHTML = new Date().getFullYear();
                    /* Chart initialisations */
                    /* Line Chart */
                    var config = {
                        type: "line",
                        data: {
                            labels: [
                                "January",
                                "February",
                                "March",
                                "April",
                                "May",
                                "June",
                                "July"
                            ],
                            datasets: [{
                                    label: new Date().getFullYear(),
                                    backgroundColor: "#4c51bf",
                                    borderColor: "#4c51bf",
                                    data: [65, 78, 66, 44, 56, 67, 75],
                                    fill: false
                                },
                                {
                                    label: new Date().getFullYear() - 1,
                                    fill: false,
                                    backgroundColor: "#ed64a6",
                                    borderColor: "#ed64a6",
                                    data: [40, 68, 86, 74, 56, 60, 87]
                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            responsive: true,
                            title: {
                                display: false,
                                text: "Sales Charts",
                                fontColor: "white"
                            },
                            legend: {
                                labels: {
                                    fontColor: "white"
                                },
                                align: "end",
                                position: "bottom"
                            },
                            tooltips: {
                                mode: "index",
                                intersect: false
                            },
                            hover: {
                                mode: "nearest",
                                intersect: true
                            },
                            scales: {
                                xAxes: [{
                                    ticks: {
                                        fontColor: "rgba(255,255,255,.7)"
                                    },
                                    display: true,
                                    scaleLabel: {
                                        display: false,
                                        labelString: "Month",
                                        fontColor: "white"
                                    },
                                    gridLines: {
                                        display: false,
                                        borderDash: [2],
                                        borderDashOffset: [2],
                                        color: "rgba(33, 37, 41, 0.3)",
                                        zeroLineColor: "rgba(0, 0, 0, 0)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2]
                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        fontColor: "rgba(255,255,255,.7)"
                                    },
                                    display: true,
                                    scaleLabel: {
                                        display: false,
                                        labelString: "Value",
                                        fontColor: "white"
                                    },
                                    gridLines: {
                                        borderDash: [3],
                                        borderDashOffset: [3],
                                        drawBorder: false,
                                        color: "rgba(255, 255, 255, 0.15)",
                                        zeroLineColor: "rgba(33, 37, 41, 0)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2]
                                    }
                                }]
                            }
                        }
                    };
                    var ctx = document.getElementById("line-chart").getContext("2d");
                    window.myLine = new Chart(ctx, config);

                    /* Bar Chart */
                    config = {
                        type: "bar",
                        data: {
                            labels: [
                                "January",
                                "February",
                                "March",
                                "April",
                                "May",
                                "June",
                                "July"
                            ],
                            datasets: [{
                                    label: new Date().getFullYear(),
                                    backgroundColor: "#ed64a6",
                                    borderColor: "#ed64a6",
                                    data: [30, 78, 56, 34, 100, 45, 13],
                                    fill: false,
                                    barThickness: 8
                                },
                                {
                                    label: new Date().getFullYear() - 1,
                                    fill: false,
                                    backgroundColor: "#4c51bf",
                                    borderColor: "#4c51bf",
                                    data: [27, 68, 86, 74, 10, 4, 87],
                                    barThickness: 8
                                }
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            responsive: true,
                            title: {
                                display: false,
                                text: "Orders Chart"
                            },
                            tooltips: {
                                mode: "index",
                                intersect: false
                            },
                            hover: {
                                mode: "nearest",
                                intersect: true
                            },
                            legend: {
                                labels: {
                                    fontColor: "rgba(0,0,0,.4)"
                                },
                                align: "end",
                                position: "bottom"
                            },
                            scales: {
                                xAxes: [{
                                    display: false,
                                    scaleLabel: {
                                        display: true,
                                        labelString: "Month"
                                    },
                                    gridLines: {
                                        borderDash: [2],
                                        borderDashOffset: [2],
                                        color: "rgba(33, 37, 41, 0.3)",
                                        zeroLineColor: "rgba(33, 37, 41, 0.3)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2]
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    scaleLabel: {
                                        display: false,
                                        labelString: "Value"
                                    },
                                    gridLines: {
                                        borderDash: [2],
                                        drawBorder: false,
                                        borderDashOffset: [2],
                                        color: "rgba(33, 37, 41, 0.2)",
                                        zeroLineColor: "rgba(33, 37, 41, 0.15)",
                                        zeroLineBorderDash: [2],
                                        zeroLineBorderDashOffset: [2]
                                    }
                                }]
                            }
                        }
                    };
                    ctx = document.getElementById("bar-chart").getContext("2d");
                    window.myBar = new Chart(ctx, config);
                })();
            </script>
            <script>
                const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ];
                const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

                function app() {
                    return {
                        month: '',
                        year: '',
                        no_of_days: [],
                        blankdays: [],
                        days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                        events: [{
                                event_date: new Date(2020, 3, 1),
                                event_title: "April Fool's Day",
                                event_theme: 'blue'
                            },

                            {
                                event_date: new Date(2020, 3, 10),
                                event_title: "Birthday",
                                event_theme: 'red'
                            },

                            {
                                event_date: new Date(2020, 3, 16),
                                event_title: "Upcoming Event",
                                event_theme: 'green'
                            }
                        ],
                        event_title: '',
                        event_date: '',
                        event_theme: 'blue',

                        themes: [{
                                value: "blue",
                                label: "Blue Theme"
                            },
                            {
                                value: "red",
                                label: "Red Theme"
                            },
                            {
                                value: "yellow",
                                label: "Yellow Theme"
                            },
                            {
                                value: "green",
                                label: "Green Theme"
                            },
                            {
                                value: "purple",
                                label: "Purple Theme"
                            }
                        ],

                        openEventModal: false,

                        initDate() {
                            let today = new Date();
                            this.month = today.getMonth();
                            this.year = today.getFullYear();
                            this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                        },

                        isToday(date) {
                            const today = new Date();
                            const d = new Date(this.year, this.month, date);

                            return today.toDateString() === d.toDateString() ? true : false;
                        },

                        showEventModal(date) {
                            // open the modal
                            this.openEventModal = true;
                            this.event_date = new Date(this.year, this.month, date).toDateString();
                        },

                        addEvent() {
                            if (this.event_title == '') {
                                return;
                            }

                            this.events.push({
                                event_date: this.event_date,
                                event_title: this.event_title,
                                event_theme: this.event_theme
                            });

                            console.log(this.events);

                            // clear the form data
                            this.event_title = '';
                            this.event_date = '';
                            this.event_theme = 'blue';

                            //close the modal
                            this.openEventModal = false;
                        },

                        getNoOfDays() {
                            let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                            // find where to start calendar day of week
                            let dayOfWeek = new Date(this.year, this.month).getDay();
                            let blankdaysArray = [];
                            for (var i = 1; i <= dayOfWeek; i++) {
                                blankdaysArray.push(i);
                            }

                            let daysArray = [];
                            for (var i = 1; i <= daysInMonth; i++) {
                                daysArray.push(i);
                            }

                            this.blankdays = blankdaysArray;
                            this.no_of_days = daysArray;
                        }
                    }
                }
            </script>
        </div>



</x-app-layout>
