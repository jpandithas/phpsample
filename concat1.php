<?php
/**
 * Date: 24-Nov-16
 * Time: 8:19 PM
 */

$head  = "<html>";
$body = "<body>";
$closure = "</body></html>";

$head .= "<title> Concat</title>";
$body .= "<p> this is some text </p>";
$body .= "<p> this is another paragraph </p>";

echo $head.$body.$closure;

?>