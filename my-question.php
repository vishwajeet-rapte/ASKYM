<?php
    session_start();
    include('connect.php');
    include('action.php');
    if(!isset($_SESSION['user']))
        header("location: login.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Ask YM </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/ask-ym.png" >
        <!-- Sripts -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <style>
            textarea{
                display: none;
                width: 300px;
                height: 50px;
                background: #333;
                color: #ddd;
                padding: 10px;
                margin: 5px 0 -14px; 
            }
            .ans_sub{
                display: block;
                padding: 0 10px;
                height: 30px;
                line-height: 30px;
            }
            .pop{
                display: none;
                text-align: center;
                margin: 195.5px auto;
                font-size: 12px;
            }
        </style>
    </head>
    <body id="_3">
        <!-- navigation bar -->
        <a href="index.php">
                <div id="log">
                <div id="i"></div><img src="images\AYMlong.PNG" width="240" height="40" />
            </div>
        </a>
        <ul id="nav-bar">
            <a href="index.php"><li>Home</li></a>
            <a href="contacts.php"><li>Contact</li></a>
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
        
         <!-- content -->
         <div id="content">
                <center>
                    <div class='open' style='display: block; height: auto; margin: 60px auto -135px;'>
                        
                        <div id='topic'>
                            <h2 id='topic-head' style="font-weight: normal; border:none; font-size: 22px;">Your asked questions</h2>
                        </div>

                        <?php 
                            $mySubmitedQue = getSubmitedQue();

                            if ($mySubmitedQue['err'] == 0) {
                                foreach ($mySubmitedQue['data'] as $key => $value) { 
                        ?>
                        
                        <div id="qa-block">
                            <div class="question">
                                <div id="Q">Q.</div><?php echo $value['question']; ?>
                            </div>
                        </div>
                        <?php 
                                } 
                            }else { 
                        ?>
                        <div id="qa-block">
                            <div class="question">
                                <div id="Q">Q.</div><?php echo $mySubmitedQue['msg']; ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </center>
        </div>
        
        <!-- Footer -->
        <div id="footer" style="position: fixed; left: 0; bottom:0; width: 100% ">
            
            &copy; 2021 &bull; AskYM Team.
        </div>
        </div>
    </body>
</html>