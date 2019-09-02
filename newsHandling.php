<?php
include 'dbConnect.php';

$Ntitle = mysqli_real_escape_string($con,$_POST['newsTitle']);
$Nsubtitle = mysqli_real_escape_string($con,$_POST['newsSub']);
$Ndate = mysqli_real_escape_string($con,$_POST['newsDate']);
$NDesc = mysqli_real_escape_string($con,$_POST['newsDesc']);
$Ncont = mysqli_real_escape_string($con,$_POST['newsCont']);
//$EImage = $_POST['newsImage'];
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["newsImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(!empty($Ntitle)||!empty($Nsubtitle)||!empty($Ndate)||!empty($Ncont))
{
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["newsImage"]["tmp_name"]);
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
if(file_exists($target_file)) 
{
    echo "There is a file with the same name in the directory, please select another file or use a different name";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["newsImage"]["size"] > 5000000) 
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
   // var_dump(move_uploaded_file($_FILES["newsImage"]["tmp_name"],$target_file));
   // var_dump(strtolower(pathinfo($target_file,PATHINFO_EXTENSION)));
   // var_dump($target_file);
    if (move_uploaded_file($_FILES["newsImage"]["tmp_name"], $target_file)) 
    {
        $INSERT = "INSERT INTO News (News_title,News_sub,News_desc,News_Date,News_content,News_Image)
                   VALUES('$Ntitle','$Nsubtitle','$NDesc','$Ndate','$Ncont','$target_file')";
        $SELECT  = "SELECT `News_title` FROM `News` WHERE `News_title` = ? LIMIT 1";
    
        
        $stmt = $con->prepare($SELECT);
        $stmt->bind_param("s",$Ntitle);
        $stmt->execute();
        $stmt->bind_result($Ntitle);
        $stmt->store_result();
        $rownum = $stmt->num_rows;
    
        if($rownum == 0)
        {   
            if ($con->query($INSERT) === TRUE) {
                header("Location:newsDashboard.php?message=1");
                //  echo "News added successfully";
             } else {
                header("Location:newsDashboard.php?message=2");
                //  echo "News insertion failed " ."<br>" . $con->error;
            }
        }
        else
        {
            header("Location:newsDashboard.php?message=3");
            // echo 'A news with the same news title has already been added';
        }
        $stmt->close();
        $con->close();

        // echo "The file ". basename( $_FILES["newsImage"]["name"]). " has been uploaded.";
        header("Location:newsDashboard.php?message=4");
    } 
    else 
    {
        // echo "Sorry, there was an error uploading your file.";
        header("Location:newsDashboard.php?message=5");
    }
}
   // }
}
else
{
    // echo'Missing field required';
    header("Location:newsDashboard.php?message=6");
    die();
}

       
?>