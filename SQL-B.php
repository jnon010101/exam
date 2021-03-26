<?php
$result=mysqli_query($con,"SELECT * FROM employees  WHERE date_hired LIKE '%2017%' OR date_hired LIKE '%2018%'");
while($row = mysqli_fetch_array($result)) {
    echo $row['name']."<br>".$row['date_hired']."<br>";
}
?>
