<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> MEDI+ </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <style >
      .btn-outline-light:hover{
        color: #25bef7;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
      }
    </style>
    <title>Exercise</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
            overflow: hidden; /* Hide scroll bars */
            position: relative; /* Make the body relative for overlay */
        }

        #info {
            width: 80%;
            max-width: 800px;
            text-align: justify;
            margin-bottom: 20px;
            z-index: 2; /* Ensure the content is above overlay */
            position: relative; /* Add relative positioning */
        }

        #timer-container {
            position: relative;
            text-align: center; /* Align the timer to the center */
            z-index: 2; /* Ensure the timer is above overlay */
        }

        #timer {
            font-size: 24px;
            margin-bottom: 20px;
        }

        #startButton,
        #stopButton {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            outline: none;
            z-index: 2; /* Ensure buttons are above overlay */
        }

        #stopButton {
            background-color: #dc3545;
        }

        #overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(0, 123, 255, 0.3), transparent 70%); /* Light blue pulse color */
            animation: pulse 2s ease-in-out infinite; /* Pulse animation */
            z-index: 1; /* Ensure the overlay is below content */
            pointer-events: none; /* Ignore pointer events */
            display: none; /* Initially hidden */
        }

        @keyframes pulse {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(3);
                opacity: 0;
            }
        }

        .active-timer #overlay {
            display: block; /* Show overlay when timer is active */
        }
    </style>
</head>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Enter contact number" aria-label="Search" name="contact">
      <input type="submit" class="btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
    </form>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
    <div id="info">
        <h2>Exercise</h2>
        <p>Regular exercise is important for maintaining physical fitness and overall health. It can help to increase your energy levels, improve your mood, and reduce the risk of chronic diseases.</p>
        <p>Some common types of exercise include:</p>
        <ul>
            <li>Cardiovascular Exercises (e.g., running, swimming)</li>
            <li>Strength Training (e.g., weightlifting)</li>
            <li>Flexibility Exercises (e.g., yoga)</li>
            <li>Balance Exercises (e.g., tai chi)</li>
            <li>High-Intensity Interval Training (HIIT)</li>
        </ul>
    </div>

    <div id="timer-container">
        <div id="timer">05:00</div>
        <button id="startButton">Start Exercise</button>
        <button id="stopButton">Stop Exercise</button>
    </div>

    <div id="overlay"></div> <!-- Overlay element -->
    
    <script>
        let timerInterval;
        let seconds = 0;
        let minutes = 5; // Set minutes to 5 for 5-minute countdown

        const timerDisplay = document.getElementById('timer');
        const startButton = document.getElementById('startButton');
        const stopButton = document.getElementById('stopButton');
        const overlay = document.getElementById('overlay');

        startButton.addEventListener('click', startTimer);
        stopButton.addEventListener('click', stopTimer);

        function startTimer() {
            timerInterval = setInterval(updateTimer, 1000);
            startButton.disabled = true;
            document.body.classList.add('active-timer'); // Add active-timer class to body
        }

        function stopTimer() {
            clearInterval(timerInterval);
            startButton.disabled = false;
            seconds = 0;
            minutes = 5; // Reset minutes to 5
            updateTimerDisplay();
            document.body.classList.remove('active-timer'); // Remove active-timer class from body
        }

        function updateTimer() {
            if (seconds === 0 && minutes === 0) {
                stopTimer();
                return;
            }
            if (seconds === 0) {
                seconds = 59;
                minutes--;
            } else {
                seconds--;
            }
            updateTimerDisplay();
        }

        function updateTimerDisplay() {
            const displayMinutes = minutes < 10 ? '0' + minutes : minutes;
            const displaySeconds = seconds < 10 ? '0' + seconds : seconds;
            timerDisplay.textContent = displayMinutes + ':' + displaySeconds;
        }
    </script>
</body>
</html>
