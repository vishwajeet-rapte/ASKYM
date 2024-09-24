<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Ask YM  </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/ask-ym.png" >
    </head>
    
    <body id="_4">
       
        <!-- navigation bar -->
        <a href="index.php">
                <div id="log">
                <div id="i"></div><img src="images\AYMlong.PNG" width="240" height="40" />
            </div>
        </a>
        <ul id="nav-bar">
            <a href="index.php"><li>Home</li></a>
            <a href="contacts.php"><li id="home">Contact</li></a>
            <a href="my-question.php"><li>My Question</li></a>
            <a href="ask.php"><li>Ask Question</li></a>
            <?php 
                if(! isset($_SESSION['user'])){
            ?>
            <a href="login.php"><li>Log In</li></a>
            <a href="signup.php"><li>Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>
       
        

       

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Team Page Script</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
       

<center>
  
  
<br /><br />

<ul id="member-list" class="member-list">
                        <li>
                                    <img class="photo" src="images/amit.jpg">
                                <div class="title">Amit Khebade</div>
                <p>Developer, PHP & MySQL</p>
                <p>+91 7709655499</p>
                <p><a href="mailto:khebadeamit@gmail.com">khebadeamit@gmail.com</a></p>
                <p><a href="http://www.mysql.com" target="_blank">http://www.mysql.com</a></p>
                <ul class="social-link">
                   <li><a href="https://www.linkedin.com/in/amitkhebade/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>                   <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>                   <li><a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>                                   </ul>
            </li>
                        <li>
                                    <img class="photo" src="images/vishwajeet.jpg">
                                <div class="title">Vishwajeet Rapte</div>
                <p>Junior Developer PHP</p>
                <p>+91 9049778382</p>
                <p><a href="mailto:raptevishwajeet@gmail.com">raptevishwajeet@gmail.com</a></p>
                <p><a href="http://www.yahoo.com" target="_blank">http://www.yahoo.com</a></p>
                <ul class="social-link">
                   <li><a href="https://www.linkedin.com/in/vishwajeet-rapte/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>                                      <li><a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>                   <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>                </ul>
            </li>
                        <li>
                                    <img class="photo" src="images/sawani.jpg">
                                <div class="title">Sawani Sapkal</div>
                <p>Junior Developer, MySQL</p>
                <p>+91 9075579043</p>
                <p><a href="mailto:sawanisapkal@gmail.com">sawanisapkal@gmail.com</a></p>
                <p><a href="http://www.ebay.com" target="_blank">http://www.ebay.com</a></p>
                <ul class="social-link">
                <a href="https://www.linkedin.com/in/sawanisapkal/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>                   <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-square"></i></a></li>                   <li><a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>                   <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>                </ul>
            </li>
                        <li>
                                    <img class="photo" src="images/shaheen.jpg">
                                <div class="title">Shaheen Yasmin</div>
                <p>Test Engineer, Selenium</p>
                <p>+91 7420936829</p>
                <p><a href="mailto:shaheennovels@gmail.com">shaheennovels@gmail.com</a></p>
                <p><a href="http://www.google.com" target="_blank">http://www.google.com</a></p>
                <ul class="social-link">
                   <li><a href="https://www.linkedin.com/in/shaheen-yasmin-087740170/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>                   <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-square"></i></a></li>                   <li><a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>                   <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>                </ul>
            </li>
                    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
        </center>
    </body>
</html>


        <!-- Footer -->
        <div id="footer">
            &copy; 2021 &bull; AskYM Team.
        </div>
        

    </body>
    
</html>