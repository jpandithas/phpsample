<?php
/*
* Security[] class is static 
*/
class Security
{
    static function Encrypt($password)
    {
        return md5($password); 
    }
}

class User
{
    protected $firstname; 
    protected $lastname; 
    protected $username; 
    public $password; 

    public function __construct($name, $surname, $uname)
    {
        $this->firstname = $this->valid($name);
        $this->lastname = $this-> valid($surname); 
        $this->username = $this-> valid($uname); 
    }

    protected function valid($var)
    {
        if (empty($var)) {
            return null; 
        }

        if (!is_string($var))
        {
           return (String) $var; 
        }

        return $var; 
    }


    public function NameToString()
    {
        return $this->firstname." ".$this->lastname; 
    }

    /*PHP Document Block
    * @name GetName
    * @param none 
    * @return String First Name
    */
    public function GetName() 
    {
        return $this->firstname; 
    }

    public function GetSurname()
    {
        return $this->lastname; 
    }

    public function GetUsername()
    {
        return $this->username; 
    }


    public function SetPassword($password)
    {
        if (empty($password)) 
        {
            return false; 
        }

        $this->password = Security::Encrypt($password);  

        return true; 
    }

    public function GetPassword ()
    {
        return $this->password; 
    }
}

class Cart
{

    public function __construct(User $user)
    {
        #code
    }

}

$user = new User( "John", "Doe", "johndoe1");  

echo $user->NameToString(); 

echo "<br/>".$user->GetName();

$user->SetPassword("123456"); 


echo "<br> Password for user '{$user->GetUsername()}' is: {$user->GetPassword()}"; 

$cart  = new Cart($user); 



?>