<?php
require "../ADMIN/_dbconnect.php";
//var_dump(isset($_POST["year_value"]));
$month = $_POST["month_value"];
$year = $_POST["year_value"];
//echo $year;
$d= date("Y-m-d"); 
$sql = "SELECT * FROM `events` WHERE MONTH(`start_time`) = '$month' AND YEAR(`start_time`) = '$year'";
$result = mysqli_query($conn,$sql) or die("ERROR");
$num = mysqli_num_rows($result);
$output = "";
//echo $num;
if($num>0)
{   $output = '';
    while($num--)
    {
        $row = mysqli_fetch_assoc($result);
        //echo date("d", strtotime($row['start_time'])); //May

                 $output .='       <div class="row" >
                            <div class="container-fluid month-events">
                                <ul>
                                    <li>
                                        <div class="time">
                                            <div class="month-time-content">
                                            <h2>'.date("d", strtotime($row['start_time'])).'<br><span>'.date("F", strtotime($row['start_time'])).'</span> </h2>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <h3>'.substr($row['Title'],0,48).'...</h3>
                                            <a href="../EVENTS/events-desc.php?num='.$row['sln'].'">View Details</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>    
                        </div>';
    }

    echo $output;
}
else{
    echo '<h4 style=" font-weight:700; color:#494869"><i>No events this month</i></h4>';
}


?>