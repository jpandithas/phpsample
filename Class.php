<?php
/**
 * Date: 14-Jan-16
 * Time: 7:00 PM
 */

include("UserClass.php");

$nuser = new User("john","1234");
echo $nuser->usrToString();
$nuser::$type=5;
echo "<br> Hello ".$nuser->getUsername();

$nuser->setPassword("abdcde");
echo "<br>".$nuser->usrToString();

$myuser = new User("jim","2345");
echo "<br>".$myuser->usrToString();
echo "<br>".$myuser::$type;

if ($myuser->Validate($myuser::$type)) {echo "<br> Valid!";}

$extUser = new ExtendedUser("joe","2345","Jimmy");
echo "<br>".$extUser->DoExtendedStuff();
echo $extUser::$type;

var_dump($extUser);

$newEUser = $extUser;

var_dump($newEUser);

$newEUser = null;

var_dump($newEUser);

?>