<?php
//include : 존재하지 않는 파일 로드 시 경고
//require : 존재하지 않는 파일 로드 시 fatal error
//_once 접미사가 붙은 것은 파일 로드 시 같은 파일은 한 번만 로드 한다는 뜻
include 'greeting.php';

print welcome();
 ?>
