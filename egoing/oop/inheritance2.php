<?php
/*
$file = new SplFileObject('data.txt');

var_dump($file->fread($file->getSize()));
print('<br/>');
//커서로 인해 데이터 없음
//따라서 리와인드로 커서 다시 앞으로 옮김
$file->rewind();
var_dump($file->fread($file->getSize()));
*/
class MyFileObject extends SplFileObject{
  function getContents(){
    $content = $this->fread($this->getSize());
    $this->rewind();
    return $content;
  }
}

$file = new MyFileObject('data.txt');
var_dump($file->getContents());
print('<br/>');
var_dump($file->getContents());
 ?>
