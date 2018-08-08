<?php
  $stamp = imagecreatefrompng("text.png");
  $im = imagecreatefrompng("original.png");

  $marge_right = 10;
  $marge_bottom = 10;
  //마크의 크기
  $sx = imagesx($stamp);
  $sy = imagesy($stamp);
  $spx= imagesx($im)-$sx-$marge_right;
  $spy = imagesy($im)-$sy-$marge_bottom;
  //인자 : destination, source, 이미지가 위치하는 시작점-x,y, 이미지의 시작점-x,y & 끝점-x,y
  imagecopy($im, $stamp, $spx, $spy, 0, 0, $sx, $sy);

  header("Content-type: image/png");
  imagepng($im);
  imagedestroy($im);
 ?>
