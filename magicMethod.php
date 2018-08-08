<?php
//1
class Connection{
  protected $link;
  private $dsn, $username, $password;

  public function __construct($dsn, $username, $password){
    $this->dsn= $dsn;
    $this->username = $username;
    $this->password=$password;
    $this->connect();
  }

  private function connect(){
    $this->link = new PDO($this->dsn, $this->username, $this->password);
  }

  public function __sleep(){
    return array('dsn', 'username', 'password');
  }

  public function __wakeup(){
    $this->connect();
  }
}


//2
class TestClass{
  public $foo;

  public function __construct($foo){
    $this->foo = $foo;
  }

  public function __toString(){
    return $this->foo;
  }
}

$class = new TestClass('Hello');
echo $class . "<br/>\n";

//3 __invoke
class CallableClass{
  public function __invoke($x){
    var_dump($x);
  }
}
$obj = new CallableClass;
$obj(5);
var_dump(is_callable($obj));

//4 __set_state
class A{
  public $var1;
  public $var2;

  public static function __set_state($an_array){
    $obj = new A;
    $obj->var1=$an_array['var1'];
    $obj->var2=$an_array['var2'];
    return $obj;
  }
}

$a = new A;
$a->var1 = 5;
$a->var2='foo';

eval('$b = ' . var_export($a ,true). ';');

var_dump($b);

//5 __debugInfo
class C{
  private $prop;

  public function __construct($val){
    $this->prop=$val;
  }

  public function __debugInfo(){
    return array(
      'propSquared'=>$this->prop ** 2,//**==power($this->prop, 2)
    );
  }
}
var_dump(new C(42));
 ?>
