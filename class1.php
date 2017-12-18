<?php
/**
 * Date: 29-Nov-17
 * Time: 7:02 PM
 */


$jane = new Student("Jane", "Jones", 20, "Female");

var_dump($jane);


echo($jane);

echo "<br>Hello my name is: ".$jane->GetName();

$jane->SetName("");

echo "<br> New name is: ".$jane->GetName();

$jane->SetGender("female");

echo "<br> Gender: ".$jane->GetGender();

$jane->SetDOB(19,10,1987);

echo "<br>My DOB is: ".$jane->GetDOB()." and I am ".$jane->GetAge()." years old";
echo "<hr>";

include_once("class_date.php");

$date = new Date(01,10,1975);
echo $date->GetDate("-")."<br>";


$newclassdate = new NewDate(10,10,2017);

echo $newclassdate->getCurrentDate();


var_dump(getdate());


class Student
{
    protected $name;
    protected $surname;
    protected $dob;
    protected $gender;


    function __construct($name, $surname, $gender)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this-> gender = $gender;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetSurnname()
    {
        return $this->surname;
    }

    public function SetName($name)
    {
        if ( self::validate_input($name) and is_string($name))
        {
            $this->name = $name;
            return true;
        }
        return false;
    }

    public function GetFullName()
    {
        return $this->name." ".$this->surname;
    }

    public function GetGender()
    {
        return $this->gender;
    }

    public function SetGender($gender)
    {
        if (self::validate_input($gender) and (strtolower($gender) == 'male' or strtolower($gender)== 'female'))
        {
            $this->gender = strtolower($gender);
            return true;
        }
        return false;
    }

    public function SetDOB($dd,$mm,$yyyy)
    {
        if (self::validate_input($dd) or self::validate_input($mm) or self::validate_input($yyyy))
        {
            if (is_int($dd) and ($dd >= 1 or $dd <= 31))
            {
                if (is_int($mm) and ($mm > 0 or $mm < 13))
                {
                    if (is_int($yyyy) and ($yyyy > 1900 or $yyyy < 2100))
                    {
                        $this->dob = $dd.'/'.$mm.'/'.$yyyy;
                    }
                }
            }
        }
        return false;
    }

    public function GetDOB()
    {
        return $this->dob;
    }

    public function GetAge()
    {
        $date_array = explode("/",$this->GetDOB());
        $current_date = getdate();
        return $current_date['year']-$date_array[2];
    }

    protected static function validate_input($input)
    {
        if (!empty($input) and str_replace(" ","",$input)) return true;

        return false;
    }

    public function __toString()
    {
        return $this->GetFullName()." ".$this->gender;
    }



}

?>