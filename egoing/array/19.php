<?php
//빈 배열 정의
$grades = [];
$grades['egoing'] =10;
$grades['k8805'] = 6;
$grades['sorialgi'] = 80;
var_dump($grades);
print "<br/>";

foreach ($grades as $key => $value) {
  echo "key : {$key} value : {$value}<br/>";
}
 ?>
