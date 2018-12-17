<?php
/**
 * Date: 01-Dec-16
 * Time: 6:39 PM
 */

$daysofweek  = "Tuesday";

switch (strtolower($daysofweek))
{
    case "monday":
        echo "Mondays are full of work";
        break;
    case "tuesday":
        echo "Tuesdays are better";
        break;
    case "wednesday":
        echo "We do laundry on Wednesdays";
        break;
    case "thursday":
        echo "One day before Friday";
        break;
    case "friday":
        echo "We can go for drinks on Friday";
        break;
    case "saturday":
        echo "We can go to the Cinema on Saturday";
        break;
    case "sunday":
        echo "We can get some sleep";
        break;
    default:
        echo "not a proper day!";
        break;
}

?>