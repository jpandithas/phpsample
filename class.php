<?php
/**
 * Date: 19-Dec-16
 * Time: 7:23 PM
 */

class SuperHero
{
    protected $HeroName;
    public $Powers;
    protected $Gender;

    public function __construct($name, $gender)
    {
        $this->HeroName = $name;
        $this->Gender = $gender;
        $this->Powers = array();
    }

    public function GetName()
    {
      return $this->HeroName;
    }

    public function GetGender()
    {
        return $this->Gender;
    }

    public function GetNumberOfPowers()
    {
        return count($this->Powers);
    }

    public function ShowPowers()
    {
        if (count($this->Powers)== 0) return false;
        foreach ($this->Powers as $key=>$power)
        {
            echo "Power {$key}: {$power} <br>";
        }
    }

    public function AddPower($power)
    {
        if (is_array($this->Powers))
        {
            array_push($this->Powers, $power);
        }
        else
        {
            $this->Powers = array($power);
        }
    }

    public function RemovePower($power)
    {
        $key = array_search($power,$this->Powers);
        if ($key)
        {
            unset($this->Powers[$key]);
            return true;
        }
        else
        {
            return false;
        }
    }
}

$batman = new SuperHero("Batman","Male");

echo "I am {$batman->GetName()},{$batman->GetGender()}!";

$batman->Powers = array("Dash","BatKick","Fly");

echo "<br> I have ".$batman->GetNumberOfPowers()." Powers <br>";

$batman->ShowPowers();
echo "<hr>";
$batman->AddPower("Call Alfred");

$batman->ShowPowers();
echo "<hr>";
$batman->RemovePower("Call Alfred");

$batman->ShowPowers();

?>