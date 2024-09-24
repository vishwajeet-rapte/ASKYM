<?php

function voteAnswer() {
    global $conn;

    $response = array();
    $response['err'] = 1;
    $response['msg'] = "Something went wrong while voting a answer.";
    $voteType = intval($_POST['voteType']);
    $answerID = intval($_POST['answerID']);
    
    if ($voteType > 0) {
        if ($voteType == 1) {           # LIKE
            $sql = "UPDATE answer SET likeCount = (likeCount + 1) WHERE answerID = $answerID AND dislikeCount >= 0 AND status=1";
        }elseif ($voteType == 2) {      # DISLIKE
            $sql = "UPDATE answer SET dislikeCount = (dislikeCount + 1) WHERE answerID = $answerID AND dislikeCount >= 0 AND status=1";
        }
        if (mysqli_query($conn,$sql)) {
            $sql = "UPDATE answer SET aOrder = (
                CASE
                    WHEN (likeCount - dislikeCount) > 0 THEN (likeCount - dislikeCount)
                    ELSE 0
                END
            ) WHERE answerID = $answerID AND dislikeCount >= 0 AND status=1";
            mysqli_query($conn,$sql);

            $response['err'] = 0;
            $response['msg'] = "Your answer is voted.";
        }
    }
    return $response;
}

function submitAnswer() {
    global $conn;

    if (isset($_SESSION['userID']) && $_SESSION['userID'] > 0) {
        $userID = intval($_POST['userID']);
        $questionID = intval($_POST['questionID']);
        $answer = trim(stripslashes(htmlspecialchars($_POST['answer'])));
        $dateAdded = date("Y-m-d");
        $dateModified = date("Y-m-d");

        if ($questionID > 0) {
            $sql = "INSERT INTO answer (userID, questionID, answer, dateAdded, dateModified) VALUES('$userID', '$questionID', '$answer', '$dateAdded', '$dateModified')";
            
            if (mysqli_query($conn,$sql)) {
                header('Location: index.php?showThankYou=1');
            }else {
                echo mysqli_error($conn);
            }
        }
    }
}

function getAnswer($questionID = 0) {
    global $conn;
    $row = array();

    if ($questionID > 0) {
        $sql = "SELECT * FROM answer WHERE questionID = $questionID ORDER BY aOrder DESC";
        
        if ($r = mysqli_query($conn,$sql)) {
            $row = mysqli_fetch_all($r, MYSQLI_ASSOC);
        }else {
            echo mysqli_error($conn);
        }
    }
    return $row;
}

function getQuestionTag($keywordArr = array()) {
    global $conn;
    $data = array();

    if (count($keywordArr) > 0) {
        foreach ($keywordArr as $rowKey => $rowValue) {
            $data[$rowValue[0]] = "#".implode(" #", $rowValue[1]);  //  Convert keywords array to string 
        }
    }
    return $data;
}

function getSubmitedQue() {
    global $conn;
    $data = array();
    $data['err'] = 1;
    $data['msg'] = "No questions are raised by you.";
    $userID = intval($_SESSION['userID']);
    
    if ($userID > 0) {
        $sql = "SELECT id, question FROM quans WHERE userID = $userID ORDER BY id DESC";
        $r = mysqli_query($conn,$sql);
        $row = mysqli_fetch_all($r, MYSQLI_ASSOC);

        if (count($row) > 0) {
            $data['err'] = 0;
            $data['msg'] = "Question found successfully.";
            $data['data'] = $row;
        }
    }else {
        $data['msg'] = "Please login to raised a question.";
    }
    return $data;
}



if (isset($_POST['xAction'])) {
    session_start();
    include('connect.php');
    switch ($_POST['xAction']) {
        case 'voteAnswer':
        $res = voteAnswer();
        break;
        case 'submitAnswer':
        submitAnswer();
        break;
    }
    echo json_encode($res);
}
?>