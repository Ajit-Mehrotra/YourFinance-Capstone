<x-app-layout>

    <div class="text-blueGray-700 antialiased">
        <noscript>You need to enable JavaScript to run this app.</noscript>

        <div id="root" class="relative">
            @include('dashboard.dash-nav')



            <div class="relative md:ml-64 bg-dots-darker bg-blueGray-50">
                @include('dashboard.dash-header', [
                    'header' => 'Current Financial
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Situation',
                ])

                <!-- CALENDAR -->

                @include('dashboard.calendar')



                <div class="flex flex-wrap">
                    <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                        <div class=" flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-blueGray-800">
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
                        <div class=" flex flex-col min-w-0 break-words bg-white w-full mb-6 p-4 shadow-lg rounded">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                <div class="flex flex-wrap items-center">
                                    <div class=" w-full px-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold text-base text-blueGray-700">
                                            Transactions
                                        </h3>
                                    </div>
                                    <div class=" w-full px-4 max-w-full flex-grow flex-1 text-right">
                                        <button
                                            class="bg-green-500 text-white hover:bg-green-600 active:bg-green-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
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
                                                Title
                                            </th>
                                            <th
                                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Date
                                            </th>
                                            <th
                                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Amount
                                            </th>
                                            <th
                                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Category
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($transactions as $transaction)
                                            {{-- @dump($event) --}}
                                            <tr class="hover:bg-slate-100">
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    {{ $transaction->name }}
                                                </td>

                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    {{ $transaction->date }}
                                                </td>

                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    {{ "$" . number_format($transaction->amount, 2) }}
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    {{ $transaction->category->category_name }}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>

                            </div>
                            {{ $transactions->links() }}
                        </div>
                    </div>



                    <div class="w-full xl:w-4/12 px-4">
                        <div class=" flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                            <div class="rounded-t mb-0 px-4 py-3 border-0">
                                <div class="flex flex-wrap items-center">
                                    <div class="w-full px-4 max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold text-base text-blueGray-700">
                                            Categories
                                        </h3>
                                    </div>
                                    <div class="w-full px-4 max-w-full flex-grow flex-1 text-right">
                                        <button
                                            class="bg-green-500 text-white hover:bg-green-600 active:bg-green-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
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
                                                Category
                                            </th>
                                            <th
                                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Count
                                            </th>
                                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                                                style="min-width:140px">Percentage</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($categories as $category)
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                    {{ $category->category->category_name }}
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    {{ $category->total }}
                                                </td>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                    <div class="flex items-center">
                                                        <span class="mr-2">
                                                            {{ ($category->total / $transactionCount) * 100 . '%' }}</span>
                                                        <div class="relative w-full">
                                                            <div
                                                                class="overflow-hidden h-2 text-xs flex rounded bg-green-200">
                                                                <div style={{ 'width:' . ($category->total / $transactionCount) * 100 . '%' }}
                                                                    class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>

                    <div class="flex-col">
                        @foreach ($categories as $category)
                            <h1>{{ 'Category Name: ' . $category->category->category_name }}</h1>

                            <h1>{{ 'Total: ' . $category->total }}</h1>
                            {{ $category->total / $transactionCount }}
                            <br>
                        @endforeach
                    </div>




                    <br>
                    <br>

                    <h1>{{ $categories }}</h1>

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
        </script>


        <script>
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

            })
            (

            );
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

                    // events: [{
                    //         event_date: new Date(2024, 3, 1),
                    //         event_title: "April Fool's Day",
                    //         event_theme: 'blue'
                    //     },

                    //     {
                    //         event_date: new Date(2024, 3, 10),
                    //         event_title: "Birthday",
                    //         event_theme: 'red'
                    //     },

                    //     {
                    //         event_date: new Date(2024, 3, 16),
                    //         event_title: "Upcoming Event",
                    //         event_theme: 'green'
                    //     }
                    // ],
                    events: @json($events),
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
