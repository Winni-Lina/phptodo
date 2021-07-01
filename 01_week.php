
<?php 
$title = "배열 연습";
include('./header.php'); 

// week.php
$week = array("일", "월", "화", "수", "목", "금", "토");
// $weekend = array("토", "일");
$weekend = array($week[6], $week[0]);
print($weekend[0] . "요일, " . $weekend[1] . "요일<br>");
print($week[4] . "요일, " . $week[2]. "요일");

include('./footer.php'); 
?>