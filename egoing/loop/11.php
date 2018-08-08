<?php
for ($i=0; $i < 10; $i++) {
  if($i===5)
    continue;
  echo "coding everybody {$i}<br/>";
}
//continue : 다음 반복으로 넘긴다.
/*
0
1
2
3
4
6
7
8
9
*/
 ?>
