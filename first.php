<?php
/**
 * Date: 19-Nov-15
 * Time: 7:26 PM
 */
$text = "PHP";
echo "Hello $text <br/>";
print ("Hello PHP Again!");
echo "<br/>";

// Set Variables
$num1 = 5;
$name = "PHP";
$price = 5.5;
$bool = TRUE;

#Test Variable Type - use gettype()

echo "num1 with value {$num1} is of type : ";
echo gettype($num1);
echo "<br/> name with value $name is of type : ";
echo gettype($name);
echo "<br/> price with value $price is of type : ";
echo gettype($price);
echo "<br/> bool with value $bool is of type : ";
echo gettype($bool);

// settype($price,'integer');

$new_price = (integer) $price; //we casted the $price var to an integer
echo "<br/> new_price with value $new_price is of type : ";
echo gettype($new_price);

echo "</br>";

$text1 = "I Like";
$text2 = "Harambe";

echo "This is strange: ".$text1." ".$text2;
?>









