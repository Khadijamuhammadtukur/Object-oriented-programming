Assignment 1:
Q1;
<?php
// programming (functional)
function greetfunctional($name) {
    echo "hello, $name";
}
greetfunctional( "john");
echo"<br>";
//procedural programming
function greetprocedural($name) {
    echo "Hii, $name";
}
function askHowAreYou(){
    echo "Howareyou?";
}
greetprocedural("precious");
askHowAreYou();
echo "<br>";

// object-oriented programming
class person{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function greet() {
        echo "Hello, " . $this->name . "!";
    }
    public function askHowAreYou() {
        echo "HowAreYou, " .
$this->name . "?";
    }
}
$person = new person("hanifa");
$person->greet();
$person->askHowAreYou();
?>

Q2:
Class



	Cars
	


                            Object	          Properties



Toyota       Mercedes    Volvo        Move     Stop      Spoil  

Q3:
<?php

class fruit{
    public $name;
    public $color;
    public function setname($name){
        $this->name = $name;
    }
    public function getname() {
        echo "the name of the fruit is "  .  $this->name;
    }
    public function setcolor ($color) {
        $this->color = $color;
    }
    public function getcolor () {
        echo "the color of the fruit is "  .  $this->color;
}
}
$orange = new Fruit();
$orange->setName('orange');
$orange->setColor('yellow');
echo $orange->getName();
echo "</br>";
$orange->getColor();
echo "</br>";
$pear = new fruit();
$pear->setName('pear');
$pear->setColor('green');
echo $pear->getName();
echo "</br>";
echo $pear->getColor();
echo "</br>";
$apple = new fruit();
$apple->setName('apple');
$apple->setColor('red');
echo $apple->getName();
echo "</br>";
echo $apple->getColor();
echo "</br>";
$grapes = new fruit();
$grapes->setName('grapes');
$grapes->setColor('purple');
echo $grapes->getName();
echo "</br>";
echo $grapes->getColor();
echo "</br>";

Assignment 2:
Q1;
Abstraction is a concept in programming where you focus on the essential features of an object or system, while hiding the unnecessary details. It helps in creating reusable and modular code.
An example of abstraction is a “vehicle” class.it can have methods like “start Engine ()”, but it does not specify the exact implementation for different types of vehicles like cars, motorcycle and trucks.
Another example is a “shape” class. It can have a method like “calculate Area ()”, but it does define the specific calculation for different shape like circles, squares and triangles.

Q2;
<?php
class greetings{
    public function sayHello(){
        echo "Hello precious";
    }
}
class cat { 
public function meow(){
echo "Meow! Meow!";
}
}
class snake {
public function hiss() {
echo "mtcheeeeeeeeew! mtcheeeeeeeeew!";
}
}
$greetings = new greetings();
$greetings->sayHello();
echo "<br>";

$snake = new cat();
$snake->meow();
echo "<br>";
$snake = new snake();
$snake->hiss();
echo "<br>";

Q3;
<?php
//for function overriding
class shape{
    function area($a,$b){
        echo "The sum of the area is  " .($a+$b);
    }
     function add($a,$b,$c){
        echo "The sum is" .($a + $b + $c);
     }  
}

$shape1= new shape();
$shape1->area(5,10);
echo "<br>";
$shape2 = new shape();
$shape2->add(20,30,60);
echo "<br>";
//for function overloading
class cloth{
    function color(){
        echo "The cloth is pitch";
    }
}
class cotton extends cloth{
    function type(){
        echo "The cotton has a blue type";
    }
} 
class treads extends cloth{
    function black(){
        echo "The treads used is black";
    }
}
$cloth = new cloth();
$cloth->color();
echo "<br>";
$cotton = new cotton();
$cotton->type();
echo "<br>";
$treads = new treads();
$treads->black();
?>
Q4what are the limitations of OOP.
          Answer
1: Steeper learning curve: OOP can be more complex to grasp compared to procedural programming. It also requires understanding concepts like class, objects, inheritance, and polymorphism.
2: Performance overhead: OOP can introduce some performance overhead due to the dynamic dispatch and method lookup mechanisms.
3: Difficulty in testing: OOP code can be more difficult to test in isolation due to tight coupling between classes and dependencies on external resources.
4: Lack of concurrency: OOP does not inherently provide strong support for concurrent programming. Handling concurrency and synchronization can be challenging in OOP.
5: Overuse of inheritance: If inheritance is used excessively, it can lead to a complex and tightly couple codebase, making it harder to maintain and modify.


































