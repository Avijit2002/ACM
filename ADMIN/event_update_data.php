<?php
require '../ADMIN/session_check.php';
require '../ADMIN/_dbconnect.php';
    // insert updated details code
    if(empty($_FILES['image']['name'])){
        $file_name = trim($_POST['old-image']);
        //echo $file_name;
    }
    else{
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
        
        $extensions = array('jpg','png','jpeg');
    
        if(in_array($file_ext,$extensions) === false)
        {
            $errors[] = 'please put proper image';
        }
        if($file_size > 30720000)   //change krna hai
        {
            $errors[] =  'image size must be under 300kb';
        }
    
        if(empty($errors) == true)
        {
            unlink("../ADMIN/UPLOAD/events/".trim($_POST['old-image']));
            move_uploaded_file($file_tmp,"../ADMIN/UPLOAD/events/".$file_name);
        }
        else{
            //print_r($errors);
            echo '<div class="alert alert-danger">'.$errors[0].'</div>';
            die();
        }
    }

    // insertion of data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = ucfirst(trim(mysqli_real_escape_string($conn,$_POST['title'])));
    $acronym = ucfirst(trim(mysqli_real_escape_string($conn,$_POST['acronym'])));
    //$image = mysqli_real_escape_string($conn,$_POST['image']);
    $description = ucfirst(trim(mysqli_real_escape_string($conn,$_POST['description'])));
    $starttime = trim(mysqli_real_escape_string($conn,$_POST['start_time']));
    $endtime = trim(mysqli_real_escape_string($conn,$_POST['end_time']));
    $address = ucfirst(trim(mysqli_real_escape_string($conn,$_POST['address'])));
    $contactname = ucfirst(trim(mysqli_real_escape_string($conn,$_POST['contact_name'])));
    $contactemail = strtolower(trim(mysqli_real_escape_string($conn,$_POST['contact_email'])));
    $eventtype = ucfirst(trim(mysqli_real_escape_string($conn,$_POST['event_type'])));
    $sn = trim($_POST['sln']);

    
    //UPDATE `members` SET `dept` = 'cse' WHERE `members`.`sln` = 27;

    $sqli_up = "UPDATE `events` SET `Title`='$title',  `acronym`='$acronym', `image`='$file_name', `description`='$description', `start_time`='$starttime',
    `end_time`='$endtime', `event address`='$address',`contact name`='$contactname',`contact email`='$contactemail',`event type`='$eventtype' WHERE `events`.`sln` = $sn";



    mysqli_query($conn, $sqli_up) or die("Query failed");
    header("location: ../ADMIN/event_register.php");
    
}
    

?>