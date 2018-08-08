<?php
class MyFileObject{
  private $filename;

  function __construct($fname){
    $this -> filename = $fname;

    if(!file_exists($this->filename)){
      die('<br/> There is no file \'' . $this->filename .'\'');
    }
  }

  function getFilename(){
    return $this->filename;
  }

  function isFile(){
    return is_file($this->filename);
  }

}

$file = new MyFileObject('data.txt');
//$file->filename = 'data.txt';
var_dump($file -> isFile());
var_dump($file -> getFilename());

$file2 = new MyFileObject('data2.txt');
//$file2->filename = 'data2.txt';
var_dump($file2 -> isFile());
//var_dump($file2 -> filename);

/*
MyFileObject : class
$file, $file2 : instance
isFile : method
         behavior
$this -> filename : instance variable or instance field of instance property
                    status
*/
 ?>
