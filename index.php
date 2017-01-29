<!DOCTYPE html>
<html>
<head>
	<title>C.R.A.P Eric Zorn ICM 505</title>
	<meta charset="utf-8">
    <meta lang="en">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Personal CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Italiana|Lato:300" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>

    <!-- NAVBAR -->
    <?php include 'inc/navbar.php';?>
    


    <!-- Actual Body Beginning -->

    <a href="index.php" target="_blank"><img id="logo" class="logo" src="images/falconPizzaLogo.png" alt="Logo"></a>
    
    <div class="container col-lg">

        <h1 class="text-center titleText">Welcome to Falcon Pizza | Hamden,CT 06518</h1>

        <br>


        <div class="subHeader">
            <p class="subTitleText container">Welcome to Falcon Pizza, Formerly known as Bobcats Pizza, home of the legendary gourmet pizza.We are located on 3394 Whitney Avenue in Hamden, CT and proudly serving high quality food that is prepared by using fresh ingredients by our expert staff. 

                <br>
                <a href="about.php" class="linkText"><strong>Read More</strong></a></p>

                <!-- Left Sidebar -->
            </div>


            <?php include 'inc/social.php';?>




            


            <!-- Slider -->
            <div id="carouselExampleSlidesOnly" class="carousel slide sliderImages container container-fluid" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="images/slider/sliderImg3.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block img-fluid" src="images/slider/sliderImg5.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                  <img class="d-block img-fluid" src="images/slider/sliderImg6.jpg" alt="Third slide">
              </div>
          </div>
      </div>


      <!-- Hours of Operation -->
      <div class="list-group hoursOperation container">
        <a href="#" class="list-group-item list-group-item-action">Friday | 11AM–3AM</a>
        <a href="#" class="list-group-item list-group-item-action">Saturday | 11AM–3AM</a>
        <a href="#" class="list-group-item list-group-item-action">Sunday | 11AM–2AM</a>
        <a href="#" class="list-group-item list-group-item-action">Monday | 11AM–2AM</a>
        <a href="#" class="list-group-item list-group-item-action">Tuesday | 11AM–2AM</a>
        <a href="#" class="list-group-item list-group-item-action">Wednesday | 11AM–2AM</a>
        <a href="#" class="list-group-item list-group-item-action">Thursday | 11AM–2AM</a>
    </div>



    <br><br>
    <hr>
    <!-- Specials -->
    <h2 class="text-center specialsTitle">Our Current Specials</h2>
    <img class="text-center container" src="images/specialsImage.png" alt="Specials">
    





</div>




<?php include 'inc/footer.php';?>








<!-- Bootstrap 4 JavaScript and jQuery -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>