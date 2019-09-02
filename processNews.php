<?php
require 'dbConnect.php';

if (isset($_GET['Newsid'])) {
    $_ID = $_GET['Newsid'];
    $del = "DELETE FROM News WHERE News_ID = ?";
    $res = $con->prepare($del);
    $res->bind_param("i", $_ID);

    if ($res->execute()) {

        //var_dump($res->num_rows);
        $res->store_result();
        if ($res->affected_rows > 0) {
            header("Location:newsDashboard.php");
        } else {
            header("Location:newsDashboard.php?error=1");
            //    'Error occured while deleting record. Please try again.';
        }
    }
}

if (isset($_GET['Eventsid'])) {
    $_ID = $_GET['Eventsid'];
    $del = "DELETE FROM Events WHERE Event_ID = ?";
    $res = $con->prepare($del);
    $res->bind_param("i", $_ID);

    if ($res->execute()) {

        //var_dump($res->num_rows);
        $res->store_result();
        if ($res->affected_rows > 0) {
            header("Location:eventsDashboard.php");
        } else {
            header("Location:eventsDashboard.php?error=1");
            //    'Error occured while deleting record. Please try again.';
        }
    }
}

if(isset($_POST["btnvalidate"])){
    $valid = true;
    if (empty(trim($_POST['oldpass']))) {
        $valid = false;
        //$serialErr = "Please enter a Serial number";
        header("Location:manageAcct.php?oldErr=1");
    
    } else {
        $GLOBALS['oldpass'] = trim(isset($_POST['oldpass']));
    
        if (empty(trim($_POST['newpass']))) {
            $valid = false;
            header("Location:manageAcct.php?newErr=1");
    
        } else {
            $GLOBALS['newpass'] = trim($_POST["newpass"]);
    
            if (empty(trim($_POST['confnewpass']))) {
                $valid = false;
                header("Location:manageAcct.php?confnewErr=1");
        
            } else {
                $GLOBALS['confnewpass'] = trim($_POST["confnewpass"]);
        
            }
    
        }
    
    }
    
    if ($valid) {
        
        session_start();
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $user = $_SESSION['user'];
    
        $check = "SELECT `Password` FROM Administrator WHERE `Username` = '$user' AND `Password` = '$oldpass'";
    
        $res = $con->query($check);
        if ($res->num_rows == 1) {
            //    echo "<script>alert('ok');</script>";
            if ($_POST['newpass'] === $_POST['confnewpass']) {
                if ($_POST['newpass'] != $_POST['oldpass']) {
    
                    $UPDATE = "UPDATE Administrator SET Password = ? WHERE Username = ? AND Password = ?";
                    $stmt = $con->prepare($UPDATE);
                    $stmt->bind_param("sss", $newpass, $user, $oldpass);
    
                    if ($res = $stmt->execute()) {
                        if ($stmt->affected_rows == 1) {
                            header("Location:manageAcct.php?succ=1");
                        }
                    } else {
                        header("Location:manageAcct.php?err=0");
                    }
                    $stmt->close();
                    $con-->close();
                } else {
                    header('Location:manageAcct.php?err=1');
                    //New password cannot be the same as old passoword
                }
    
            } else {
                header("Location:manageAcct.php?err=2");
                //passwords do not match, make sure that the new passwords match
            }
        } else {
            header("Location:manageAcct.php?err=x0x");
        }
    
    }

}


