@php

@endphp


{{-- <div class="container mt-5">
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
</div> --}}


<div x-data="chatBot()">
    <div class="flex-1 p:2 sm:p-6 justify-between flex flex-col h-screen bg-white">
        <div id="messages"
            class="flex flex-col space-y-4 p-3 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
            <template x-for="(message, key) in messages">
                <div>
                    <div class="flex items-end" :class="message.from == 'bot' ? '' : 'justify-end'">
                        <div class="flex flex-col space-y-2 text-md leading-tight max-w-lg mx-2"
                            :class="message.from == 'bot' ? 'order-2 items-start' : 'order-1 items-end'">
                            <div>
                                <span class="px-4 py-3 rounded-xl inline-block"
                                    :class="message.from == 'bot' ? 'rounded-bl-none bg-gray-100 text-gray-600' :
                                        'rounded-br-none bg-green-500 text-white'"
                                    x-html="message.text"></span>
                            </div>
                        </div>
                        <img :src="message.from == 'bot' ? 'https://cdn.icon-icons.com/icons2/1371/PNG/512/robot02_90810.png' :
                            'https://i.pravatar.cc/100?img=7'"
                            alt="" class="w-6 h-6 rounded-full"
                            :class="message.from == 'bot' ? 'order-1' : 'order-2'">
                    </div>
                </div>
            </template>
            <div x-show="botTyping" style="display: none;">
                <div class="flex items-end">
                    <div class="flex flex-col space-y-2 text-md leading-tight mx-2 order-2 items-start">
                        <div><img
                                src="https://support.signal.org/hc/article_attachments/360016877511/typing-animation-3x.gif"
                                alt="..." class="w-16 ml-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t-2 border-gray-200 px-4 pt-4 mb-2 sm:mb-0">
            <form class="relative flex" id="chatForm" action="{{ url('/chat') }}" method="POST">
                @csrf
                <input placeholder="Say something..." autocomplete="off" autofocus="true"
                    class="form-control text-md w-full focus:outline-none focus:placeholder-gray-400 text-gray-600 placeholder-gray-600 pl-5 pr-16 bg-gray-100 border-2 border-gray-200 focus:border-green-500 rounded-full py-2"
                    id="message" name="message" rows="3" required @keydown.enter="updateChat($event.target)"
                    x-ref="input"></input>
                <div class="absolute right-2 items-center inset-y-0 hidden sm:flex">
                    <button type="submit"
                        class="inline-flex items-center justify-center rounded-full h-8 w-8 transition duration-200 ease-in-out text-white bg-green-500 hover:bg-green-600 focus:outline-none"
                        @click="sendChat($refs.input.value)">
                        <i class="mdi mdi-arrow-right text-xl leading-none"></i>
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
