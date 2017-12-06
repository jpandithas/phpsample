<?php
/**
 * Date: 18-Jan-16
 * Time: 8:54 PM
 */

interface iValidator
{
    public function Validate($data);
}

class User implements iValidator
{
    protected  $username;
    protected  $password;
    private $privateStuff;

    public static $type;

    public function __construct($usr, $pass)
    {
        $this->username = $usr;
        $this->password = $pass;
        $this->privateStuff = "Private Data";
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($newpasswd)
    {
        if (empty($newpasswd))
        {
            return False;
        }
        else
        {
            $this->password = $newpasswd;
        }
    }

    public function getPassword()
    {
        return md5($this->password);
    }

    public function usrToString()
    {
        return "Username:".$this->username." Password: ".$this->getPassword();
    }


    public function Validate($data)
    {
        if (empty($data))
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}

class ExtendedUser extends User
{
    public $name;

    public function __construct($username, $password, $fname)
    {
        $this->username = $username;
        $this->password = $password;
        $this->name = $fname;
    }

    public function DoExtendedStuff()
    {
        return $this->usrToString()." Name:".$this->name;
    }

    public function getPassword()
    {
        return md5("1234".$this->password);
    }

}


?>