<?php
//1
class PropertyTest{
  private $data = array();
  public $declared = 1;
  private $hidden = 2;

  public function __set($name, $value){
    echo "Setting $name to $value<br/>\n";
    $this->data[$name] = $value;
  }

  public function __get($name){
    echo "Getting $name<br/>\n";
    if(array_key_exists($name, $this->data)){
      return $this->data[$name];
    }

    $trace = debug_backtrace();
    trigger_error(
      "Undefined property via __get():" . $name .
      ' in ' . $trace[0]['file'] .
      ' on line ' . $trace[0]['line'], E_USER_NOTICE);
      return null;
  }

  public function __isset($name){
    echo "Is $name set?<br/>\n";
    return isset($this->data[$name]);
  }

  public function __unset($name){
    echo "Unsetting $name<br/>\n";
    unset($this->data[$name]);
  }

  public function getHidden(){
    return $this->hidden;
  }
}

$obj = new PropertyTest;
$obj->a  = 1;
echo $obj-> a . "<br/>\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "<br/>\n";

echo $obj->declared . "<br/>\n";

echo "Let's experiment with the private property named 'hidden':<br/>\n"
      . "Privates are visible inside the class, so __get() not used...<br/>\n"
      . $obj->getHidden() . "<br/>\n"
      . "Privates not visible outside ofu class, so __get() ia used...<br/>\n"
      . $obj->hidden . "<br/>\n";

//2
class MethodTest{
  public function __call($name, $arguments){
    echo "Calling object method {$name} " . implode(", ", $arguments) . "<br/>\n";
  }
  public static function __callStatic($name, $arguments){
    echo "Calling static method {$name} " . implode(", ", $arguments) . "<br/>\n";
  }
}

$obj = new MethodTest;
$obj -> runTest('in object context');

MethodTest::runTest('in static context');
?>
