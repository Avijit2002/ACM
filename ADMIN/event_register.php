<?php
require '../ADMIN/session_check.php';
require '../ADMIN/_dbconnect.php';

//global $file_name;


// image upload
if (isset($_FILES['image'])) {
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $extensions = array('jpg', 'png', 'jpeg');
    if (!empty($file_name)) {
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = 'please put proper image';
        }
        if ($file_size > 30720000)   //change krna hai
        {
            $errors[] =  'image size must be under 300kb';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "../ADMIN/UPLOAD/events/" . $file_name);
        } else {

            echo '<div class="alert alert-danger">' . $errors[0] . '</div>';
            die();
        }
    }
}



// insertion of data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = ucfirst(trim(mysqli_real_escape_string($conn, $_POST['title'])));
    $acronym = ucfirst(trim(mysqli_real_escape_string($conn, $_POST['acronym'])));
    //$image = mysqli_real_escape_string($conn,$_POST['image']);
    $description = ucfirst(trim(mysqli_real_escape_string($conn, $_POST['description'])));
    $starttime = trim(mysqli_real_escape_string($conn, $_POST['start_time']));
    $endtime = trim(mysqli_real_escape_string($conn, $_POST['end_time']));
    $address = ucfirst(trim(mysqli_real_escape_string($conn, $_POST['address'])));
    $contactname = ucfirst(trim(mysqli_real_escape_string($conn, $_POST['contact_name'])));
    $contactemail = strtolower(trim(mysqli_real_escape_string($conn, $_POST['contact_email'])));
    $eventtype = ucfirst(trim(mysqli_real_escape_string($conn, $_POST['event_type'])));

    // checking if event already registered
    $sqli_memberid_check = "SELECT * FROM `events` WHERE `Title` = '$title' ";
    $res2 = mysqli_query($conn, $sqli_memberid_check) or die("Query failed");
    $num_row_same_id = mysqli_num_rows($res2);
    if ($num_row_same_id > 0) {
        echo "Event Already Exists";
        exit();
    }

    $sqli = "INSERT INTO `events` ( `Title`, `acronym`, `image`,`description`, `start_time`, `end_time`, `event address`, `contact name`, 
    `contact email`, `event type`) VALUES ('$title','$acronym','$file_name','$description','$starttime','$endtime','$address' ,'$contactname','$contactemail','$eventtype')";

    $res = mysqli_query($conn, $sqli);
}



if (isset($_GET['delete'])) {
    $sn = $_GET['delete'];
    $sql_del_img = "SELECT `image` FROM `events` WHERE `events`.`sln` = $sn";
    $res_img = mysqli_query($conn, $sql_del_img);
    $res_img_row = mysqli_fetch_assoc($res_img);
    if (!empty($res_img_row['image'])) {
        unlink("../ADMIN/UPLOAD/events/" . $res_img_row['image']);
    }

    $sq = "DELETE FROM `events` WHERE `events`.`sln` = $sn";
    mysqli_query($conn, $sq);
}




$query = mysqli_query($conn, "select * FROM `events`");
$number = 1;
while ($row = mysqli_fetch_array($query)) {
    $id = $row['sln'];
    $sql = "UPDATE events SET sln=$number WHERE sln=$id";
    if ($conn->query($sql) == TRUE) {
        //echo "Record RESET succesfully<br>";
    }
    $number++;
}

$sql = "ALTER TABLE events AUTO_INCREMENT =1";
if ($conn->query($sql) == TRUE) {
    //echo "Record ALTER succesfully";
} else {
    echo "Error ALTER record: " . $conn->error;
}

//$query=mysqli_query($conn,"SELECT * FROM `events` ORDER BY `events`.`start_time` DESC"); // sorting events according to dates


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
    <title>Add-Event</title>


</head>

