<?php 
	echo "tạo mảng: <br>";
	$a = array(1,2,3,42,2,34,2);

	foreach ($a as $value) {
		echo $value." ";
	}
	 sort($a);
	 echo "<br>mảng sau khi sx:<br> ";
	 foreach ($a as  $va) {
	 	echo $va." ";
	 }
 ?>