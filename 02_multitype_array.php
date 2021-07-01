<?php
include("./header.php");
// 02_multitype_array.php

//content
$multitype = array(20, 3.14, 'A', "Bob");
for( $i = 0; $i < count($multitype); $i++)
	print($multitype[$i]. "<br>");
?>

<pre class ="bg-danger text-white">
<?=print_r($multitype)?>;
</pre>

<pre class ="bg-warning text-white">
<?=print_r($_GET)?>;
</pre>
<?php
include("./footer.php");
?>