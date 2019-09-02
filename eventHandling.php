<?php
include 'dbConnect.php';

$Etitle = mysqli_real_escape_string($con, $_POST['eventTitle']);
$Eloc = mysqli_real_escape_string($con, $_POST['eventLoc']);
$ESdate = mysqli_real_escape_string($con, $_POST['eventSDate']);
$EEdate = mysqli_real_escape_string($con, $_POST['eventEDate']);
$Etime = mysqli_real_escape_string($con, $_POST['eventTime']);
$Ecat = mysqli_real_escape_string($con, $_POST['eventCat']);
$Edesc = mysqli_real_escape_string($con, $_POST['eventDesc']);

//$EImage = $_POST['EventImage'];

if (!empty($Etitle) || !empty($Eloc) || !empty($ESdate) || !empty($EEdate) || !empty($Etime) || !empty($Edesc)) {

    $INSERT = "INSERT INTO Events (Event_title,Event_location,Event_startDate,Event_endDate,Event_time,Event_category,Event_desc)
                   VALUES('$Etitle','$Eloc','$ESdate','$EEdate','$Etime','$Ecat','$Edesc')";
    $SELECT = "SELECT `Event_title` FROM `Events` WHERE `Event_title` = ? LIMIT 1";

    $stmt = $con->prepare($SELECT);
    $stmt->bind_param("s", $Etitle);
    $stmt->execute();
    $stmt->bind_result($Etitle);
    $stmt->store_result();
    $rownum = $stmt->num_rows;

    if ($rownum == 0) {
        $end = new DateTime($EEdate);
        $start =  new DateTime($ESdate);
        
        $result  = $start->diff($end);

        if($result->invert == 1)
        {
            header("Location:eventsDashboard.php?err=1");     
        }
        else if ($con->query($INSERT) == true) {
            header("Location:eventsDashboard.php?mess=1"); 
            
        } else {
            var_dump();
            header("Location:eventsDashboard.php?mess=2");
        }
    } else {
        header("Location:eventsDashboard.php?mess=3");
    }
    $stmt->close();
    $con->close();
} else {
    header("Location:eventsDashboard.php?mess=4");
    die();
}
