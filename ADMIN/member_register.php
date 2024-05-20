<?php
require '../ADMIN/session_check.php';
require '../ADMIN/_dbconnect.php';

//global $file_name;

if (isset($_FILES['profilePic'])) {
    $file_name = $_FILES['profilePic']['name'];
    $file_size = $_FILES['profilePic']['size'];
    $file_tmp = $_FILES['profilePic']['tmp_name'];
    $file_type = $_FILES['profilePic']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $extensions = array('jpg', 'png', 'jpeg');

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = 'please put proper image';
    }
    if ($file_size > 30720000)   //change krna hai
    {
        $errors[] =  'image size must be under 300kb';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "../ADMIN/UPLOAD/members/" . $file_name);
    } else {
        //print_r($errors);
        echo '<div class="alert alert-danger">' . $errors[0] . '</div>';
        die();
    }
}


// insertion of data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = strtolower(trim(mysqli_real_escape_string($conn, $_POST['email'])));
    $username = ucfirst(trim(mysqli_real_escape_string($conn, $_POST['username'])));
    $department = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['department'])));
    $year = trim($_POST['year']);
    $phNo = trim($_POST['phNo']);
    $memId = strtoupper(trim(mysqli_real_escape_string($conn, $_POST['memId'])));
    $user_type = trim($_POST['user_type']);
    $academic_year = trim($_POST['academic-year']);
    $linkedin = trim($_POST['linkedin']);
    $github = trim($_POST['github']);

    // checking if member already registered
    $sqli_memberid_check = "SELECT * FROM `members` WHERE `membership id` = '$memId' ";
    $res2 = mysqli_query($conn, $sqli_memberid_check) or die("Query failed");
    $num_row_same_id = mysqli_num_rows($res2);
    if ($num_row_same_id > 0) {
        echo "User Already Exists";
        exit();
    }

    // applying unique constraits
    $sqli_unique = "ALTER TABLE `members` ADD CONSTRAINT UNIQUE(`membership id`)";
    $res1 = mysqli_query($conn, $sqli_unique)  or die("Query failed");


    $sqli = "INSERT INTO `members` ( `email`, `name`, `dept`, `phone no.`, `membership id`,`profile pic`,`academic-year`, `user type`,`linkedin`,`github`)
     VALUES ( '$email', '$username', '$department', '$phNo', '$memId','$file_name','$academic_year', '$user_type','$linkedin','$github')";

    $res = mysqli_query($conn, $sqli) or die("Query failed");
}



if (isset($_GET['delete'])) {
    $sn = $_GET['delete'];
    $sql_del_img = "SELECT `profile pic` FROM `members` WHERE `members`.`sln` = $sn";
    $res_img = mysqli_query($conn, $sql_del_img);
    $res_img_row = mysqli_fetch_assoc($res_img);
    unlink("../ADMIN/UPLOAD/members/" . $res_img_row['profile pic']);
    $sq = "DELETE FROM `members` WHERE `members`.`sln` = $sn";
    mysqli_query($conn, $sq);
    header("location: ../ADMIN/member_register.php");
}

$query = mysqli_query($conn, "select * FROM `members`");
$number = 1;
while ($row = mysqli_fetch_array($query)) {
    $id = $row['sln'];
    $sql = "UPDATE members SET sln=$number WHERE sln=$id";
    if ($conn->query($sql) == TRUE) {
        //echo "Record RESET succesfully<br>";
    }
    $number++;
}

