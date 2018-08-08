<?php
interface ContractInterface
{
  //정수형 리턴
  public function promiseMethod(array $param):int;
}

interface ContractInterface2
{
  //정수형 리턴
  public function promiseMethod2(array $param):int;
}

class ConcreateClass implements ContractInterface, ContractInterface2{
  public function promiseMethod(array $param):int{
    return $param[0];
  }
  public function promiseMethod2(array $param):int{

  }
}

$obj = new ConcreateClass();
print $obj->promiseMethod([2,5]);
 ?>
