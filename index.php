<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TINT ACM Student Chapter</title>
    <link rel="icon" href="img/icon96kb.ico">
    <link rel="stylesheet" href="CSS/loader.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css" class="css">
    <link rel="stylesheet" href="CSS/nav.css" class="css">
    <link rel="stylesheet" href="CSS/nav-main.css" class="css">
    <link rel="stylesheet" href="ANIMATION/aos-master/dist/aos.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="CSS/footer.css" class="css">
</head>

<body>
    <div class="loader"></div>
    <?php
    require 'ADMIN/_dbconnect.php';
    require 'NAV/nav-main.php';
    ?>
    <div class="supreme">
        <div class="top-container" id="particles-js">
            <div class="container-fluid fake-nav"></div>
            <div class="container-fluid first-row">
                <div class="row mid-head-row">
                    <div class="mid-head">
                        <div class="top_imge" data-aos="fade-right">
                            <div class="top-image-pic">
                                <img src="img/WhatsApp_Image_2022-12-19_at_4.47.40_AM-removebg-preview.png" alt="img">
                            </div>
                        </div>
                        <h1 data-aos="fade-left">Welcome to TINT ACM Student Chapter</h1>
                    </div>
                </div>
                <div class="row" style="text-align: center; margin-top:50px;">
                    <div class="row-but">
                        <div class="col-btn-1" data-aos="fade-left">
                            <div class=" btn-main-1" onclick="btn1()">
                                Explore
                            </div>
                            <script>
                                function btn1() {
                                    window.location.href = 'index.php#about';
                                    //header.loction('');
                                }
                            </script>
                        </div>
                        <div class="col-btn-2" data-aos="fade-right">
                            <div class=" btn-main-2" onclick="btn2()">
                                Join Now
                            </div>
                            <script>
                                function btn2() {
                                    window.location.href = 'https://www.acm.org/';
                                    //header.loction('');
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-container container-fluid">
        <div class="middle-poly container-fluid">
            <div class="row blank" id="about">
            </div>
            <div class="row row-r">
                <div class="col-lg-4"></div>
                <div class="col pt-2 ps-3 mt-2" data-aos="fade-left">
                    <div class="container-fluid about-section">
                        <h1>What is ACM?</h1>
                    </div>
                    <div class="container-fluid about-content">
                        <p>
                            The Association for Computing Machinery is a US-based international learned society for computing. It was founded in 1947 and is
                            the world's largest scientific and educational computing society. ACM brings together computing educators, researchers, and professionals
                            to inspire dialogue, share resources, and address the field's challenges. As the world’s largest computing society, ACM strengthens the profession's collective voice through
                            strong leadership, promotion of the highest standards, and recognition of technical excellence. ACM supports the professional
                            growth of its members by providing opportunities for life‐long learning, career development, and professional networking.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row-l">
                <div class="col acm-s" data-aos="fade-right">
                    <div class="container-fluid about-section">
                        <h1>TINT ACM Student Chapter</h1>
                    </div>
                    <div class="container-fluid about-content">
                        <p>Student Chapters provide unique opportunities for networking, mentoring and bonding over common interests. They provide support both
                            within the student community and to local communities outside the institution. TINT ACM student Chapter incepted in 2020 is committed to creating a vibrant and extensive
                            platform where students can gain exposure to a variety of concepts and expertise that the computing industry has to offer under one hood. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
            <div class="row row-r">
                <div class="col-lg-4">
                </div>
                <div class="col acm-s" data-aos="fade-left">
                    <div class="container-fluid about-section">
                        <h1>About Institute</h1>
                    </div>
                    <div class="container-fluid about-content">
                        <p>Techno International Newtown, formerly Known as Techno India College Of Technology(TICT), is an engineering college
                            in West Bengal, India. It is the seventh and youngest college established by the Techno India Group. The college is
                            located on 5 acres (20,000 m2) of land in the Megacity (New Town) area of Rajarhat, North 24 Parganas. It is
                            affiliated with Maulana Abul Kalam Azad University of Technology(formerly known as West Bengal University of
                            Technology) and its courses are approved by All India Council of Technical Education.</p>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <div class="sec-middle-container container-fluid">
        <div class="sec-middle-poly container-fluid">
            <div class="row blank">

            </div>
            <div class="row sec-middle-container-content" data-aos="fade-right">
                <div class="container-fluid about-section">
                    <h1>Benifits of joining TINT ACM Student Chapter</h1>
                </div>
                <div class="container-fluid">
                    <p>There are many reasons to join ACM. When you become a member, you become a part of the dynamic changes that
                        are transforming our world by helping to shape the future of computing. ACM provides the tools and resources
                        to help get you there by advancing your career and enriching your knowledge with life-long learning resources.</p>
                    <ul>
                        <li>
                            A vast network of nearly 100,000 highly dedicated student and professional peers.
                        </li>
                        <li>
                            Access to the full ACM Digital Library, which includes over 2 million pages of text.
                        </li>
                        <li>
                            Chapter Members are eligible for a three-month complimentary electronic subscription to ACM’s flagship publication Communications of the ACM.
                        </li>
                        <li>
                            Chapter members are eligible for an “acm.org” email forwarding address with filtering.
                        </li>
                        <li>
                            TechNews, the latest news in computing, 3x weekly; CareerNews, the latest career and industry news, bi-monthly; and MemberNet, all about ACM people and events monthly.
                        </li>
                        <li>
                            A full-year electronic subscription to XRDS, ACM's Student Magazine
                        </li>
                        <li>
                            ACM Student Quick Takes (SQT) a quarterly email newsletter with each issue highlighting ACM activities, programs, and offerings of interest.
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" btn-main-3" onclick="btn3()">
                Join now
            </div>
            <script>
                function btn3() {
                    window.location.href = 'https://www.acm.org/';
                    //header.loction('');
                }
            </script>
        </div>
    </div>
    <div class="lower-container container-fluid">
        <div class="lower-poly container-fluid">
            <div class="row blank"></div>
            <div class="container-fluid">
                <div class="mainPage_event_pad">
                    <div class="row mainPage_event">
                        <h1 data-aos="fade-in">TINT ACM Student Chapter</h1>
                        <p data-aos="zoom-in">We at TINT ACM student Chapter are committed to creating a vibrant and
                            extensive platform where students can gain exposure to a variety of concepts and
                            expertise that the computing industry has to offer.</p>
                        <div class="col-lg-6" style="background: rgb(248,222,186);
background: radial-gradient(circle, rgba(248,222,186,0.7682423311121324) 5%, rgba(248,222,186,0.8102591378348214) 31%, rgba(235,229,232,0) 73%);">
                            <h2 data-aos="fade-right">RECENT EVENT</h2>
                            <!-- yaha small screen ke liye padding hatana parega -->
                            <?php
                            date_default_timezone_set('Asia/Kolkata');
                            $d = date("Y-m-d");
                            //echo $d;
                            $sql = "SELECT * FROM `events` WHERE DATEDIFF(`start_time`, '$d')<0 ORDER BY `events`.`start_time` DESC";
                            $result = mysqli_query($conn, $sql) or die("ERROR");
                            $num = mysqli_num_rows($result);
                            //echo $num;
                            if ($num > 0) {

                                $row = mysqli_fetch_assoc($result);
                            ?>
                                <div class="c-cards" data-aos="flip-right">
                                    <div class="container-fluid carde">
                                        <div class="container-fluid pic">
                                            <?php
                                            if (empty($row['image'])) {
                                                echo '<img class="profile-pic" src="img/isometric-people-team-contemporary-management-concept/2922875.jpg" alt="">';
                                            } else {
                                                echo '<img class="profile-pic" src="ADMIN/UPLOAD/events/' . $row['image'] . '" alt="hi">';
                                            }
                                            ?>


                                        </div>
                                        <div class="container-fluid card-content">
                                            <h6><?php echo $row['Title']; ?></h6>
                                            <div style="padding-left: 10px; display: flex; justify-content: space-between;margin-top: 20px;">
                                                <span style="padding-top: 5 px;"><i class="far fa-calendar-alt"></i>
                                                    <?php echo date("d F", strtotime($row['start_time'])) ?></span>

                                                <span style="margin-right: 5px">
                                                    <a href=<?php echo '"EVENTS/events-desc.php?num=' . $row['sln'] . '"' ?>>Read-more</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php

                            } else {
                            ?>
                                <div class="no-event" style="height: 400px;margin: 0% auto; display:flex; align-items: center; justify-content: center;">
                                    <h4 style="font-size: 30px; font-weight:700; color:#494869"><i>No upcoming event</i></h4>
                                </div>
                            <?php
                            }
                            ?>


                        </div>
                        <div class="col-lg-6" style="background: rgb(248,222,186);
background: radial-gradient(circle, rgba(248,222,186,0.7682423311121324) 5%, rgba(248,222,186,0.8102591378348214) 31%, rgba(235,229,232,0) 73%);">
                            <h2 style="margin-top: 4%;" data-aos="fade-left">UPCOMING EVENT</h2>
                            <!-- yaha small screen ke liye padding hatana parega -->
                            <?php
                            date_default_timezone_set('Asia/Kolkata');
                            $d = date("Y-m-d");
                            //echo $d;
                            $sql = "SELECT * FROM `events` WHERE DATEDIFF(`start_time`, '$d')>=0 ORDER BY `events`.`start_time` ASC";
                            $result = mysqli_query($conn, $sql) or die("ERROR");
                            $num = mysqli_num_rows($result);
                            //echo $num;
                            if ($num > 0) {

                                $row = mysqli_fetch_assoc($result);
                            ?>
                                <div class="c-cards" data-aos="flip-left">
                                    <div class="container-fluid carde">
                                        <div class="container-fluid pic">
                                            <?php
                                            if (empty($row['image'])) {
                                                echo '<img class="profile-pic" src="img/isometric-people-team-contemporary-management-concept/2922875.jpg" alt="">';
                                            } else {
                                                echo '<img class="profile-pic" src="ADMIN/UPLOAD/events/' . $row['image'] . '" alt="hi">';
                                            }
                                            ?>
                                        </div>
                                        <div class="container-fluid card-content">
                                            <h6><?php echo $row['Title']; ?></h6>
                                            <div style="padding-left: 10px; display: flex; justify-content: space-between;margin-top: 20px;">
                                                <span style="padding-top: 5 px;"><i class="far fa-calendar-alt"></i>
                                                    <?php echo date("d F", strtotime($row['start_time'])) ?></span>

                                                <span style="margin-right: 5px">
                                                    <a href=<?php echo '"EVENTS/events-desc.php?num=' . $row['sln'] . '"' ?>>Read-more</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php

                            } else {
                            ?>
                                <div class="no-event">
                                    <h4><i>No upcoming event</i></h4>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="row link" style="padding: 5% 7% 8% 7%; margin: 0;">
                            <h2 data-aos="fade-in" style="margin: 0 auto;">QUICK LINKS</h2>
                            <div class="col-xxl-4 col-lg-6">
                                <div class="mainPage_event_card" data-aos="fade-in">
                                    <p>Explore events in event section.</p>
                                    <a class="main_event_btn-1" href="EVENTS/event.php">Events</a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6">
                                <div class="mainPage_event_card" data-aos="fade-in">
                                    <p>Know about Members in members section</p>
                                    <a class="main_event_btn-1" href="MEMBERS/member.php">Members</a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6">
                                <div class="mainPage_event_card" data-aos="fade-in">
                                    <p>See Pictures of events in gallery</p>
                                    <a class="main_event_btn-1" href="#" disabled>Gallery</a>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="sec-lower-container container-fluid">
        <div class="container-fluid">
            <h1 data-aos="fade-in">Connect With Us</h1>
        </div>
        <div class="fluid-container icons" data-aos="fade-in">
            <a href="https://www.facebook.com/tintacmsc/?ti=as" target="_blank"><img src="img/icons8-facebook-64.png"  alt="" class="icon"></a>
            <a href=""><img src="img/icons8-linkedin-64.png" alt="" class="icon"></a>
            <a href=""><img src="img/icons8-instagram-64.png" alt="" class="icon"></a>
            <a href="https://api.whatsapp.com/send?phone=917003607344&data_filter_required=AWAyI5exegq0K6Oxu_YzNbc2yL2koWmwlD7_OBVBb2Ymgheq03koc1XgaiOR_eklWp9_ptHxJuQPjT6fhdVNLEvopx1xXi__i3XGURoolPNiyUiLQJwshYmWMiirPX34k5AV8z5kW8wSrKRD6Wdy5LNGGEbOSDRIBOiSzZrXgX2kgrm00UtKqUhYPdYGo4EVfSELzHIycXAnDXwMgIKVTCA8Dq3uoJvkWDSiA23taV5R6wri4UfspBSuNcwBUIABRsmFM3pUKIMjWZa9R3guug&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR1RNTx_5B1uqhabAED1qmf1ki9EXlpKvqFx6kWMe4Fv54ve7NG_8qdYb3Q" target="_blank"><img src="img/icons8-whatsapp-64.png" alt="" class="icon"></a>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row end-sec">
            <h1 data-aos="fade-in">Reach Us</h1>
            <div class="col-lg-6">
                <div class="contacts" data-aos="fade-right">
                    <h3>CONTACTS</h3>
                    <div style="text-align: left; width:80%; margin:0 auto;">
                        <i><b>Faculty Coordinator Prof. Tanusree Chatterjee:</b> tnsr.chatterjee@gmail.com</i><br>
                        <i><b>Chair Triptanjana Sarangi:</b> triptanjana@gmail.com</i><br>
                        <i><b>Vice-Chair Sayak Ghosh:</b> gsayak22@gmail.com</i><br>
                        <i><b>Treasurer Ankit Bhattacharyya:</b> ankitbhattacharyya666@gmail.com</i><br>
                        <i><b>Web Master Avijit Ram:</b> avijitram2013@gmail.com</i><br>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="contacts" data-aos="fade-left">
                    <h3>LOCATION</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.0195509556966!2d88.47358131472849!3d22.578372085179794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02753269586b03%3A0xfbb4d0c346a81109!2sTechno%20International%20New%20Town%20(formerly%20Techno%20India%20College%20of%20Technology)!5e0!3m2!1sen!2sin!4v1668340694108!5m2!1sen!2sin" class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>

    </div>
    <?php
    require 'FOOTER/footer.php';

    ?>
    <script src="JS/nav.js"></script>
    <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");
            loader.classList.add("loader--hidden");
            loader.addEventListener("transitionend", () => {
                //document.body.removeChild(loader);
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="JS/particles.js"></script>
    <script src="JS/particles_app.js"></script>
    <script src="ANIMATION/aos-master/dist/aos.js"></script>
    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
    <script>
        AOS.init();
    </script>

</body>

</html>