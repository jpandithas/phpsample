<?php
/**
 * Date: 26-Nov-15
 * Time: 7:15 PM
 */

$price = 100;

if ($price > 100)
{
    echo "The item is expensive. Price: {$price}";
}
elseif ($price == 100)
{
    echo "The price is 100!";
}
else
{
    echo "The item is cheap Price: {$price}";
}

echo "<br/>";

$options = 2;

switch ($options) {
    case 1:
        $selected = 1;
        break;
    case 2:
        $selected = 2;
        break;
    case 3:
        $selected = 3;
        break;
    default:
        $selected  = 0;
        break;
}

if ($selected == 0)
{
    echo "No valid options";
}
else
{
    echo "Option {$selected} was selected";
}

echo "<br/>";

$msg = ($selected == 0) ? "No Valid Options" : "Option {$selected} was selected";

echo $msg;


?>