<body>
    <?php
    require '../ADMIN/admin_nav.php';

    ?>

    <div class="container-fluid " style="margin-top: 1.7%;">
        <div class="row align-items-start">
            <div class="col-md-3 r-table" style=" background: #F5F5F5; border: solid 2px rgb(#F5F5F5); border-radius: .5em; padding-bottom:2%;">
                <div class="container-fluid mt-3">
                    <h3>Add Event details</h3>
                    <form action="/avijit/ACM/ADMIN/event_register.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="acronym" class="form-label">Acronym</label>
                            <input type="text" name="acronym" class="form-control" id="acronym">
                        </div>
                        <div>
                            <label for="image" class="form-label">Banner/Poster</label>
                            <input type="file" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="start_time" class="form-label">Date</label>
                            <input type="date" name="start_time" id="start_time" required>
                        </div>
                        <div class="mb-3">
                            <label for="end_time" class="form-label">Time</label>
                            <input type="time" name="end_time" id="end_time">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Event Address</label>
                            <input type="text" name="address" class="form-control" id="address">
                        </div>
                        <div class="mb-3">
                            <label for="contact_name" class="form-label">contact name</label>
                            <input type="text" name="contact_name" class="form-control" id="contact_name">
                        </div>
                        <div class="mb-3">
                            <label for="contact_email" class="form-label">contact email</label>
                            <input type="email" name="contact_email" class="form-control" id="contact_email">
                        </div>

                        <div class=" mb-3">
                            <label class="form-label">Event Type:</label>
                            <select class="custom-select" id="access" name="event_type" style="width: 50%;">
                                <option value="ACM-W Celebration">ACM-W Celebration</option>
                                <option value="Community Service/Outreach">Community Service/Outreach</option>
                                <option value="Job Related">Job Related</option>
                                <option value="Lecture/Tech talk">Lecture/Tech talk</option>
                                <option value="Screenings">Screenings</option>
                                <option value="Social Events">Social Events</option>
                                <option value="Workshop">Workshop</option>
                                <option value="Conference or Symposium">Conference or Symposium</option>
                                <option value="Chapter meeting/ Election meeting">Chapter meeting/ Election meeting</option>
                                <option value="FundRaiser">FundRaiser</option>
                                <option value="Joint Meetings">Joint Meetings</option>
                                <option value="Pannel">Pannel</option>
                                <option value="Seminar">Seminar</option>
                                <option value="Student Competition">Student Competition</option>
                                <option value="Conference or Symposium Guests Non-sponsor">Conference or Symposium Guests Non-sponsor</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col r-table">
                <h3 class="mt-3">Events List</h3>
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>SL. NO.</th>
                            <th scope="col">TITLE</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">DATE</th>
                            <th scope="col">TIME</th>
                            <th scope="col">EVENT TYPE</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col">UPDATE</th>
                            <th scope="col">DELETE</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // fetching data from server
                        $fet = "SELECT * FROM `events`";
                        $res1 = mysqli_query($conn, $fet);

                        $num = mysqli_num_rows($res1);
                        $sln = 1;
                        if ($num > 0) {
                            while ($num--)  // while($row = mysqli_fetch_assoc($res) )  it rotates till null value at end
                            {
                                $row = mysqli_fetch_assoc($res1);  //assoc = associaive array,,, it returns next row every time it executes
                                //echo var_dump($row);
                                if ($row['image'] != null) {
                                    $present = "../EVENTS/events-desc.php?num={$row['sln']}";
                                    $mes = "Yes";
                                } else {
                                    $present = "";
                                    $mes = "No";

                                }
                                echo '
                    
                        
                            <tr>
                                <td scope="col">' . $sln . '</td>
                                <td scope="col">' . $row['Title'] . '</td>
                                <td scope="col">' . substr($row['description'],0,100) . '.....</td>
                                <td scope="col">' . $row['start_time'] . '</td>
                                <td scope="col">' . $row['end_time'] . '</td>
                                <td scope="col">' . $row['event type'] . '</td>
                                <td scope="col"><a href="'.$present.'">'.$mes.'</a></td>
                                <td scope="col"><button type="button" class="upd btn btn-warning" id="' . $row['sln'] . '">Update</button></td>
                                <td scope="col"><button type="button" class="del btn btn-warning" id="' . $row['sln'] . '">Delete</button></td>
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
            Element.addEventListener("click", (e) => {
                sl = e.target.id;
                window.location = `http://localhost/avijit/ACM/ADMIN/event_register.php?delete=${sl}`;

            })
        })

        upd = document.getElementsByClassName('upd');
        Array.from(upd).forEach((Element) => {
            Element.addEventListener("click", (e) => {
                sl = e.target.id;
                window.location = `http://localhost/avijit/ACM/ADMIN/event_update.php?update=${sl}`; // update php code is written in member_update.php

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