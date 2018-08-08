<?php
class Person{
  private $name;

  function __construct($_name){
    $this -> name = $_name;
  }

  public function sayHi(){
    print "Hi, I'm {$this->name}. <br/>";
  }

  public function setName($_name){
    $this->ifEmthyDie($_name);
    $this->name = $_name;
  }

  public function getName(){
    return $this->name;
  }

  private function ifEmthyDie($value){
    if(emthy($value)){
      die('I need name');
    }
  }
}

$egoing = new Person('egoing');
$egoing -> sayHi();
print($egoing->getName());
 ?>
