<?php
//comparison.php
$a = 123;
$b = 456;
$c = 123.0;
if($a == $c)
	print('$a == $b -> $a가 $c가 같습니다.');
if($a === $c)
	print('$a == $b -> $a가 $c가 같습니다.');

?>