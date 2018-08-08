<?php
//입력 배열
$input = array(1,2,3,4,5,6);

//함수
$filter_even = function ($item){
  return ($item%2)==0;
};

//출력 배열
$output = array_filter($input,$filter_even);
print_r($output);
//함수를 인자로 전달
$output = array_filter($input , function ($item){
  return ($item%2)==0;
});
print_r($output);

//익명 함수 리턴
function criteria_greater_than($min){
  //이게 클로저인 듯? 아마도
  return function ($item) use ($min){
    return $item > $min;
  };
}

$output = array_filter($input,criteria_greater_than(3));
print_r($output);
$output = array_filter($input,criteria_greater_than(2));
print_r($output);
