<?php
function only_one_space($str){
  return preg_replace('#\s{2,}#',' ',$str); 
}

echo only_one_space("Era uma vez   três porquinhos        fim...");
?>