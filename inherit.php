<?php
/**
 * Date: 09-Jan-17
 * Time: 7:00 PM
 */

class BaseCharacter
{
    public $health;
    public $armor;
    protected $abilities;

    public function ApplyAbilities()
    {
      echo "Abilities applied";
    }

    protected function CheckAbilities()
    {
        return true;
    }
}

class Hero extends BaseCharacter
{
   public $name;

    public function SayName()
    {
        echo "I am ".$this->name;
    }

    public function ApplyAbilities()
    {
        echo "My HERO ABILITIES!!";
    }
}

$basechar = new BaseCharacter();
$basechar->ApplyAbilities();

echo "<hr>";

$hero = new Hero();
$hero->ApplyAbilities();


?>