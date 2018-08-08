<?php
function get_members(){
  return ["egoing", "k8805", "sorialgi"];
}

var_dump(get_members());
print "<br/>";

$temp = get_members();
print $temp[1];
print "<br/>";

print get_members()[1];
 ?>
