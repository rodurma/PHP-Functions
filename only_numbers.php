<?php

function only_numbers($number){
    return preg_replace("/[^[:digit:]]/", "", $number);
}

echo only_numbers("Em 2011 eu fui com 3 amigos para uma festa que tinha 300 pessoas"); 

?>