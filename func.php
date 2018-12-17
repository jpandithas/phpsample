<?php
/**
 * Date: 23-Nov-15
 * Time: 8:37 PM
 */

$sum = Add(2,3);
echo "The Result is:{$sum}<br/>";

$name = "John";
echo $name."<br/>";
$$name="Smith";
echo $$name."<br/>";
echo "My name is {$name} and surname is {$John}";
function Add ($num1, $num2)
{
    $result  = $num1 + $num2;
    return $result;
}

?>