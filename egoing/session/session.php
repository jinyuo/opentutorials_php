<?php
session_start();
//세트되어있지 않으면 로그인 실패 -> 로그인 화면으로 이동
if(!isset($_SESSION['is_login'])){
  header('Location: ./login.html');
}
 ?>

<!--로그인 성공 시 화면-->
 <html >
   <body>
     <?php echo $_SESSION['nickname']; ?> 님 환영합니다.<br/>
     <a href='./logout.php'> 로그아웃 </a>
   </body>
 </html>
