<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <body>
        <div class="container mt-5">
            <h2>Chat with AI</h2>
            <div class="card">
                <div class="card-body">
                    <form id="chatForm" action="{{ url('/chat') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="message">Enter your message:</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Send</button>
                    </form>
                </div>
            </div>
            <div id="responseArea" class="mt-4">
                <h4>AI Response:</h4>
                <div id="aiResponse" class="alert alert-secondary" role="alert" style="display: none;"></div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            document.getElementById('chatForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const message = document.getElementById('message').value;
                fetch('/chat', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            message: message
                        })
                    })
                    .then(response => response.json()) // Correctly parse the JSON response
                    .then(data => {
                        console.log("Response received"); // Optionally log that we've received the response
                        console.log("Data: " + data)
                        console.log(data.choices[0].text.content);


                        document.getElementById('aiResponse').style.display = 'block';
                        document.getElementById('aiResponse').textContent = data.choices[0].text.content;
                    })
                    .catch(error => console.error('Error:', error)); // Proper error handling
            });
        </script>

    </body>


</x-app-layout>
