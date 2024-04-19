import './bootstrap';

import './dash-chart';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Plaid

$(".link-account").click(function() {
    createLinkToken();
});

function createLinkToken() {
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        url: "/createLinkToken",
        type: "GET",
        dataType: "json",
        success: function (response) {
            const data = JSON.parse(response.data);
            console.log('Link Token: ' + data.link_token);
            linkPlaidAccount(data.link_token);
        },
        error: function (err) {
            console.log('Error creating link token.');
            const errMsg = JSON.parse(err);
            alert(err.error_message);
            console.error("Error creating link token: ", err);
        }
    });
}

function linkPlaidAccount(linkToken) {
    var linkHandler = Plaid.create({
        token: linkToken,
        onSuccess: function (public_token, metadata) {
            var body = {
                public_token: public_token,
                accounts: metadata.accounts,
                institution: metadata.institution,
                link_session_id: metadata.link_session_id,
                link_token: linkToken
            };
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                url: "/storePlaidAccount",
                type: "POST",
                data: body,
                dataType: "json",
                success: function (data) {
                    getInvestmentHoldings(data.item_id);
                },
                error: function (err) {
                    console.log('Error linking Plaid account.');
                    const errMsg = JSON.parse(err);
                    console.error("Error linking Plaid account: ", err);
                }
            });
        },
        onExit: function (err, metadata) {
            console.log("linkBankAccount error=", err, metadata);
            const errMsg = JSON.parse(err);
                    console.error("Error linking Plaid account: ", err);

            linkHandler.destroy();
            if (metadata.link_session_id == null && metadata.status == "requires_credentials") {
                createLinkToken();
            }
        }
    });
    linkHandler.open();
}
function getInvestmentHoldings(itemId) {
    var body = {
        itemId: itemId,
    };
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        url: "/getInvestmentHoldings",
        type: "POST",
        data: body,
        dataType: "json",
        success: function (data) {
            console.log("Plaid holdings successfully imported.");
        },
        error: function (err) {
            const errMsg = JSON.parse(err);
            alert(err.error_message);
            console.error("Error importing holdings from Plaid: ", err);
        }
    });
}


// Chatbot - OpenAI

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

document.getElementById('chatForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const messageInput = document.getElementById('messageInput');
    const chat = document.getElementById('chat');

    // Example: Append message to chat
    const newMessage = document.createElement('div');
    newMessage.textContent = messageInput.value;
    newMessage.className = 'bg-white p-2 rounded shadow-sm';
    chat.appendChild(newMessage);

    // Clear input
    messageInput.value = '';
});


// Chatbot 



