<?php
//main
for ($i=0; $i <5 ; $i++) {
  numbering();
  echo "<br/>";
}

//define
function numbering(){
  $i = 0;
  while($i < 10){
    echo $i++;
  }
}

 ?>
