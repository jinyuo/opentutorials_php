<?php
function printTime($raw){
  $start = Datetime::createFromFormat('d. m. Y', $raw);
  echo 'Start date: '. $start->format('Y-m-d') . "<br/>\n";
}
//코드 상에서 시각 지정. 사용자가 변경할 수가 없다.
$raw = '22.11.1869';
printTime($raw);

//web brower의 url로 정보 전달.
$raw = $_GET['date'];
printTime($raw);
printTime($_GET['date']);

//생성자를 이용한 현재 시각.
$start=new Datetime();
echo 'Start date: '. $start->format('Y-m-d') . "<br/>\n";

//DateInterval
$end = clone $start;
$end -> add(new DateInterval('P2M6D'));//2달 6일
echo 'End date : '. $end->format('Y-m-d') . "<br/>\n";

$diff = $end -> diff($start);
echo 'Different date : '. $diff->format('%m month, %d days (%a days)') . "<br/>\n";

if($start < $end)
  echo "Start is before end!<br/>\n";

$periodInterval = DateInterval::createFromDateString('first thursday');
$periodIterator = new DatePeriod($start, $periodInterval, $end, DatePeriod::EXCLUDE_START_DATE);

foreach ($periodIterator as $date) {
  echo $date->format('Y-m-d') . " ";
}
 ?>
