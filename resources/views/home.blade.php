<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="fixed bottom-6 right-6 z-50 font-sans">

        <div id="chat-window"
            class="hidden w-80 sm:w-96 bg-white rounded-2xl shadow-2xl border border-gray-100 flex flex-col overflow-hidden mb-16 transition-all duration-300">

            <div class="bg-indigo-600 text-white px-4 py-3 flex justify-between items-center shadow-sm">
                <div class="flex items-center gap-2">
                    <div class="w-2.5 h-2.5 bg-green-400 rounded-full animate-pulse"></div>
                    <span class="font-semibold text-sm tracking-wide">Support Bot</span>
                </div>
                <button id="close-chat" class="text-white hover:text-gray-200 focus:outline-none transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <div id="chat-messages" class="p-4 h-80 overflow-y-auto bg-gray-50 flex flex-col gap-4">

                <div class="flex items-start gap-2 max-w-[85%]">
                    <div
                        class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center flex-shrink-0 text-lg">
                        🤖
                    </div>
                    <div
                        class="bg-white border border-gray-100 p-3 rounded-2xl rounded-tl-none shadow-sm text-sm text-gray-700">
                        Hi there! 👋 How can I help you today?
                    </div>
                </div>

                <div class="flex items-start gap-2 max-w-[85%] self-end flex-row-reverse">
                    <div class="bg-indigo-600 text-white p-3 rounded-2xl rounded-tr-none shadow-sm text-sm">
                        I need help with my account dashboard.
                    </div>
                </div>

                <div class="flex items-start gap-2 max-w-[85%]">
                    <div
                        class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center flex-shrink-0 text-lg">
                        🤖
                    </div>
                    <div
                        class="bg-white border border-gray-100 px-4 py-3 rounded-2xl rounded-tl-none shadow-sm flex gap-1 items-center">
                        <div class="w-1.5 h-1.5 bg-gray-400 rounded-full animate-bounce"></div>
                        <div class="w-1.5 h-1.5 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s">
                        </div>
                        <div class="w-1.5 h-1.5 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s">
                        </div>
                    </div>
                </div>

            </div>

            <div class="p-3 bg-white border-t border-gray-100">
                <form id="chat-form" class="flex items-center gap-2">
                    <input id="chat-input" type="text" placeholder="Type your message..."
                        class="flex-1 px-4 py-2 bg-gray-100 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-shadow">
                    <button type="submit"
                        class="w-10 h-10 bg-indigo-600 text-white rounded-full flex items-center justify-center hover:bg-indigo-700 transition-colors shadow-md">
                        ➤
                    </button>
                </form>
            </div>
        </div>

        <button id="chat-toggle"
            class="absolute bottom-0 right-0 w-14 h-14 bg-indigo-600 text-white rounded-full shadow-xl flex items-center justify-center hover:bg-indigo-700 hover:scale-105 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-indigo-300 z-50">
            <svg id="chat-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                </path>
            </svg>
        </button>

    </div>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatWindow = document.getElementById('chat-window');
            const chatToggle = document.getElementById('chat-toggle');
            const closeChat = document.getElementById('close-chat');

            function toggleChat() {
                chatWindow.classList.toggle('hidden');
            }

            chatToggle.addEventListener('click', toggleChat);
            closeChat.addEventListener('click', toggleChat);
        });
    </script> --}}

    <script>
document.addEventListener('DOMContentLoaded', function() {

    const chatWindow = document.getElementById('chat-window');
    const chatToggle = document.getElementById('chat-toggle');
    const closeChat = document.getElementById('close-chat');
    const chatForm = document.getElementById('chat-form');
    const chatInput = document.getElementById('chat-input');
    const chatMessages = document.getElementById('chat-messages');

    function toggleChat() {
        chatWindow.classList.toggle('hidden');
    }

    chatToggle.addEventListener('click', toggleChat);
    closeChat.addEventListener('click', toggleChat);

    function appendMessage(message, sender = 'bot') {
        const messageWrapper = document.createElement('div');
        messageWrapper.className = sender === 'user'
            ? 'flex items-start gap-2 max-w-[85%] self-end flex-row-reverse'
            : 'flex items-start gap-2 max-w-[85%]';

        const bubble = document.createElement('div');

        if (sender === 'user') {
            bubble.className = 'bg-indigo-600 text-white p-3 rounded-2xl rounded-tr-none shadow-sm text-sm';
        } else {
            bubble.className = 'bg-white border border-gray-100 p-3 rounded-2xl rounded-tl-none shadow-sm text-sm text-gray-700';
        }

        bubble.innerHTML = message;

        if (sender === 'bot') {
            const avatar = document.createElement('div');
            avatar.className = 'w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center flex-shrink-0 text-lg';
            avatar.innerHTML = '🤖';
            messageWrapper.appendChild(avatar);
        }

        messageWrapper.appendChild(bubble);
        chatMessages.appendChild(messageWrapper);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function showTyping() {
        const typing = document.createElement('div');
        typing.id = 'typing';
        typing.className = 'text-sm text-gray-500';
        typing.innerHTML = "Bot is typing...";
        chatMessages.appendChild(typing);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function removeTyping() {
        const typing = document.getElementById('typing');
        if (typing) typing.remove();
    }

    chatForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const message = chatInput.value.trim();
        if (!message) return;

        appendMessage(message, 'user');
        chatInput.value = '';

        showTyping();

        fetch("/api/chat", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ message: message })
        })
        .then(res => res.json())
        .then(data => {
            removeTyping();
            appendMessage(data.reply, 'bot');
        })
        .catch(() => {
            removeTyping();
            appendMessage("Something went wrong. Please try again.", 'bot');
        });
    });

});
</script>
</body>

</html>
