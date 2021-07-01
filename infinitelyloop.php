<?php
//infinitelyloop.php
$i = 0;
$value = 1;
while(TRUE){
	$value = $value * 3;
	$i = $i + 1;
	if($value > 10000)
		break;
}
print $i;
?>