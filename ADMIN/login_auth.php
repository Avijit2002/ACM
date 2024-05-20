<?php
  require '../ADMIN/_dbconnect.php';


  $login = false;
  $showerror = false;

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $username = $_POST['email'];   
    $password = $_POST['password'];

    $sql = "Select * from admin_members where username='$username'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num == 0)
    {
        $showerror = true;
        //echo "error";
    }
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password,$row['hash']))
    {
        session_start();
        $login = true;
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row['name'];
        header("location: ../ADMIN/admin-welcome.php");
        

    }
    else
    {
        $showerror = true;
        //echo "error";
    }

  }

  

  



?>