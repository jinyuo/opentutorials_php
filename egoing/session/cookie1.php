<?php
  setcookie('cookie1','생활코딩');//key-value
  setcookie('cookie2', time(), time()+60);//time() : 현재 시각을 유닉스 타임스탬프로 저장
  //현재 시각부터 60초까지만 데이터 유효
  //쿠키는 사용자의 웹 브라우저에 저장
  //http는 상태가 없음
  //쿠키는 보안 상에서 신뢰할 수 없음 -> 유출되어도 문제 없는 데이터 저장해야 함
 ?>
