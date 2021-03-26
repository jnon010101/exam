<?php
function oddnum($num1 = 0){
do {
	if ($num1 & 1) {
		 echo $num1;
	}
  $num1++;
} while ($num1 <= 10);
}
oddnum();
?>