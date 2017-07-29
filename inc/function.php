<?php 

function debugger($array, $isDie = false){
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}
if($isDie = true){
	echo "You have screwed";
}




?>