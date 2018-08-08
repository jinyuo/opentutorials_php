<?php
$dir = "./";//현재 경로 지정
$files1 = scandir($dir);//인자에 해당하는 경로 검색
$files2 = scandir($dir, 1);//두번째 인자에 값을 주어 정렬 순서를 반대로

print_r($files1);
print "<br/>";
print_r($files2);
 ?>
