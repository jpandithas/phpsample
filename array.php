<?php
/**
 * Date: 01-Dec-16
 * Time: 8:40 PM
 */

$myarray = array("1","2","Batman",5);

var_dump($myarray);

$myarray[1] = "Robin";

echo $myarray[1]; // Arrays are MUTABLE

//referenced array
$heroesbycity = array("Green Arrow","Gotham"=>"Batman","Metropolis"=>"Superman","Central City"=>"Flash");

var_dump($heroesbycity);

echo $heroesbycity['Gotham'];

echo "</br> There are ".(count($heroesbycity))." heroes on my array";

array_push($heroesbycity,"Deadpool");


var_dump($heroesbycity);
