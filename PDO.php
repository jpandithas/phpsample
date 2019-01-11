<?php 

$dbo = new PDO("mysql:host=localhost;dbname=pdotest", "root", "root1234");

$stmt = $dbo->query("SELECT * FROM users");

$stmt->

$results = $stmt->fetchAll();

var_dump($results);

foreach ($results as $row)
{
    $output = $row['id']." ".$row['username']." ".$row['email']."<br/>";
    print $output; 
}



?>