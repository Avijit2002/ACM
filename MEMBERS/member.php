<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINT ACM Student Chapter</title>
    <link rel="icon" href="../img/icon96kb.ico">
    <link rel="stylesheet" href="../CSS/loader.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/nav.css" class="css">
    <link rel="stylesheet" href="../CSS/member.css">
    <link rel="stylesheet" href="../ANIMATION/aos-master/dist/aos.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="../CSS/footer.css" class="css">

</head>

<body>
    <?php

    require '../NAV/nav.php';
    require '../ADMIN/_dbconnect.php';

    ?>
    <div class="container-fluid top-container">
        <div class="container-fluid div3">
            <div class="row xyz">
                <div class="col-md-6">
                    <div class="container-fluid top-content" data-aos="fade-right">
                        <h1 class="mem">MEMBERS</h1>
                        <p>Here at TINT ACM Student Chapter, we work as team to make these events and seminars possible and grow as a community.</p>
                    </div>
                </div>
            </div>
            <img class="bg-pic" src="../img/partners-holding-big-jigsaw-puzzle-pieces/5278.jpg" data-aos="fade-down" alt="">

        </div>
    </div>
    <div class="Yselector" data-aos="fade-down">
        <p><i>Select academic year</i></p>
        <select class="selectVal" id="ddlYears">
            <?php
            $presentyear = date("Y");
            $presentmonth = date("m");
            //echo $presentyear;
            for ($i = $presentyear; $i >= 2021; $i--) {
                $x = date_format(date_create("$presentyear-$presentmonth"), "Y m");
                $y = date_format(date_create("$i-08"), "Y m");
                if ($x > $y) {
                    echo '<option class="opt" value="' . $i . '">' . $i . '-' . $i + 1 . '</option>';
                }
            }
            ?>
        </select>
    </div>
    <div class="color">
        <?php
        $presentyear = date("Y");
        for ($i = $presentyear; $i >= 2021; $i--) {
            $x = date_format(date_create("$presentyear-$presentmonth"), "Y m");
            $y = date_format(date_create("$i-08"), "Y m");
            if ($x > $y) {
        ?>
                <div class="container-fluid middle-container" id=<?php echo $i; ?>>
                    <div class="rowi">
                        <h2 style="margin-bottom: 8%; margin-top: 25px;" data-aos="fade-in">Members of Academic Year <?php echo $i . '-' . $i + 1 ?></h2>
                        <h3>FACULTY COORDINATORS</h3>
                        <div class="row r-cards">

                            <?php
                            $sql = "SELECT * FROM `members` WHERE `user type`='Faculty-coordinator' AND `academic-year`=$i";
                            $result = mysqli_query($conn, $sql) or die("ERROR");
                            $num = mysqli_num_rows($result);
                            //echo $num;
                            if ($num > 0) {
                                while ($num--) {
                                    $row = mysqli_fetch_assoc($result);

                                    echo '<div class="col-lg-3 col-md-4 col-sm-6 c-cards"  data-aos="fade-in">
                    <div class="container-fluid carde">
                        <div class="container-fluid pic">
                            <img class="profile-pic" src="../ADMIN/UPLOAD/members/' . $row['profile pic'] . '" alt="img">
                        </div>
                        <div class="container-fluid card-content">
                            <h5>' . $row['name'] . '</h5>
                            <h6>' . $row['user type'] . '</h6>
                        </div>
                    </div>
                </div>';
                                }
                            }
                            ?>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h3>OFFICERS</h3>
                        <div class="row r-cards">
                            <?php
                            $sql = "SELECT * FROM `members` WHERE (`user type`='Chair' OR `user type`='Vice-chair' OR `user type`='Treasurer' OR `user type`='Web-master') AND `academic-year`=$i ";
                            $result = mysqli_query($conn, $sql) or die("ERROR");
                            $num = mysqli_num_rows($result);
                            if ($num > 0) {
                                while ($num--) {
                                    $row = mysqli_fetch_assoc($result);

                                    echo '<div class="col-lg-3 col-md-4 col-sm-6 c-cards" data-aos="fade-in">
                    <div class="container-fluid carde" >
                        <div class="container-fluid pic">
                            <img class="profile-pic" src="../ADMIN/UPLOAD/members/' . $row['profile pic'] . '" alt="img">
                        </div>
                        <div class="container-fluid card-content">
                            <h5>' . $row['name'] . '</h5>
                            <h6>' . $row['user type'] . '</h6>
                        </div>
                    </div>
                </div>';
                                }
                            }
                            ?>

                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <h3>MEMBERS</h3>
                        <div class="row r-cards">
                            <?php
                            $sql = "SELECT * FROM `members` WHERE `user type`='Member' AND `academic-year`=$i";
                            $result = mysqli_query($conn, $sql) or die("ERROR");
                            $num = mysqli_num_rows($result);
                            if ($num > 0) {
                                while ($num--) {
                                    $row = mysqli_fetch_assoc($result);

                                    echo '<div class="col-lg-3 col-md-4 col-sm-6 c-cards"  data-aos="fade-in">
                    <div class="container-fluid carde">
                        <div class="container-fluid pic">
                            <img class="profile-pic" src="../ADMIN/UPLOAD/members/' . $row['profile pic'] . '" alt="img">
                        </div>
                        <div class="container-fluid card-content">
                            <h5>' . $row['name'] . '</h5>
                            <h6>' . $row['user type'] . '</h6>
                        </div>
                    </div>
                </div>';
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
        <?php  }
        } ?>
    </div>
    <?php
    require '../FOOTER/footer.php';
    ?>
    <script src="../JS/member.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");
            loader.classList.add("loader--hidden");
            loader.addEventListener("transitionend", () => {
                document.body.removeChild(loader);
            });
        });
    </script>
    <script src="../ANIMATION/aos-master/dist/aos.js"></script>
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
    <script>
        AOS.init();
    </script> 
</body>

</html>