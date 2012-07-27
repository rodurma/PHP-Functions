<?php
/* codifica um número decimal em base 62 */
function base62_encode($num){
	$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$base = 62;
	$result = '';
	while($num >= $base) {
		$r = $num%$base;
		$result = $chars[$r].$result;
		$num = $num/$base;
	}
	return $chars[$num].$result;
}
?>