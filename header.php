<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<script>
(function(w, d, s, ...args) {
    var div = d.getElementById('aichatbot');

    // Check if chat bot configuration exists in session storage
    var storedConfig = sessionStorage.getItem('chatbotConfig');

    if (!div && storedConfig) {
        // If the chat bot container does not exist, create it
        div = d.createElement('div');
        div.id = 'aichatbot';
        d.body.appendChild(div);
        w.chatbotConfig = JSON.parse(storedConfig);
    } else {
        // Chat bot container already exists or no stored configuration
        w.chatbotConfig = args;
    }

    // Load the chat bot script
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s);
    j.defer = true;
    j.type = 'module';
    j.src = 'https://aichatbot.sendbird.com/index.js';
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', '6B409188-BF9B-4723-8E8D-AAB0AB30A28E', 'onboarding_bot');
</script>
	
</head>
</html>