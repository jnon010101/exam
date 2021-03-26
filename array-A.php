<?php
$human = array("Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian"); 
$res = array_unique($human);
   $newarr = array();
   array_push($newarr,$res[0], $res[1]);
    sort($newarr);
   array_push($newarr, $res[6]);
    print_r($newarr);
?>