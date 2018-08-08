<?php
$li = ["a", "b", "c", "d", "e"];
//두 번째 인덱스 뒤에 값 삽입
array_splice($li, 2, 0, "B");
//배열 결합
var_dump($li);
 ?>
