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
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/events-desc.css">
    <link rel="stylesheet" href="../ANIMATION/aos-master/dist/aos.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="../CSS/footer.css">
</head>

<body>
    <?php
    include '../NAV/nav.php';
    include '../ADMIN/_dbconnect.php';
    ?>

    <?php
        if(isset($_GET['num'])){
            $sln = $_GET['num'];
            //echo $sln;
            //$query=mysqli_query($conn,"select * FROM `events`");
            $query = mysqli_query($conn,"SELECT * FROM `events` WHERE `sln`= '$sln'");
            $row=mysqli_fetch_assoc($query);
        }

    ?>
    <div class="top-cont">
        <div class="row event-desc">
            <div class="container-fluid" style="padding: 0;">
                <div class="banner">
                    <?php
                        if(empty($row['image'])){
                            echo '<img class="banner-img" src="../img/isometric-people-team-contemporary-management-concept/2922875.jpg" alt="">';
                        }
                        else{
                            echo '<img class="banner-img" src="../ADMIN/UPLOAD/events/'.$row['image'].'" alt="img">';
                        }
                    ?>
                    
                </div>
                <div class="content">
                    <div class="title">
                        <h2><?php echo $row['Title'];?></h2>
                    </div>
                    <div class="details" style="margin-top: 25px;">
                        <i class="far fa-calendar-alt"></i><span>  <?php echo date("d F Y",strtotime($row['start_time'])) ?></span> <span> <?php echo $row['end_time']?></span><br>
                        <p style="margin-top: 5px; margin-bottom: 5px"><ion-icon name="pin"></ion-icon> <?php echo $row['event address'];?></p> 
                        <p style="margin-top: 5px; margin-bottom: 5px"><?php echo $row['event type'];?></p>
                    </div>
                    <div class="desc">
                        <p><?php echo $row['description'];?>
                    </p>
                    </div>

                </div>
            </div>
            <!-- <div class="gallery">
                <div class="row">
                    <div class="col">Gallery</div>
                </div>

            </div> -->
        </div>
    </div>
    <?php
    include '../FOOTER/footer.php';
    ?>
    <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");
            loader.classList.add("loader--hidden");
            loader.addEventListener("transitionend", () => {
                document.body.removeChild(loader);
            });
        });
    </script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="../ANIMATION/aos-master/dist/aos.js"></script>
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
    <script>
        AOS.init();
    </script>

</body>

</html>