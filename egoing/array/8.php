<?php
function get_members(){
  return ["egoing","k8805","sorialgi"];
}

$members=get_members();


for ($i=0; $i < count($members); $i++) {
  //ucfirst() : 문자열의 첫 문자가 알파벳인 경우 대문자로 치환하여 리턴
  echo ucfirst($members[$i])."<br/>";
}
 ?>
