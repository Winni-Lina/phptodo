<?php
$title = "foreach예문";
include("./header.php");

//05_fruitcolors.php
$basket=array(
"Apple" => "Red",
"Peach" => "Pink",
"Banana" => "Yellow"
);
foreach($basket as $fruit){
	print($fruit."<br>");
}

include("./footer.php");
?>