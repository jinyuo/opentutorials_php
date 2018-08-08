<?php
class ParentClass{
  public $_public = '<h1>public</h1>';//부모자식 둘 다 접근
  //클래스 내에서만 유효. 자식은 접근 불가.
  private $_private = '<h1>private</h1>';//부모만 접근
  //부모 자식 간에서는 호출 가능. 메소드 밖에서는 호출 불가
  protected $_protected = '<h1>protected</h1>';
}

class ChildClass extends ParentClass{
  function callPublic(){
    echo $this->_public;
  }

  function callPrivate(){
    echo $this->_private;
  }

  function callProtected(){
    echo $this->_protected;
  }
}

$obj = new ChildClass();
echo $obj->_public;
//echo $obj->_private;//에러
//echo $obj->_protected;//에러

$obj->callPublic();
//$obj->callPrivate();//에러
$obj->callProtected();
 ?>
