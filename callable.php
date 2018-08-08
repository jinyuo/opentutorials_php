<?php
//1
function my_callback_function(){
  echo "hello world!<br/>\n";
}

class MyClass{
  static function myCallBackMethod(){
    echo "Hello World!<br/>\n";
  }
}
 call_user_func('my_callback_function');

 call_user_func(array("MyClass",'myCallBackMethod'));

 $obj = new MyClass();
 call_user_func(array($obj, 'myCallBackMethod'));

 call_user_func('MyClass::myCallBackMethod');

 class A{
   public static function who(){
     echo "A<br/>\n";
   }
 }

 class B extends A{
   public static function who(){
     echo "B<br/>\n";
   }
 }

 call_user_func(array('B','parent::who'));

 class C{
   public function __invoke($name){
     print ('Hello ' . $name ). "<br/>\n";
   }
 }

 $c = new C();
 call_user_func($c, "PHP!");

 //2
 $double = function($a){
   return $a*2;
 };

//1부터 5까지 저장
 $numbers = range(1,5);

//배열에 함수 적용
 $new_numbers =array_map($double, $numbers);

//문자열 합침
//문자열 나누는 건 explode(나누는 기준, 나눌 분자열);
 print implode(' ', $new_numbers);
 ?>
