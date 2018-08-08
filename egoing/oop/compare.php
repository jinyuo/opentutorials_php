<h1>Function</h1>
<?php
//입력 값의 중복 발생
var_dump(is_file('data.txt'));
var_dump(is_dir('data.txt'));
var_dump(file_get_contents('data.txt'));
file_put_contents('data.txt', rand(1,100));
 ?>

 <h1>Object</h1>
<?php
//객체 생성
$file = new SplFileObject('data.txt');
var_dump($file -> isFile());
var_dump($file -> isDir());
var_dump($file -> fread($file -> getSize()));
$file -> fwrite(rand(1,100));

$file2 = new SplFileObject('data2.txt');
var_dump($file2 -> isFile());
var_dump($file2 -> isDir());
var_dump($file2 -> fread($file2 -> getSize()));
$file2 -> fwrite(rand(1,100));

// SplFileObject : class
// $file, $file2 : instance
// isFile, isDir, fread : method(function)
// data.txt, data2.txt : state
 ?>
