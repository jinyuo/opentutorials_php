<?php
$id = $_POST['id'];
if (
    ($id==='egoing' || $id==='k8805' || $id==='sorialgi')
    and $_POST['password']==='111111') {
  echo "right";
} else {
  echo "wrong";
}
 ?>
