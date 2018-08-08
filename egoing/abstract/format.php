<?php
abstract class ParentClass{
  public function a(){
    echo 'a';
  }

  //자식 클래스의 b 메소드 구현 강제
  public abstract function b();
}

//a 메소드 가짐
class ChildClass extends ParentClass{
  public function b(){

  }
}
 ?>
