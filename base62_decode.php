<?php
/* decodifica base 62 para decimal */
function base62_decode($id){
	$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$base = 62;
	for ($i=0; $i<strlen($id); $i++) {
		$value = strpos($chars, $id[$i]);
		$num = $value * pow($base, strlen($id)-($i+1));
		$final += $num;
	}
	return $final;
}
?>