<?php
//단따옴표에서는 \n 안 먹힘 -> 이스케이핑 안 됨.
echo "hello \"world\"\n";
echo 'hello \'world\'<br/>';

$a = array('hello', 'world');

echo "생활코딩의 공식인사는 {$a[0]} {$a[1]}입니다.<br/>";
echo "생활코딩의 공식인사는 ". $a[0]. " " . $a[1]. "입니다.<br/>";


 ?>
