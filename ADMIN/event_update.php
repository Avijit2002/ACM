<?php
require '../ADMIN/session_check.php';
require '../ADMIN/_dbconnect.php';

  // fetching previous data
  
    $sn = $_GET['update'];
    //echo $sn;
    $sq_update = "SELECT * FROM `events` WHERE `sln` = $sn";
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
    
    <title>Update-Event</title>


</head>

<body>
    <?php
    require '../ADMIN/admin_nav.php';

  

    ?>

    <div class="container-fluid">
        <div class="row" style="width: 50%; text-align: center ;margin: 3% auto; ">
            <div class="col r-table" style="text-align: left; background: #F5F5F5; border: solid 2px rgb(#F5F5F5); border-radius: .5em; padding-bottom:2%">
                <div class="container-fluid mt-3">
                    <h3 class="mb-3">Update Event details</h3>
                    <form action="/avijit/ACM/ADMIN/event_update_data.php" method="POST" enctype="multipart/form-data">
                        <input hidden class="form-control type="text" name="sln" value="<?php echo $sn ;?>">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="<?php echo $row_update_res['Title'] ;?>">
                        </div>
                        <div class="mb-3">
                            <label for="acronym" class="form-label">Acronym</label>
                            <input type="text" name="acronym" class="form-control" id="acronym" value="<?php echo $row_update_res['acronym'] ;?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Banner/Poster</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <input hidden type="text" class="custom-file-input" id="old-image" name="old-image" value=<?php  echo $row_update_res['image']; ?>>
                                <img src="../ADMIN/UPLOAD/events/<?php  echo $row_update_res['image'] ; ?>" height="150px" alt="no image">
                                
                            </div>
                            <?php  echo $row_update_res['image'] ; ?>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input name="description" class="form-control" id="description" rows="2" value="<?php echo $row_update_res['description'] ;?>"></input>
                        </div>
                        <div class="mb-3">
                            <label for="start_time" class="form-label">Date</label>
                            <input type="date" name="start_time" id="start_time" value="<?php echo $row_update_res['start_time'] ;?>">
                        </div>
                        <div class="mb-3">
                            <label for="end_time" class="form-label">Time</label>
                            <input type="time" name="end_time" id="end_time" value="<?php echo $row_update_res['end_time'] ;?>">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Event Address</label>
                            <input type="text" name="address" class="form-control" id="address" value="<?php echo $row_update_res['event address'] ;?>">
                        </div>
                        <div class="mb-3">
                            <label for="contact_name" class="form-label">contact name</label>
                            <input type="text" name="contact_name" class="form-control" id="contact_name" value="<?php echo $row_update_res['contact name'] ;?>">
                        </div>
                        <div class="mb-3">
                            <label for="contact_email" class="form-label">contact email</label>
                            <input type="email" name="contact_email" class="form-control" id="contact_email" value="<?php echo $row_update_res['contact email'] ;?>">
                        </div>

                        <div class=" mb-3">
                            <label class="form-label">Event Type:</label>
                            <select class="custom-select" id="access" name="event_type">
                                <option default value="<?php  echo $row_update_res['event type'] ; ?>"><?php  echo $row_update_res['event type'] ; ?></option>
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
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>




