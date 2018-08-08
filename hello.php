<?php
if($argc !== 2){
  echo "Usage : php hello.php [name.\n]";
  exit;
}

$name = $argv[1];
echo "Hello, $name\n";
 ?>
