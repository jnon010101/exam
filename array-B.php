<?php
$num = array("9863", "7127", "2020", "80", "131", "55", "100");
  sort($num);
  $newarr = array(); 
  foreach ($num as $res) {
  	if ($res % 2 == 0) {
       array_push($newarr, $res);
      }
      else{
      	$number = ceil($res / 10) * 10;
      	array_push($newarr, $number);
      }
  }
  echo "<br>";
    foreach ($newarr as $res1) {
    	echo $res1."<br>";
    }
?>