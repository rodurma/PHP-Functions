<?php
function is_mail($email){
	$er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
	if (preg_match($er, $email)){
		return true;
	} else {
		return false;
	}
}
?>