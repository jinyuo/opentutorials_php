<?php
//fianl : 오버라이드 불가 키워드
class ParentClass{
  function a(){
    echo 'parent';
  }
  final function b(){
    echo "Parent B";
  }
}

class ChildClass extends ParentClass{
  function a(){
    echo 'child';
  }//부모 클래스 오버라이드
  /*
  function b(){
    echo 'child B';
  }*/
}

$obj = new ChildClass();
$obj -> a();
 ?>
