<?php
$adjective = "nice";
$code = 'PHP';
echo "phpTheRightWay is ". $adjective . "<br/>\n". 'I love learnig '
     . $code . "!<br/>\n";

echo "phpTheRightWay is {$adjective}<br/>\n I love learnig {$code}!<br/>\n";

//strpos
$mystring = 'abc';
$findme = 'a';
$pos= strpos($mystring, $findme);

if($pos === false)//$pos가 0인 경우 false로 취급되므로 자료형까지 비교한다.
  echo "The string {$findme} was not found in th string {$mystring}.<br/>\n";
else {
  echo "The string {$findme} was found in th string {$mystring}"
      . " and exits at position {$pos}.<br/>\n";
}

if($pos !== false)
  echo "The string {$findme} was found in th string {$mystring}"
      . " and exits at position {$pos}.<br/>\n";
else {
  echo "The string {$findme} was not found in th string {$mystring}.<br/>\n";
}

//offset
$newstring = "abcdef abcdef";
$pos = strpos($newstring, 'a' ,1);
if($pos !== false)
  echo "The string {$findme} was found in the string {$newstring}"
      . " and exits at position {$pos}.<br/>\n";
else {
  echo "The string {$findme} was not found in th string {$newstring}.<br/>\n";
}

//substr
echo substr('abcdef', 1) . "<br/>\n";//bcdef
echo substr('abcdef', 1, 3) . "<br/>\n";//bcd
echo substr('abcdef', 0, 4) . "<br/>\n";//abcd
echo substr('abcdef', 0, 8) . "<br/>\n";//abcdef
echo substr('abcdef', -1, 1) . "<br/>\n";//f

$string = 'abcdef';
echo $string[0] . "<br/>\n";//a
echo $string[3] . "<br/>\n";//d
echo $string[strlen($string)-1] . "<br/>\n";//f

class apple{
  public function __toString(){
    return "green";
  }
}

echo "1) " . var_export(substr("pear", 0, 2), true) . "<br/>" . PHP_EOL;//pe
echo "2) " . var_export(substr(54321, 0, 2), true) . "<br/>" . PHP_EOL;//54
echo "3) " . var_export(substr(new apple(), 0, 2), true) . "<br/>" . PHP_EOL;//gr
echo "4) " . var_export(substr(true, 0, 1), true) . "<br/>" . PHP_EOL;//
echo "5) " . var_export(substr(false, 0, 1), true) . "<br/>" . PHP_EOL;
echo "6) " . var_export(substr("", 0, 1), true) . "<br/>" . PHP_EOL;
echo "7) " . var_export(substr(1.2e3, 0, 4), true) . "<br/>" . PHP_EOL;//1200

//htmlentities
$str = "A 'quote' is <b>bold</b>";
//html 엔티티로 문자 변환
echo htmlentities($str) ."<br/>\n";
//ENT_QUOTES : 단일 및 이중 따옴표 코딩
echo htmlentities($str, ENT_QUOTES) ."<br/>\n";

$str = "\x8F!!!";
//ENT_IGNORE : 잘못된 코딩 무시
echo htmlentities($str, ENT_QUOTES|ENT_IGNORE,"UTF-8"). "<br/>\n";

$new = htmlspecialchars("<a href= 'test'>Test</a>", ENT_QUOTES);
echo $new ."<br/>\n";
 ?>
