<?php
/**
 * Date: 20-Dec-17
 * Time: 7:22 PM
 */

$db_username = "root1";
$db_password="root1234";

try
{
    $dbh = new PDO('mysql:host=localhost;dbname=test', $db_username, $db_password);
}
catch (PDOException $e)
{
    echo $e->getMessage();
    die("FUBAR");
}
$stmt = $dbh->query("SELECT * from usr");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);

echo "<table border='1'>";
echo "<tr><th>id</th><th>username</th><th>password</th></tr>";
foreach ($result as $row)
{
    echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['password']."</td></tr>";
}
echo "</table>";


?>