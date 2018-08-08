<?php
class Person{
  private $name;//인스턴스 변수
  static private $count = 0;//클래스 변수 : 모든 인스턴스가 공유한다.
  function __construct($name){
    $this->name =$name;
    self::$count=self::$count+1;
  }

  function enter(){
    echo '<h1>Enter ' . $this->name . ' ' . self::$count. '</h1>';
  }

  static function getCount(){
    return self::$count;
  }
}

$p1= new Person('egoing');
$p1->enter();
$p2= new Person('leeche');
$p2->enter();
$p3= new Person('duru');
$p3->enter();
$p4= new Person('taeho');
$p4->enter();

echo Person::getCount() . '<br/>';

//statc : 클래스 소속의 멤버 생성. self::
//그 외 : 인스턴스 소속의 멤버 생성 this->
 ?>
