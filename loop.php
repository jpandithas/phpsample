<?php
/**
 * Date: 30-Nov-15
 * Time: 7:24 PM
 */

$values  = 10;
$i = 0;

echo "While .. DO <br>";
while ($i <= 10)
{
    echo "Value is: {$i} <br>";
    $i++;
}

echo "DO..While <br>";

do
{
    echo "Value is: {$i} <br>";
    $i++;
} while($i<=10);

echo "For Loop!</br>";

for ($i=0; $i <=10; $i++)
{
   // if ($i == 4) {break;}
    if ($i == 4) {continue;}
    echo "{$i} times 3 is ".($i * 3)."</br>";
}

/*
echo "Playing with arrays <br>";

$numbers_array = array(1,2,3,4,"Five",6,7,"End");

//var_dump($numbers_array);
// echo count($numbers_array);
//echo $numbers_array[0];

echo "The Array has ".count($numbers_array)." elements. <br>";
for ($j=0; $j < count($numbers_array); $j++)
{
    echo "Array Element $j is :".$numbers_array[$j]."<br>";
}

$daysofweek = array(
    "day1" => "Monday",
    "day2" => "Tuesday",
    "day3" => "Wednesday",
    "day4" => "Thursday",
    "day5" => "Friday",
    "day6" => "Saturday",
    "day7" => "Sunday"
);
var_dump($daysofweek);

//echo $daysofweek['day1'];

foreach ($daysofweek as $key => $value)
{
    echo "Element with key $key has a value of $value <br>";
}

*/

?>