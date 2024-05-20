<?php
require '../ADMIN/session_check.php';
require '../ADMIN/_dbconnect.php';
    // insert updated details code
    if(empty($_FILES['profilePic']['name'])){
        $file_name = trim($_POST['old-profilePic']);
        //echo $file_name;
    }
    else{
        $file_name = $_FILES['profilePic']['name'];
        $file_size = $_FILES['profilePic']['size'];
        $file_tmp = $_FILES['profilePic']['tmp_name'];
        $file_type = $_FILES['profilePic']['type'];
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
            unlink("../ADMIN/UPLOAD/members/".trim($_POST['old-profilePic']));
            move_uploaded_file($file_tmp,"../ADMIN/UPLOAD/members/".$file_name);
        }
        else{
            //print_r($errors);
            echo '<div class="alert alert-danger">'.$errors[0].'</div>';
            die();
        }
    }

    // insertion of data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = strtolower(trim(mysqli_real_escape_string($conn,$_POST['email'])));
    $username = ucfirst(trim(mysqli_real_escape_string($conn,$_POST['username'])));
    $department = strtoupper(trim(mysqli_real_escape_string($conn,$_POST['department'])));
    $phNo = trim($_POST['phNo']);
    $memId = strtoupper(trim(mysqli_real_escape_string($conn,$_POST['memId'])));
    $user_type = trim($_POST['user_type']);
    $academic_year = trim($_POST['academic-year']);
    $year = trim($_POST['year']);
    $sn = trim($_POST['sln']);
    $linkedin = trim($_POST['linkedin']);
    $github = trim($_POST['github']);


    //UPDATE `members` SET `dept` = 'cse' WHERE `members`.`sln` = 27;

    $sqli_up = "UPDATE `members` SET `email`='$email', `name`='$username', `dept`='$department',`year`='$year', `phone no.`='$phNo', `membership id`='$memId',
    `profile pic`='$file_name',`academic-year`='$academic_year',`user type`='$user_type',`linkedin`='$linkedin',`github`='$github' WHERE `members`.`sln` = $sn";

    mysqli_query($conn, $sqli_up) or die("Query failed");
    header("location: ../ADMIN/member_register.php");
    
}
    

?>