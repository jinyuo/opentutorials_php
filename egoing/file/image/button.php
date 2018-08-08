<?php
 //header : http 프로토콜과 관련. 제일 위에 위치해야 한다.
 header("Content-type: image/png");
 $string = $_GET["text"];//url 상에 입력된 값 저장
 $im = imagecreatefrompng("button.png");//이미지 파일에 대한 식별자
 $color = imagecolorallocate($im, 60, 87, 156);//이미지 식별자, RGB. 이미지 색 지정
 $px = (imagesx($im) - 7.5 * strlen($string))/2;
 //imagesx : 이미지의 폭 리턴
 //7.5 : 한 글씨의 폭 정의
 imagestring($im, 4, $px, 9, $string, $color);//이미지, 폰트, 글씨 시작 지점(x축), y축, 작성 문자열, 문자열 색. 이미지에 글씨 작성
 imagepng($im);//png 형식 이미지 전송
 imagedestroy($im);//이미지 파일 자원 해제
 ?>
