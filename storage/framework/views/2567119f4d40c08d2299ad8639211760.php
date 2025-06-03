<!DOCTYPE html>
<html>
<head>
    <title>AI Chatbot</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<body>
    <h2>AI Chatbot</h2>
    <div id="chat-box" style="border:1px solid #ccc; padding:10px; height:300px; overflow-y:scroll;"></div>
    <form id="chat-form">
        <input type="text" id="message" placeholder="Type a message..." required>
        <button type="submit">Send</button>
    </form>

    <script>
        const chatBox = document.getElementById('chat-box');
        const form = document.getElementById('chat-form');
        const input = document.getElementById('message');

        form.addEventListener('submit', async function (e) {
            e.preventDefault();
            const message = input.value;
            chatBox.innerHTML += `<div><strong>You:</strong> ${message}</div>`;
            input.value = '';

            const res = await fetch('/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ message: message })
            });

            const data = await res.json();
            chatBox.innerHTML += `<div><strong>AI:</strong> ${data.reply}</div>`;
            chatBox.scrollTop = chatBox.scrollHeight;
        });
    </script>
</body>
</html>
<?php /**PATH C:\laravelapps\task-manager\resources\views/chat.blade.php ENDPATH**/ ?>