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

  
<style>
                body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
            min-height: 100vh;
            background-color: #f8f9fa; /* Set background color */
        }

        #container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
            padding: 20px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
            background-color: #fff; /* Set background color */
        }

        header {
            background-color: #007bff; /* Set background color */
            color: #fff; /* Set text color */
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: bold; /* Add font weight */
        }

        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }

        .button {
            width: calc(48% - 20px);
            margin-bottom: 20px;
            box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: box-shadow 0.3s;
            border-radius: 10px;
            padding: 20px;
            font-size: 18px;
            line-height: 1.5;
            text-align: center;
            background-color: #007bff;
            color: #fff;
            border: none;
            outline: none;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .button:focus {
            box-shadow: 0 0 10px 0 rgba(0, 122, 255, 0.5);
        }

        .info-box {
            display: none;
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            border-radius: 10px;
            overflow-y: auto;
            max-height: 80vh;
        }

        .info-box h3 {
            margin: 0;
            margin-bottom: 10px;
        }

        .info-box p {
            margin: 0;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }


        

        @media (max-width: 768px) {
            .button {
                width: 100%;
                margin-right: 0;
            }
        }
    </style>

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
  <main>
            <button class="button" onclick="openPage('meditation.php')">Meditation</button>

            <button class="button" onclick="openPage('yoga.php')">Yoga</button>

            <button class="button" onclick="openPage('mental_health.php')">Mental Health Topics</button>

            <button class="button" onclick="openPage('nutrition.php')">Nutrition and Well-being</button>

            <button class="button" onclick="openPage('exercise.php')">Exercise</button>

            <button class="button" onclick="openPage('sleep.php')">Sleep</button>
        </main>
        </nav>
        <div class="info-box" id="info-box">
            <span class="close-button" onclick="closeInfoBox()">&times;</span>
            <h3 id="info-title"></h3>
            <p id="info-content"></p>
        </div>
        </div>

<script>
    function openPage(page) {
        window.location.href = page;
    }

    function closeInfoBox() {
        const infoBox = document.getElementById("info-box");

        infoBox.style.display = "none";

        document.querySelectorAll(".button").forEach(function(button) {
            button.style.boxShadow = "0 0 5px 0 rgba(0, 0, 0, 0.2)";
        });

        document.querySelectorAll("footer").forEach(function(footer) {
            footer.style.pointerEvents = "auto";
            footer.style.opacity = "1";
        });
    }
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>