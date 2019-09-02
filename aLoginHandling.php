<?php
require_once 'dbConnect.php';
session_start();

$user = $pass = "";
$valid = true;
$authentication = "SELECT `Username`, `Password` FROM `Administrator` WHERE `Username` = ?";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["txtUser"]))) {
        $valid = false;
       
        header("Location:adminLogin.php?userErr=1");

    } else {
        $user = trim($_POST["txtUser"]);

        if (empty(trim($_POST["txtPass"]))) {
            $valid = false;
            header("Location:adminLogin.php?passErr=1");

        } else {
            $pass = trim($_POST["txtPass"]);

        }

    }

    if ($valid) {

        if ($stmt = $con->prepare($authentication)) {
            $stmt->bind_param("s", $param_user);
            $param_user = trim($_POST['txtUser']);
            $param_pass = trim($_POST['txtPass']);

            if ($stmt->execute()){
                $stmt->store_result();
                if ($stmt->num_rows == 1) {
                    $stmt->bind_result($adminUser, $adminPass);
                    //fetching to view binded result
                    if($stmt->fetch()){
                        if($adminUser == $param_user && $adminPass == $param_pass){
                        
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION['user'] = $param_user;
                            header("Location:newsDashboard.php");
                        } else {   
                            header("Location:adminLogin.php?wrong=2");
                        }
                    }
                } else {   
                    header("Location:adminLogin.php?wrong=1");
                }

            } else {
                echo 'Sorry something went wrong,please try again later';
            }
        }
        $stmt->close();
    }

}
