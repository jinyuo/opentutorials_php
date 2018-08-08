<?php
/*1
function foobar($arg, $arg2){
  echo __FUNCTION__ . " got $arg and $arg2<br/>\n";
}

class foo{
  function bar($arg, $arg2){
    echo __METHOD__ . " got $arg and $arg2<br/>\n";
  }
}

call_user_func_array("foobar" , array("one", "two"));

$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));
?>
  */
//2
namespace Foobar;

class Foo{
  static public function test($name){
    print "Hello {$name}!<br/>\n";
  }
}

call_user_func_array(__NAMESPACE__ . '\Foo::test' , array('Hannes', 'Aleydis'));
call_user_func_array(array(__NAMESPACE__."\Foo", 'test'), array('Philip'));

//3
$func = function($arg1, $arg2){
  return $arg1 * $arg2;
};

var_dump(call_user_func_array($func, array(2,4)));
print '<br/>';

//4
function mega(&$a){
  $a = 55;
  echo "function mega \$a = $a<br/>\n";
}

$bar = 77;
call_user_func_array(__NAMESPACE__. '\mega', array(&$bar));
echo "global \$bar=$bar<br/>\n";
 ?>
