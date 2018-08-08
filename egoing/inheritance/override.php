<?php
class ParentClass{
  function callMethod($param){
    echo "<h2>Parent {$param}</h2>";
  }
}


class ChildClass extends ParentClass{

  function callMethod($param){
    //parent:: = 부모 클래스 지정
    parent::callMethod($param);//부모 메소드 호출
    echo "<h2>Child {$param}</h2>";//추가 기능
  }
}

$obj = new ChildClass();
$obj->callMethod('method');
 ?>
