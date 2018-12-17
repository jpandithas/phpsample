<?php
/**
 * Date: 23-Nov-15
 * Time: 7:38 PM
 */

$head = "<html>";
$head .= "<head>";
$title = "<title> Concatenation Example </title>";
$head .= $title."</head>";

$body = "<body>";
$body .= "<h2> This is an Example </h2>";
$text = "This is SPARTA therefore PARTA";
echo $text;
$body .= "<p> This is a paragraph</p>";
$body .= "</body>";

$closure = "</html>";

$page = $head.$body.$closure;

echo $page;

?>