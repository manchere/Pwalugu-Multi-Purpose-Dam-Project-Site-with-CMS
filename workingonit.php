<?php
require_once 'dbConnect.php';
session_start();

$failure = $serial = $PIN = $type = $expDate = "";
$serialErr = $PINErr = $credentialErr = "";
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

        if (mysqli_query($con,$TYPEFETCH)) {
           $row = mysqli_fetch_assoc($TYPEFETCH);
           

            if ($stmt->execute()){
                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($type, $expDate);

                    while ($stmt->fetch()) {
                        if (!empty($expDate) && !empty($type)) {
                            $loginSerial = trim($_POST["txtSerial"]);
                            //Counting the number of visits
                            $LOGINCHECK = "SELECT COUNT(ID) FROM Voucher_Usage WHERE Serial_number = $loginSerial";
                            $res = mysqli_query($LOGINCHECK);
                            $count = mysqli_fetch_row($res);
                            $cur = date('Y-m-d H:i:s');

                            //Checking if the voucher has not expired
                            if (date_diff($expDate, $cur) > 0) {
                                //Checking the number of entries
                                if ($type == "onetime" && $count[0] > 0) {
                                    header("Location:loginForm.php?exceed=1");
                                } else if ($type == "triple" && $count[0] > 3) {
                                    header("Location:loginForm.php?exceed=1");
                                } else {
                                    // Escape user inputs for security
                                    $validSerial = $con->real_escape_string($serial);
                                    $validPIN = password_hash($PIN, PASSWORD_DEFAULT);

                                    // Attempt insert query execution
                                    $sql = "INSERT INTO Voucher_Usage(Serial_Number,PIN) VALUES ('$validSerial', '$validPIN')";

                                    if ($con->query($sql) === true) {
                                        header("Location:pwaluguview.php");

                                    } else {
                                        $failure = "ERROR: Login failed. " . $con->error;
                                    }

                                    // Close con
                                    $con->close();
                                }
                            } else {
                                header("Location:loginForm.php?expired=1");
                            }
                        } else {
                             header("Location:loginForm.php?wrong=1");

                        }
                    }
                } else {
                    // header("Location:loginForm.php?wrong=1");
                    var_dump($stmt);
                    var_dump($type);
                    var_dump($expDate);
                }

            } else {
                echo 'Sorry something went wrong,please try again later';
            }
        }

        $stmt->close();
    }

}
