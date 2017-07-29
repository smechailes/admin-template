<?php 

function debugger($array, $isDie = false){
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	exit;
}
if($isDie = true){
	echo "lol";
}




?>