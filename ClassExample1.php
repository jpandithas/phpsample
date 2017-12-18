<?php 

//instantiate a new Class...
$a  = new ClassA(); 
//Access a Member (Property)
echo $a->var."<br><hr>"; // The '->' is the member modifier
//Access a Member (Method)
$a->displayVar();
echo "<br><hr>"; 
//Data can be modified
$b  = $a->var .= " .. added some more!"; 
echo $b."<br>";   

//A new Class with a constructor
$c  = new ClassB(); 
echo $c->member."<br><hr>"; 
//Uncomment the line below and Zend Goes KABOOM
//echo $c->myprivatestuff; 

//Inheritance 

$newclass = new ClassC("Just Inserted to Class C"); 
echo $newclass->member."<br>";
$newclass->GetData(); 

////// Definitions ////

class ClassA 
{
// property declaration
    public $var = 'a default value';
    
    // method declaration
    public function displayVar() 
	{
        echo $this->var;
    }
}

class ClassB 
{
	public $member;
	private $myprivatestuff; 
	
	function __construct ()
	{
		$this-> member = "I am public!"; 
		$this-> myprivatestuff = "You can't see me!"; 
	}
	
}

class ClassC extends ClassB
{
	 
	function __construct ($a)
	{
		$this-> member = $a; 
	}
	
	function GetData()
	{
		$this-> myprivatestuff = "My Privates are Exposed";
		echo $this-> myprivatestuff; 
	}
}
?>