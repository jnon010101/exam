<?php
$result=mysqli_query($con,"SELECT employees.name, employees.date_hired, departments.department
FROM employees
INNER JOIN departments ON employees.department_id=departments.id WHERE departments.department = 'IT' AND employees.date_hired LIKE '%2018%'");
while($row = mysqli_fetch_array($result)) {
    echo $row['name']."<br>".$row['date_hired']."<br>".$row['department'];
}
?>
