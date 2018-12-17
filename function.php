<?php
/**
 * Date: 05-Dec-16
 * Time: 7:13 PM
 */

echo "The result is ".add_two_num(null,null)."<br>"; 

function add_two_num($x=0, $y=0)
{
    return $x+$y; 
}


/*echo "Result is: ".add_two_numbers(5,5.3);

function add_two_numbers($x,$y)
{
    return $x + $y;
}

function add_three_numbers($x,$y,$z)
{
    return $x + $y + $z;
    //add_two_numbers($x,$y) + $z;
    //return add_two_numbers(add_two_numbers($x,$y),$z);
}
*/
?>