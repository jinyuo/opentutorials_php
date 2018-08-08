<?php
session_start();
$id = 'egoing';
$pwd = '111111';

if (!empty($_POST['id']) && !empty($_POST['pwd'])) {
  if ($_POST['id'] == $id && $_POST['pwd'] == $pwd) {
    $_SESSION['is_login']=true;
    $_SESSION['nickname']='이고잉';
    //session.php 로 이동시킴
    header('Location: ./session.php');
    exit;
  }
}
echo "로그인 하지 못 했습니다.";
 ?>
