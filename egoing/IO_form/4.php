<?php
//실행 방법 = http://localhost/IO_form/2.php?id=입력값&password=입력값
//결과  = 입력값, 입력값
//&은 url 상의 입력값을 구분하는 구분자
//?은 url 상의 주소와 입력값을 구분하는 구분자
//=은 url 상의 값의 이름과 값을 구분하는 구분자
//POST 방식으로 데이터 받음
echo $_POST['id'].", ".$_POST["password"];

//실제로는 url에 입력값을 직접 넣지않고 폼이라는 것을 사용
?>
