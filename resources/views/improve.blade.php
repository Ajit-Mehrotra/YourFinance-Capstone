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




                <div class="antialiased relative sans-serif h-screen bg-gray-100 rounded m-4 ">
                    <div class=" text-center text-gray-800 p-4 mb-4">
                        <h6 class="">Learn from AI</h6>
                        <h1 class="font-bold text-xl">Improve your Finances</h1>

                    </div>

                    @include('dashboard.chat')


                </div>


                @include('dashboard.dash-footer')
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" charset="utf-8"></script>
            <script src="https://kit.fontawesome.com/899cb1dfa3.js" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>


            <style>
                @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
            </style>
            <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.5.0/dist/alpine.min.js"></script>
            <script>
                function chatBot() {
                    return {
                        messages: [],
                        sendChat(message) {
                            const messageData = {
                                message: message
                            };

                            fetch('/chat', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'Accept': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                            'content')
                                    },
                                    body: JSON.stringify(messageData)
                                })
                                .then(response => response.json())
                                .then(data => {
                                    this.messages.push({
                                        from: 'bot',
                                        text: data.choices[0].text
                                            .content // Assuming the server returns the response in { message: "text" }
                                    });
                                })
                                .catch(error => console.error('Error:', error));

                            // Clear input and maintain chat UI flow
                            this.messages.push({
                                from: 'user',
                                text: message
                            });
                            this.$refs.input.value = ''; // Reset input field
                        }
                    }
                }
            </script>


        </div>



</x-app-layout>