$sql = "ALTER TABLE members AUTO_INCREMENT =1";
if ($conn->query($sql) == TRUE) {
    //echo "Record ALTER succesfully";
} else {
    echo "Error ALTER record: " . $conn->error;
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/admin_nav.css" class="css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../CSS/event_register.css">

    <title>Add-Member</title>


</head>

<body>
    <?php
    require '../ADMIN/admin_nav.php';

    ?>

    <div class="container-fluid" style="margin-top: 1.7%;">
        <div class="row align-items-start">
            <div class="col-xl-2 col-lg-3 r-table" style=" background: #F5F5F5; border: solid 2px rgb(#F5F5F5); border-radius: .5em; padding-bottom:2%">
                <div class="container-fluid mt-3">
                    <h3 class="mb-3">Add Member details</h3>
                    <form action="/avijit/ACM/ADMIN/member_register.php" method="POST" enctype="multipart/form-data">
                        <div class=" mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control type=" email" name="email">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Name</label>
                            <input class="form-control type=" text" name="username">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Dept.</label>
                            <input class="form-control type=" text" name="department">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Year:</label>
                            <select class="custom-select" id="access" name="year">
                                <option default value="">Select</option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                                <option value="4th">4th</option>
                            </select>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Phone Number</label>
                            <input class="form-control type=" text" name="phNo">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">MembershipId</label>
                            <input class="form-control type=" text" name="memId">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Profile Picture</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="profilePic" name="profilePic">

                            </div>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Academic Year:</label>
                            <select class="custom-select" id="access" name="academic-year">
                                <option default value="">Select</option>
                                <?php
                                $presentyear = date("Y");
                                for ($i = $presentyear; $i >= 2021; $i--) {
                                    echo '<option class="opt" value="' . $i . '">' . $i . '-' . $i + 1 . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">User Type:</label>
                            <select class="custom-select" id="access" name="user_type">
                                <option default value="">Select</option>
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
                            <input class="form-control type=" text" name="linkedin">
                        </div>
                        <div class=" mb-3">
                            <label class="form-label">Github profile link</label>
                            <input class="form-control type=" text" name="github">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col r-table">
                <h3 class="mt-3">Members List</h3>
                <table id="table_id" class="display" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th>sl. no.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Dept.</th>
                            <th scope="col">Year</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Id</th>
                            <th scope="col">User Type</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // fetching data from server
                        $fet = "SELECT * FROM `members`";
                        $res1 = mysqli_query($conn, $fet);

                        $num = mysqli_num_rows($res1);
                        $sln = 1;
                        if ($num > 0) {
                            while ($num--)  // while($row = mysqli_fetch_assoc($res) )  it rotates till null value at end
                            {
                                $row = mysqli_fetch_assoc($res1);  //assoc = associaive array,,, it returns next row every time it executes
                                //echo var_dump($row);
                                echo '
                    
                        
                            <tr>
                                <td scope="col">' . $sln . '</td>
                                <td scope="col">' . $row['name'] . '</td>
                                <td scope="col">' . $row['email'] . '</td>
                                <td scope="col">' . $row['dept'] . '</td>
                                <td scope="col">' . $row['phone no.'] . '</td>
                                <td scope="col">' . $row['membership id'] . '</td>
                                <td scope="col">' . $row['academic-year'] . '-' . $row['academic-year'] + 1 . '</td>
                                <td scope="col">' . $row['user type'] . '</td>
                                <td scope="col"><button type="button" class="upd btn btn-warning" id="' . $row['sln'] . '">Update</button></td>
                                <td scope="col"><button type="button" class="del btn btn-danger" id="' . $row['sln'] . '">Delete</button></td>
                            </tr>
                        
                    
                            </div>';
                                $sln = $sln + 1;
                            }
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        del = document.getElementsByClassName('del');
        Array.from(del).forEach((Element) => {
            Element.addEventListener("click", (e) => { //yaha location change krna hai ../ de kr krna hai
                sl = e.target.id;
                window.location = `http://localhost/avijit/ACM/ADMIN/member_register.php?delete=${sl}`; // delete php code is written in this file

            })
        })
        upd = document.getElementsByClassName('upd');
        Array.from(upd).forEach((Element) => {
            Element.addEventListener("click", (e) => {
                sl = e.target.id;
                window.location = `http://localhost/avijit/ACM/ADMIN/member_update.php?update=${sl}`; // update php code is written in member_update.php

            })
        })
    </script>
    <script src="../Js/jquery-3.6.2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>