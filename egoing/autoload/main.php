<?php
//한 번만 로딩
//require_once 'greeting.php';
require_once 'autoload.php';

use \greeting\en\Hi as HiEn;
use \greeting\ko\Hi as HiKo;
new HiEn();
new HiKo();
 ?>
