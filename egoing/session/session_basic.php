<?php
//세션 데이터 저장 경로
session_save_path('./');
session_start( );//로직 초입에 작성. 헤더로 전달되기 때문
$_SESSION['title']='생활코딩2';
 ?>
