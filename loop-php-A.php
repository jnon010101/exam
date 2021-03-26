<?php
function evennum($num1 = 0, $num2 = 0){
while ($num1 <= 10) {
	$num2 += $num1;
	$num1 = $num1+2;
}
echo $num2;
}
evennum();
?>