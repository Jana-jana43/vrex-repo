<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Chat Support</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>

       
        /* WhatsApp Floating Button */
        .whatsapp-float {position: fixed;bottom: 30px;left: 30px;z-index: 999;}
        .whatsapp-button {width: 60px;height: 60px;background: linear-gradient(135deg, #74128cc7, #4b25d3cc);border-radius: 50%;display: flex;align-items: center;justify-content: center;cursor: pointer;box-shadow: 0 4px 20px rgba(147, 37, 211, 0.4);transition: all 0.3s ease;animation: pulse 2s infinite;position: relative;}
        .whatsapp-button:hover {transform: scale(1.1);box-shadow: 0 6px 30px rgba(191, 37, 211, 0.6);}
        .whatsapp-button i {color: white;font-size: 30px;}
        @keyframes pulse {            
            0%, 100% {box-shadow: 0 4px 20px rgba(176, 37, 211, 0.4);}
            50% {box-shadow: 0 4px 30px rgba(176, 37, 211, 0.7);}
        }
       
        /* Notification Badge */
        /* .notification-badge {position: absolute;top: -5px;right: -5px;background: #ff4444;color: white;width: 24px;height: 24px;border-radius: 50%;display: flex;align-items: center;justify-content: center;font-size: 12px;font-weight: bold;animation: bounce 1s infinite;}
            @keyframes bounce {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-5px); }
        } */
       
        /* Chat Window */
        .chat-window {position: fixed;bottom: 100px;right: 30px;width: 380px;height: 550px;background: white;border-radius: 15px;box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);z-index: 999;opacity: 0;visibility: hidden;transform: scale(0.8) translateY(20px);transition: all 0.3s ease;display: flex;flex-direction: column;overflow: hidden;}
        .chat-window.active {opacity: 1;visibility: visible;transform: scale(1) translateY(0);}
       
        /* Chat Header */
        /* .chat-header {background: linear-gradient(135deg, #74128c, #4b25d3);padding: 15px 20px;display: flex;align-items: center;gap: 12px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);}
        .chat-avatar {width: 45px;height: 45px;border-radius: 50%;background: linear-gradient(135deg, #4b25d3, #74128c);display: flex;align-items: center;justify-content: center;flex-shrink: 0;}
        .chat-avatar i {color: white;font-size: 22px;}
        .chat-header-info {flex: 1;}
        .chat-header-info h3 {color: white;font-size: 16px;margin-bottom: 3px;}
        .online-status {color: #d1f4cc;font-size: 12px;display: flex;align-items: center;gap: 5px;}
        .online-dot {width: 8px;height: 8px;background: #4CAF50;border-radius: 50%;animation: blink 2s infinite;}
            @keyframes blink {
                0%, 100% { opacity: 1; }
                50% { opacity: 0.3; }
            }
        .close-chat {color: white;cursor: pointer;font-size: 20px;transition: transform 0.2s;padding: 5px;}
        .close-chat:hover {transform: rotate(90deg);} */
       
        /* Chat Messages Area */
        /* .chat-messages {flex: 1;padding: 20px;background: #E5DDD5;background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"><rect fill="%23E5DDD5" width="100" height="100"/><circle fill="%23D9D1CA" cx="50" cy="50" r="1" opacity="0.3"/></svg>');overflow-y: auto;display: flex;flex-direction: column;gap: 10px;} */
       
        /* Scrollbar Styling */
        /* .chat-messages::-webkit-scrollbar {width: 6px;}
        .chat-messages::-webkit-scrollbar-track {background: transparent;}
        .chat-messages::-webkit-scrollbar-thumb {background: #ccc;border-radius: 10px;} */
       
        /* Message Bubbles */
        /* .message {display: flex;margin-bottom: 5px;animation: messageSlide 0.3s ease;}
        @keyframes messageSlide {
            from {opacity: 0;transform: translateY(10px);}
            to {opacity: 1;transform: translateY(0);}
        }
        .message.received {justify-content: flex-start;}
        .message.sent {justify-content: flex-end;}
        .message-content {max-width: 75%;padding: 8px 12px;border-radius: 8px;position: relative;word-wrap: break-word;}
        .message.received .message-content {background: white;border-radius: 0 8px 8px 8px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);}
        .message.sent .message-content {background: #DCF8C6;border-radius: 8px 0 8px 8px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);}
        .message-text {color: #303030;font-size: 14px;line-height: 1.4;margin-bottom: 4px;}
        .message-time {font-size: 11px;color: #667781;text-align: right;display: flex;align-items: center;justify-content: flex-end;gap: 3px;}
        .message.sent .message-time i {color: #4FC3F7;font-size: 12px;}
        */
        /* Typing Indicator */
        /* .typing-indicator {display: none;padding: 8px 12px;background: rgba(255, 255, 255, 0);border-radius: 8px;width: fit-content;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);}
        .typing-indicator.active {display: block;}
        .typing-dots {display: flex;gap: 4px;align-items: center;}
        .typing-dots span {width: 8px;height: 8px;background: #90949c;border-radius: 50%;animation: typing 1.4s infinite;}
        .typing-dots span:nth-child(2) {animation-delay: 0.2s;}
        .typing-dots span:nth-child(3) {animation-delay: 0.4s;} */
        /* @keyframes typing {            0%, 60%, 100% {transform: translateY(0);opacity: 0.7;}
            30% {transform: translateY(-10px);opacity: 1;}
            } */
       
            /* Quic k Replies */
        /* .quick-replies {display: flex;flex-wrap: wrap;gap: 8px;padding: 0 20px 10px;background: #E5DDD5;}
        .quick-reply {padding: 8px 15px;background: white;border: 1px solid #ddd;border-radius: 20px;font-size: 13px;cursor: pointer;transition: all 0.2s;white-space: nowrap;}
        .quick-reply:hover {background: #a225d3;color: white;border-color: #8d25d3;transform: translateY(-2px);} */
       
        /* Chat Input */
        /* .chat-input-area {padding: 10px 15px;background: #F0F0F0;display: flex;gap: 10px;align-items: center;}
        .chat-input {flex: 1;padding: 10px 15px;border: none;border-radius: 25px;background: white;font-size: 14px;outline: none;font-family: inherit;}
        .chat-input:focus {box-shadow: 0 0 0 2px rgba(37, 211, 102, 0.3);}
        .send-button {width: 45px;height: 45px;background: #7025d3;border: none;border-radius: 50%;color: white;cursor: pointer;display: flex;align-items: center;justify-content: center;transition: all 0.3s;flex-shrink: 0;}
        .send-button:hover {background: #5b128c;transform: scale(1.1);}
        .send-button:active {transform: scale(0.95);}
        .send-button i {font-size: 18px;} */
       
        /* Emoji Button */
        /* .emoji-button {width: 40px;height: 40px;background: transparent;border: none;cursor: pointer;font-size: 24px;transition: transform 0.2s;}
        .emoji-button:hover {transform: scale(1.2);} */

       
        /* Responsive */        
        @media (max-width: 480px) {
            .chat-window {width: calc(100vw - 20px);height: calc(100vh - 120px);right: 10px;bottom: 80px;}
            .whatsapp-float {bottom: 20px;right: 20px;}
            .whatsapp-button {width: 55px;height: 55px;}
            .whatsapp-button i {font-size: 26px;}
            }
       
            /* Welcome Screen */
        .welcome-screen {display: flex;flex-direction: column;align-items: center;justify-content: center;padding: 40px 20px;text-align: center;}
        .welcome-screen i {font-size: 60px;color: #2570d3;margin-bottom: 20px;}
        .welcome-screen h3 {color: #303030;margin-bottom: 10px;}
        .welcome-screen p {color: #667781;font-size: 14px;margin-bottom: 20px;}
    </style>
</head>
<body>

    <!-- WhatsApp Floating Button -->
    <div class="whatsapp-float">
        <div class="whatsapp-button" id="whatsappBtn">
            <a href="https://wa.me/916379880849" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-whatsapp"></i>
            </a>
            <!-- <span class="notification-badge" id="badge">1</span> -->
        </div>

        <!-- Chat Window -->
        <div class="chat-window" id="chatWindow">
            <!-- Header -->
            <!-- <div class="chat-header">
                <div class="chat-avatar">
                    <i class="fas fa-headset"></i>
                </div>
                <div class="chat-header-info">
                    <h3>Support Team</h3>
                    <div class="online-status">
                        <span class="online-dot"></span>
                        <span>Online</span>
                    </div>
                </div>
                <i class="fas fa-times close-chat" id="closeChat"></i> -->
            </div>

            <!-- Messages Area -->
            <div class="chat-messages" id="chatMessages">
                <!-- Welcome message will be added here -->
            </div>

            <!-- Typing Indicator -->
            <!-- <div class="typing-indicator" id="typingIndicator">
                <div class="typing-dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div> -->

            <!-- Quick Replies -->
            <!-- <div class="quick-replies" id="quickReplies">
                <button class="quick-reply" data-msg="Hi! I need help">👋 Need Help</button>
                <button class="quick-reply" data-msg="Product information">💼 Products</button>
                <button class="quick-reply" data-msg="Pricing details">💰 Pricing</button>
                <button class="quick-reply" data-msg="Talk to support">🎧 Support</button>
            </div> -->

            <!-- Input Area -->
            <!-- <div class="chat-input-area">
                <button class="emoji-button">😊</button>
                <input 
                    type="text" 
                    class="chat-input" 
                    id="messageInput" 
                    placeholder="Type a message..."
                    autocomplete="off"
                >
                <button class="send-button" id="sendButton">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div> -->
<!-- 
    <script>
        const CONFIG = {
            phoneNumber: '9150428240', 
            autoReplyDelay: 1000,
            companyName: 'Support Team'
        };

        // Elements
        const whatsappBtn = document.getElementById('whatsappBtn');
        const chatWindow = document.getElementById('chatWindow');
        const closeChat = document.getElementById('closeChat');
        const chatMessages = document.getElementById('chatMessages');
        const messageInput = document.getElementById('messageInput');
        const sendButton = document.getElementById('sendButton');
        const typingIndicator = document.getElementById('typingIndicator');
        const quickReplies = document.querySelectorAll('.quick-reply');
        const badge = document.getElementById('badge');

        // State
        let isFirstMessage = true;

        // Initialize chat
        function initChat() {
            addMessage('received', '👋 Hello! Welcome to our support chat. How can we help you today?');
        }

        // Toggle chat window
        whatsappBtn.addEventListener('click', () => {
            chatWindow.classList.toggle('active');
            if (chatWindow.classList.contains('active')) {
                badge.style.display = 'none';
                messageInput.focus();
                if (isFirstMessage) {
                    initChat();
                    isFirstMessage = false;
                }
            }
        });

        // Close chat
        closeChat.addEventListener('click', (e) => {
            e.stopPropagation();
            chatWindow.classList.remove('active');
        });

        // Add message to chat
        function addMessage(type, text) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${type}`;
            
            const currentTime = new Date().toLocaleTimeString('en-IN', { 
                hour: '2-digit', 
                minute: '2-digit' 
            });

            messageDiv.innerHTML = `
                <div class="message-content">
                    <div class="message-text">${text}</div>
                    <div class="message-time">
                        ${currentTime}
                        ${type === 'sent' ? '<i class="fas fa-check-double"></i>' : ''}
                    </div>
                </div>
            `;

            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        // Send message
        function sendMessage() {
            const message = messageInput.value.trim();
            
            if (message === '') return;

            // Add user message
            addMessage('sent', message);
            messageInput.value = '';

            // Show typing indicator
            typingIndicator.classList.add('active');
            chatMessages.scrollTop = chatMessages.scrollHeight;

            // Auto reply after delay
            setTimeout(() => {
                typingIndicator.classList.remove('active');
                botReply(message);
            }, CONFIG.autoReplyDelay);
        }

        // Bot auto-reply logic
        function botReply(userMessage) {
            const msg = userMessage.toLowerCase();
            let reply = '';

            if (msg.includes('hello') || msg.includes('hi')) {
                reply = 'Hello! 👋 How can I assist you today?';
            } else if (msg.includes('price') || msg.includes('cost')) {
                reply = 'I\'d be happy to help with pricing! Could you tell me which product you\'re interested in?';
            } else if (msg.includes('product')) {
                reply = 'We have a wide range of products. What type of product are you looking for?';
            } else if (msg.includes('help') || msg.includes('support')) {
                reply = 'I\'m here to help! What specific issue are you facing?';
            } else if (msg.includes('thank')) {
                reply = 'You\'re welcome! 😊 Is there anything else I can help you with?';
            } else if (msg.includes('bye')) {
                reply = 'Thank you for chatting with us! Feel free to reach out anytime. Have a great day! 👋';
            } else {
                reply = 'Thank you for your message! A support agent will get back to you shortly. Meanwhile, would you like to continue on WhatsApp?';
                // Show WhatsApp redirect option
                setTimeout(() => {
                    addMessage('received', `<a href="https://wa.me/${CONFIG.phoneNumber}?text=${encodeURIComponent(userMessage)}" target="_blank" style="color: #25D366; text-decoration: underline;">Click here to continue on WhatsApp</a>`);
                }, 1500);
            }

            addMessage('received', reply);
        }

        // Send button click
        sendButton.addEventListener('click', sendMessage);

        // Enter key to send
        messageInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Quick replies
        quickReplies.forEach(btn => {
            btn.addEventListener('click', () => {
                const message = btn.getAttribute('data-msg');
                messageInput.value = message;
                sendMessage();
            });
        });

        // Close chat when clicking outside
        document.addEventListener('click', (e) => {
            if (!chatWindow.contains(e.target) && !whatsappBtn.contains(e.target)) {
                chatWindow.classList.remove('active');
            }
        });

        // Auto show notification
        setTimeout(() => {
            if (!chatWindow.classList.contains('active')) {
                badge.style.display = 'flex';
            }
        }, 3000);
    </script> -->

</body>
</html>