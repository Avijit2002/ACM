<?php
            $presentyear = date("Y");
            $presentmonth = date("m");
            $mdate = date_create("$presentmonth $presentyear");
                //echo date("m Y");

                $x= date_format(date_create("$presentyear-$presentmonth"),"Y m");
                $y= date_format(date_create("2021-09"),"Y m");
                echo $y;
                // $current = "$presentmonth $presentyear";
                // $prev = "02 2021";
                if($x>$y)
                {
                 echo "yesssss";
                 }
                 else{
                     echo "F";
                 }
                ?>