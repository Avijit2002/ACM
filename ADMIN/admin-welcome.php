<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TINT ACM SC ADMIN PORTAL</title>
    <link rel="icon" href="../img/icon96kb.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/admin_nav.css" class="css">
    <link rel="stylesheet" href="../CSS/admin-welcome.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
</head>

<body>
    <?php
    require '../ADMIN/session_check.php';
    require '../ADMIN/_dbconnect.php';
    require '../ADMIN/admin_nav.php';

    ?>
    <div class="row top-container">
        <div class="col-3 side-bar">
            <div class="row r-button">
                <button class="button-27" id="btn-1" role="button">Events</button>
            </div>
            <div class="row r-button">
                <button class="button-27" id="btn-2" role="button">Members</button>
            </div>
            <div class="row r-button">
                <button class="button-27" id="btn-4" role="button">Add Admin</button>
            </div>
            <div class="row"></div>
        </div>
        <div class="col info" style="margin: 30px;">
            <h1 style="margin-bottom: 40px;">Welcome <?php echo $_SESSION['username'] ?></h1>
            <ul style="text-align: left; font-size:18px">
                <li>
                    Add members in Members section.
                </li>
                <li>
                    Add events in Events section.
                </li>
                <li>
                    Add all events of academic session at once then just update the poster when event arrives.
                </li>
                <li>
                    Add poster of event by updating the event from table.
                </li>
                <li>
                    Description of every event must be updated when event arrives.
                </li>
                <li>
                    Poster must be close to square shape for best display.
                </li>
                <li>
                    Admin members username and password will be generated from code.
                </li>
                <li>
                    Member display section of Memebers page will be automatically generated for next academic session after august month(This month can be changed according to academic calander) of that year.<br>Just need to add member.
                </li>
                <li>
                    Events displayed in upcoming Event, past event and event calander are automatically segregated according to date.
                </li>
                <li>
                    All drop-down year selector is dynamically generated. 
                </li>
            </ul>
        </div>  
    </div>
    
    <script>

        
    </script>
    
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../JS/welcome.js"></script>
</body>

</html>