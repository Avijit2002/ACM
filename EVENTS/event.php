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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../CSS/nav.css" class="css">
    <link rel="stylesheet" href="../CSS/event.css">
    <link rel="stylesheet" href="../ANIMATION/aos-master/dist/aos.css"> 
    <!--<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="../CSS/footer.css" class="css">

</head>

<body>
    <?php
    require "../ADMIN/_dbconnect.php";
    require '../NAV/nav.php';
    ?>
    <div class="container-fluid top-container">
        <div class="container-fluid div3" data-aos="fade-right">
            <div class="row xyz">
                <div class="col-md-6">
                    <div class="container-fluid top-content">
                        <h1 class="mem">EVENTS</h1>
                        <p>Here at TINT ACM Student Chapter, we organise various type of events for students to help them building there skills and gain knowledge</p>
                        <div class="button">
                            <a class="but-1" href="#upcoming-event">Upcoming Event</a>
                            <a href="#event-cal">Event Calender</a>
                            <a href="#Past" class="last_but">Past Event</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- for button click scroll  -->
            <div id="upcoming-event"></div>
        </div>
        <img class="bg-pic" src="../img/business-team-discussing-ideas-startup/4380.jpg" data-aos="fade-down" alt="">
    </div>

    <div class="container-fluid middle-container">
        <div class="container-fluid upcoming-event">
            <h2>Upcoming Events</h2>
            <div class="row upcoming-row">
                <!-- yaha small screen ke liye padding hatana parega -->
                <?php
                date_default_timezone_set('Asia/Kolkata');
                $d = date("Y-m-d");
                //echo $d;
                $sql = "SELECT * FROM `events` WHERE DATEDIFF(`start_time`, '$d')>=0 LIMIT 3";
                $result = mysqli_query($conn, $sql) or die("ERROR");
                $num = mysqli_num_rows($result);
                //echo $num;
                if ($num > 0) {
                    while ($num--) {
                        $row = mysqli_fetch_assoc($result);
                ?>
                        <div class="col-lg-4 col-md-6 c-cards" data-aos="fade-in">
                            <div class="container-fluid carde">
                                <div class="container-fluid pic">
                                    <?php
                                    if (empty($row['image'])) {
                                        echo '<img class="profile-pic" src="../img/isometric-people-team-contemporary-management-concept/2922875.jpg" alt="">';
                                    } else {
                                        echo '<img class="profile-pic" src="../ADMIN/UPLOAD/events/' . $row['image'] . '" alt="img">';
                                    }
                                    ?>
                                </div>
                                <div class="container-fluid card-content">
                                    <h6><?php echo $row['Title']; ?></h6>
                                    <div style="padding-left: 10px; display: flex; justify-content: space-between; margin-top: 20px;">
                                        <span style="padding-top: 5 px;"><i class="far fa-calendar-alt"></i>
                                            <?php echo date("d F", strtotime($row['start_time'])) ?></span>

                                        <span style="margin-right: 5px">
                                            <a href=<?php echo '"../EVENTS/events-desc.php?num=' . $row['sln'] . '"' ?>>View-Details</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="" style="height: 400px;margin: 0% auto; display:flex; align-items: center; justify-content: center;">
                        <h4 style="font-size: 30px; font-weight:700; color:#494869"><i>No upcoming event</i></h4>
                    </div>
                <?php
                }
                ?>


            </div>
        </div>
        <div class="container-fluid event-cal" id="event-cal">
            <h2 class="event-head-1">Event Calender</h2>
            <div class="row" style="text-align: center;">
                <div>
                    <select class="selectVal" id="ddlYears">
                        <?php
                        $presentyear = date("Y");
                        for ($i = $presentyear; $i >= 2020; $i--) {
                            echo '<option id="opt" value="' . $i . '">' . $i . '</option>';
                        }
                        ?>

                    </select>
                </div>
                <div class="col-6 cal" data-aos="fade-right">
                    <div class="toggle">
                        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                        <ion-icon name="calendar-outline"></ion-icon>
                    </div>

                    <li class="selector" style="--i:0;--clr:#ffbeed;">
                        <input hidden type="text" value="01">
                        <div class="a">JANUARY</div>
                    </li>
                    <li class="selector" style="--i:1;--clr:#f89cff;">
                        <input hidden type="text" value="02">
                        <div class="a">FEBRARY</div>
                    </li>
                    <li class="selector" style="--i:2;--clr:#cd8ffc;">
                        <input hidden type="text" value="03">
                        <div class="a">MARCH</div>
                    </li>
                    <li class="selector" style="--i:3;--clr:#94b8ff;">
                        <input hidden type="text" value="04">
                        <div class="a">APRIL</div>
                    </li>
                    <li class="selector" style="--i:4;--clr:#a0f2ff;">
                        <input hidden type="text" value="05">
                        <div class="a">MAY</div>
                    </li>
                    <li class="selector" style="--i:5;--clr:#b8ffa5;">
                        <input hidden type="text" value="06">
                        <div class="a">JUNE</div>
                    </li>
                    <li class="selector" style="--i:6;--clr:#c6ff90;">
                        <input hidden type="text" value="07">
                        <div class="a">JULY</div>
                    </li>
                    <li class="selector" style="--i:7;--clr:#ffffb7;">
                        <input hidden type="text" value="08">
                        <div class="a">AUGUST</div>
                    </li>
                    <li class="selector" style="--i:8;--clr:#ffe69b;">
                        <input hidden type="text" value="09">
                        <div class="a">SEPT</div>
                    </li>
                    <li class="selector" style="--i:9;--clr:#ffcc92;">
                        <input hidden type="text" value="10">
                        <div class="a">OCTOBER</div>
                    </li>
                    <li class="selector" style="--i:10;--clr:#ffb894;">
                        <input hidden type="text" value="11">
                        <div class="a">NOV</div>
                    </li>
                    <li class="selector" style="--i:11;--clr:#ff958d;">
                        <input hidden type="text" value="12">
                        <div class="a">DEC</div>
                    </li>

                </div>

                <div class="col-6 month-event-display" data-aos="fade-left">
                    <div class="container-fluid month-message">
                        <h4><i>Click on calender and <br>Select Month to see events</i></h4>
                    </div>
                    <div class="container-fluid month-event" id="">
                        <div id="monthly-event">
                            <!-- here cards are coming from ajax -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="lower-container" id="Past">
        <h2>Past Events</h2>
        <div class="wrapp">
            <div class="center-line"></div>
            <?php $d = date("Y-m-d");
            $sql = "SELECT * FROM `events` WHERE DATEDIFF(`start_time`, '$d')<0 ORDER BY `events`.`start_time` DESC";
            $result = mysqli_query($conn, $sql) or die("ERROR");
            $num = mysqli_num_rows($result);
            //echo $num;
            $x = 0;
            if ($num > 0) {
                while ($num--) {
                    $row = mysqli_fetch_assoc($result);
                    $x++;
                    if ($x % 2 != 0) {
                        $count = 1;
                        $ani = "fade-left";
                    } else {
                        $count = 2;
                        $ani = "fade-right";
                    }
                    //echo 'rowx rowx-'.$count;
            ?>
                    <div class="<?php echo 'rowx rowx-' . $count  ?>" data-aos=<?php echo $ani ?>>
                        <section>
                            <span class="icons">
                                <ion-icon name="star"></ion-icon>
                            </span>
                            <div class="details">
                                <span class="title">
                                    <?php echo $row['Title'] ?>
                                </span>
                                <span><?php echo date("d", strtotime($row['start_time'])) ?>
                                    <span><?php echo date("F", strtotime($row['start_time'])) ?></span>
                                    <span><?php echo date("Y", strtotime($row['start_time'])) ?></span></span>
                            </div>
                            <p><?php echo substr($row['description'], 0, 400) ?>....</p>
                            <div class="bottom">
                                <a href=<?php echo '"../EVENTS/events-desc.php?num=' . $row['sln'] . '"' ?>>Read-more</a>
                            </div>
                        </section>
                    </div>
            <?php
                }
            }
            ?>
        </div>

    </div>
    <?php
    require '../FOOTER/footer.php';

    ?>

    <script src="../Js/jquery-3.6.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="../JS/event.js"></script>
    <script src="../ANIMATION/aos-master/dist/aos.js"></script>
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
    <script>
        AOS.init();
    </script>
    <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");
            loader.classList.add("loader--hidden");
            loader.addEventListener("transitionend", () => {
                document.body.removeChild(loader);
            });
        });
    </script>
</body>

</html>