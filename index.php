<?php
    session_start();
    include('connect.php');
    include('action.php');

    // Show thank you page after successfull of answer submission
    if (isset($_GET['showThankYou']) && $_GET['showThankYou'] == 1) {
        echo "<style>#searchbox{display: none;} #tb{display: block;}</style>";
    }
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
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <style>
            textarea{
                display: none;
                width: 300px;
                height: 50px;
                background: #333;
                color: #ddd;
                padding: 10px;
                margin: 5px 0 0px; 
            }
            .ans_sub{
                display: none;
                padding: 0 10px;
                height: 30px;
                line-height: 30px;
                margin-bottom: 30px;
            }
            .pop{
                display: none;
                text-align: center;
                margin: 151.5px auto;
                font-size: 12px;
            }
        </style>
    </head>
    
    <body id="_1">
        
        <!-- navigation bar -->
        <a href="index.php">
                <div id="log">
                <div id="i"></div><img src="images\AYMlong.PNG" width="240" height="40" />
            </div>
        </a>
        <ul id="nav-bar">
            <a href="index.php"><li id="home">Home</li></a>
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
            <div id="searchbox">
                <center>
                    <div class="heading">
                        <h class="logo"><img src="images\AYM.PNG" width="497" height="265" /></h>
                    </div>
                    <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data" >
                        <input name="text" id="search" type="text" title="Question your Answers" placeholder="Looking for Answers to Some Question, simply just search here... ">
                        <i class="material-icons" id="sign">search</i>
                        <input name="submit" type="submit" value="Search" class="up-in" id="qsearch">
                    </form>
                </center>
            </div>
            <div class="pop" id="ta">
                <h1><b style="font-size: 1.5em; margin: -60px auto 10px; display: block;">:(</b>Sorry, Your search didn't match any documents.</h1>
            </div>
            <div class="pop" id="tb">
                <center><h1><b style="font-size: 1.5em; margin: -60px auto 10px; display: block;">:)</b>Thank You For Your Answer.</h1></center>
            </div>
            <?php

                if(isset($_POST["submit"])) {
                    function valid($data){
                        $data = trim(stripslashes(htmlspecialchars($data)));
                        return $data;
                    }

                    function check($data){
                        $data = strtolower($data);
                        if( $data != "what" && $data != "how" && $data != "who" && $data != "whom" && $data != "when" && $data != "why" && $data != "which" && $data != "where" && $data != "whose" && $data != "is" && $data != "am" && $data != "are" && $data != "do" && $data != "don't" && $data != "does" && $data != "did" && $data != "done" && $data != "was" && $data != "were" && $data != "has" && $data != "have" && $data != "will" && $data != "shall" && $data != "the" && $data != "i" && $data != "a" && $data != "an" && $data != "we" && $data != "he" && $data != "she" && $data != "")
                            return 1;
                        return 0;
                    }
                    $text = valid($_POST["text"]);
                    if($text == NULL){
                        echo "<script>window.alert('Please Enter something to search.');</script>";
                    }
                    else{
                        $text = preg_replace("/[^A-Za-z0-9]/"," ",$text);
                        $query = "select * from quans where question like '%$text%'";

                        if(!$query){
                            echo "<script>window.alert('Search appropriate question.');</script>";
                        }
                        else{
                            $r = mysqli_query($conn, $query);

                            if(mysqli_error($conn))
                                echo "<script>window.alert('Some Error Occured. Try Again or Contact Us.');</script>";
                            else if(mysqli_num_rows($r)>0) {
            ?>
                <style>.open{display: block;} </style>
                <center>
                    <div class='open' style='height: auto; margin: 60px auto -135px;'>
                        
                        <div id='topic'>
                            <h2 id='topic-head' style="font-weight: normal; border:none; font-size: 22px;">Your Search Results for '<?php echo $text; ?>' are :</h2>
                        </div>

                        <?php 
                            $n = 1; 

                            $rows = mysqli_fetch_all($r, MYSQLI_ASSOC);
                            $questionArr = base64_encode(json_encode($rows));

                            $keywordOutput = shell_exec('python test.py ' . $questionArr);
                            $keywordArr = json_decode($keywordOutput);

                            $questionTag = getQuestionTag($keywordArr);
                            
                            foreach ($rows as $key => $row) { 
                                $answers = getAnswer($row["id"]);
                                $arg1 = $row['question'];
                        ?>
                        
                        <div id="qa-block">
                            <div class="question">
                                <div id="Q">Q.</div><?php echo $row["question"]." ".$questionTag[$row['id']]."<small id='sml'>Asked By: @".$row['askedby']."</small>"; ?>
                            </div>
                            <div class="answer">
                                <ul style="list-style-type:none;">
                                <?php 
                                    if (count($answers) > 0) {
                                        $counter = 0;
                                        foreach ($answers as $key => $value) {
                                ?>
                                    <li>
                                        <p><?php echo ++$counter. ") ".$value['answer']; ?></p>
                                        <a href="javascript:void(0);" class="like-answer" rel="<?php echo $value['answerID']; ?>"><span><img src="images\like.PNG" width="90" height="30" /></span></a>
                                        <a href="javascript:void(0);" class="dislike-answer" rel="<?php echo $value['answerID']; ?>"><span><img src="images\dislike.PNG" width="90" height="30" /> </span></a>
                                    </li>
                                <?php } } ?>
                                </ul>
                                <form class="submit-answer-form" id="f<?php echo $n; ?>" style="margin-bottom: -25px;" action="<?php /* echo htmlspecialchars( $_SERVER["PHP_SELF"] );  */?> action.php" method="post" enctype="multipart/form-data">
                                <?php if (isset($_SESSION['userID']) && $_SESSION['userID'] > 0) { ?>
                                   <input type="button" style="margin-bottom: 5px;" value="Click here to answer." id="ans_b" class="my-answer" >
                                <?php } ?>
                                    <br>
                                    <textarea id="area<?php echo $n; ?>" name="answer" placeholder="Your Answer..."></textarea>
                                    <input type="hidden" name="userID" value="<?php echo $_SESSION["userID"]; ?>">
                                    <input type="hidden" name="questionID" value="<?php echo $row["id"]; ?>">
                                    <input type="hidden" name="xAction" value="submitAnswer">
                                    <br>
                                    
                                    <input type="submit" name="ansubmit" value="Submit" class="up-in ans_sub" id="ar<?php echo $n; ?>">
                                    
                                </form>
                                
       
                            </div>
                        </div>
                            <?php $n++; } ?>
                    </div>
                </center>
            <?php     
                            } // if for no. of rows
                            else{
                                echo '<script type="text/javascript" language="Javascript">window.open("http://www.google.com/search?q='.$text.'", "_blank");</script>';
                            }
                        }
                    } // a non null if
                } // isset for submit
            ?>
        </div>
        <!-- Footer -->
        <div id="footer">
            &copy; 2021 &bull; AskYM Team.
        </div>
        
    </body>
    <script>
        $(document).ready(function () {
            $(".like-answer").on("click", function () {
                let answerID = $(this).attr("rel");

                $.ajax({
                    method: "POST",
                    url: "index.php",
                    dataType: "html",
                    data: {"xAction": "voteAnswer", voteType: 1, answerID: answerID},
                });
            });

            $(".dislike-answer").on("click", function () {
                let answerID = $(this).attr("rel");

                $.ajax({
                    method: "POST",
                    url: "index.php",
                    dataType: "json",
                    data: {"xAction": "voteAnswer", voteType: 2, answerID: answerID},
                });
            });

            $(".my-answer").click(function (e) { 
                $(this).closest(".submit-answer-form").find("textarea, .ans_sub").css({"display": "block", });
            });
        });

    </script>
</html>