<?php
require '../ADMIN/session_check.php';
require '../ADMIN/_dbconnect.php';

  // fetching previous data
  
    $sn = $_GET['update'];
    //echo $sn;
    $sq_update = "SELECT * FROM `members` WHERE `sln` = $sn";
    $sq_update_res = mysqli_query($conn, $sq_update) or die('Connection failed!!');
    $row_update_res = mysqli_fetch_array($sq_update_res);
    //print_r($row_update_res) ;



?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/admin_nav.css" class="css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../CSS/event_register.css">
    
    <title>Update-Member</title>


</head>

<body>
    <?php
    require '../ADMIN/admin_nav.php';

  

    ?>

    <div class="container-fluid">
        <div class="row" style="width: 50%; text-align: center ;margin: 3% auto; ">
            <div class="col r-table" style="text-align: left; background: #F5F5F5; border: solid 2px rgb(#F5F5F5); border-radius: .5em; padding-bottom:2%">
                <div class="container-fluid mt-3">
                    <h3 class="mb-3">Update Member details</h3>
                    <form action="/avijit/ACM/ADMIN/member_update_data.php" method="POST" enctype="multipart/form-data">
                        <input hidden class="form-control type="text" name="sln" value="<?php echo $sn ;?>">
                        <div class=" mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control type="email" name="email" value="<?php  echo $row_update_res['email'] ; ?>">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control type="text" name="username" value="<?php  echo $row_update_res['name'] ; ?>">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Dept.</label>
                            <input class="form-control type="text" name="department" value="<?php  echo $row_update_res['dept'] ; ?>">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Year:</label>
                            <select class="custom-select" id="access" name="year">
                                <option default value="<?php  echo $row_update_res['year'] ; ?>"><?php  echo $row_update_res['year'] ; ?></option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                                <option value="4th">4th</option>
                            </select>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Phone Number</label>
                            <input class="form-control type="text" name="phNo" value="<?php  echo $row_update_res['phone no.'] ; ?>">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">MembershipId</label>
                            <input class="form-control type="text" name="memId" value="<?php  echo $row_update_res['membership id'] ; ?>">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Profile Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="profilePic" name="profilePic">
                                <input hidden type="text" class="custom-file-input" id="old-profilePic" name="old-profilePic" value="<?php  echo $row_update_res['profile pic']; ?>">
                                <img src="../ADMIN/UPLOAD/members/<?php  echo $row_update_res['profile pic'] ; ?>" height="150px" alt="">
                                
                            </div>
                            <?php  echo $row_update_res['profile pic'] ; ?>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Academic Year:</label>
                            <select class="custom-select" id="access" name="academic-year">
                            <option default value="<?php  echo $row_update_res['academic-year'] ; ?>"><?php  echo $row_update_res['academic-year'] ; ?></option>
                                <?php
                                $presentyear = date("Y");
                                for ($i = $presentyear; $i >= 2021; $i--) {
                                    echo '<option class="opt" value="'.$i.'">'.$i.'-'.$i + 1 . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">User Type:</label>
                            <select class="custom-select" id="access" name="user_type" >
                                <option default value="<?php  echo $row_update_res['user type'] ; ?>"><?php  echo $row_update_res['user type'] ; ?></option>
                                <option value="Chair">Chair</option>
                                <option value="Vice-chair">Vice-chair</option>
                                <option value="Treasurer">Treasurer</option>
                                <option value="Web-master">Web-master</option>
                                <option value="Faculty-coordinator">Faculty-coordinator</option>
                                <option value="Member">Member</option>
                            </select>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">LinkedIn profile link</label>
                            <input class="form-control type=" text" name="linkedin" value="<?php  echo $row_update_res['linkedin'] ; ?>">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Github profile link</label>
                            <input class="form-control type=" text" name="github" value="<?php  echo $row_update_res['github'] ; ?>">
                        </div>
                        <div >
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>




