<?php

//사용하고자 하는 클래스가 없는 경우 실행 -> 동적으로 필요 클래스 로딩
//익명 함수
//콜백 함수
spl_autoload_register(function ($path){
  $path = str_replace('\\', '/' , $path);
  $path .= '.php';
  print("path : {$path}");
  require_once $path;
});

 ?>
