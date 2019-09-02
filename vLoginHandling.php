<?php
require_once 'dbConnect.php';
session_start();

$serial = $PIN = "";
$valid = true;
$TYPEFETCH = "SELECT `Voucher_type`, `Voucher_expDate` FROM Voucher_details WHERE `Serial_number` = ? AND `PIN` = ?";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["txtSerial"]))) {
        $valid = false;
        //$serialErr = "Please enter a Serial number";
        header("Location:loginForm.php?serialErr=1");

    } else {
        $serial = trim($_POST["txtSerial"]);

        if (empty(trim($_POST["txtPin"]))) {
            $valid = false;
            header("Location:loginForm.php?PINErr=1");

        } else {
            $PIN = trim($_POST["txtPin"]);

        }

    }

    if ($valid) {

        if ($stmt = $con->prepare($TYPEFETCH)) {
            $stmt->bind_param("ss", $param_serial, $param_PIN);
            $param_serial = trim($_POST['txtSerial']);
            $param_PIN = trim($_POST['txtPin']);
            //var_dump($stmt);

            if ($stmt->execute()){
                $stmt->store_result();
                if ($stmt->num_rows == 1) {
                    $stmt->bind_result($type, $expDate);

                    if ($stmt->fetch()) {
                        if (!empty($expDate) && !empty($type)) {
                            $loginSerial = trim($_POST["txtSerial"]);
                            //Counting the number of visits
                            $LOGINCHECK = "SELECT COUNT(`ID`) FROM `Voucher_Usage` WHERE `Serial_number` = ?;";
                            $preRes = mysqli_prepare($con,$LOGINCHECK);
                            mysqli_stmt_bind_param($preRes,"s",$loginSerial);
                            mysqli_stmt_execute($preRes);
                            mysqli_stmt_bind_result($preRes,$count);
                            mysqli_stmt_fetch($preRes);
                            mysqli_stmt_close($preRes);
                            // $record = mysqli_query($con,$LOGINCHECK);
                            // $count = mysqli_fetch_array($record,MYSQLI_NUM) or die(mysqli_error($con));
                            $exp = $expDate;
                            $cur = new DateTime();
                            $cur->format('Y-m-d H:i:s');
                            $expiryDate = new DateTime($exp);
                            
                            //$expiryDate = strtotime($expDate);
                            $dif = $cur->diff($expiryDate);
                            
                            //Checking if the voucher has not expired
                            if ($dif->invert == 0) {
                                //Checking the number of entries
                                if ($type == "onetime" && $count > 0) {
                                    echo 'first';
                                    var_dump($count);
                                    header("Location:loginForm.php?exceed=1");
                                } else if ($type == "triple" && $count > 3) {
                                    echo 'second';
                                    var_dump($count);
                                    header("Location:loginForm.php?exceed=1");
                                } else {
                                    echo "thid";
                                    
                                    // Escape user inputs for security
                                    $validSerial = $con->real_escape_string($serial);
                                    $validPIN = password_hash($PIN, PASSWORD_DEFAULT);
                                    var_dump($validSerial);
                                    var_dump($validPIN);
                                    // Attempt insert query execution
                                    $sql = "INSERT INTO Voucher_Usage(Serial_number,PIN) VALUES ('$validSerial', '$validPIN')";

                                    if (mysqli_query($con,$sql)) {
                                        $_SESSION['USER'] = $validSerial;
                                        header("Location:pwaluguview.php");
                                        
                                    } else {
                                        // "ERROR: Login failed. " . $con->error;
                                        header("Location:loginForm.php?failure=1");
                                        
                                    }
                                    // Close con
                                    $con->close();
                                }
                            } else {
                                var_dump($expDate);
                                // header("Location:loginForm.php?expired=1");
                            }
                        } else {
                             header("Location:loginForm.php?wrong=1");

                        }
                    }
                } else {
                    
                    header("Location:loginForm.php?wrong=1");
                }

            } else {
                echo 'Sorry something went wrong,please try again later';
            }
        }

        $stmt->close();
    }

}
