<?php
//현재 애플리케이션이 동작하고 있는 경로 알려줌
echo getcwd()."<br/>";
//주어진 경로로 현재 경로가 이동
//..은 부모 디렉토리를 의미함.
chdir("../");
echo getcwd()."<br/>";
 ?>
