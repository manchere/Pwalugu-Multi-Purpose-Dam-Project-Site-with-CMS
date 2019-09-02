<?php
include 'dbConnect.php';

$Ptitle = mysqli_real_escape_string($con,$_POST['progTitle']);
$Pdate = mysqli_real_escape_string($con,$_POST['progDate']);
$Ptime = mysqli_real_escape_string($con,$_POST['progTime']);
$Pdesc = mysqli_real_escape_string($con,$_POST['progDesc']);
$Pcont = mysqli_real_escape_string($con,$_POST['progCont']);
//$EImage = $_POST['progImage'];
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["progImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(!empty($Ptitle)||!empty($Pdate)||!empty($Pcont))
{
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["progImage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } 
    else 
    {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) 
{
    echo "There is a file with the same name in the directory, please select another file or use a different name";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["progImage"]["size"] > 5000000) 
{
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) 
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    //Use a different variable
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
   // var_dump(move_uploaded_file($_FILES["progImage"]["tmp_name"],$target_file));
   // var_dump(strtolower(pathinfo($target_file,PATHINFO_EXTENSION)));
   // var_dump($target_file);
    if (move_uploaded_file($_FILES["progImage"]["tmp_name"], $target_file)) 
    {
        $INSERT = "INSERT INTO Programme (Prog_title,Prog_date,Prog_time,Prog_desc,Prog_content,Prog_Image)
        VALUES('$Ptitle','$Pdate','$Ptime','$Pdesc','$Pcont','$target_file')";
        $SELECT  = "SELECT `Prog_title` FROM `Programme` WHERE `Prog_title` = ? LIMIT 1";
    
        
        $stmt = $con->prepare($SELECT);
        $stmt->bind_param("s",$Ptitle);
        $stmt->execute();
        $stmt->bind_result($Ptitle);
        $stmt->store_result();
        $rownum = $stmt->num_rows;
    
        if($rownum == 0)
        {   
            if ($con->query($INSERT) === TRUE) {
                header("Location:progDashboard.php?message=1");
             } else {
                 var_dump($INSERT);
                // header("Location:progDashboard.php?message=2");
            }
            
            
        }
        else
        {
            header("Location:progDashboard.php?message=3");
        }
        $stmt->close();
        $con->close();

    } 
    else 
    {
        header("Location:progDashboard.php?message=5");
    }
}
   // }
}
else
{
    header("Location:progDashboard.php?message=6");
    die();
}

?>