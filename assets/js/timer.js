// Hide the message after 3 seconds
setTimeout(function(){
    var message = document.getElementById('message');
    if (message) {
        message.style.display = 'none';
    }
}, 3000);