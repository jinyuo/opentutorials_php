<?php
ini_set("display_errors", "1");
session_save_path('./');
session_start( );
echo $_SESSION['title'];
//디렉토리의 세션 아이디를 읽어서 화면에 보여준다.
echo file_get_contents('./sess_' . session_id());
 ?>
