<?php
$result=mysqli_query($con,"SELECT employees.name, employees.date_hired, departments.department, salary.salary
FROM employees
INNER JOIN departments ON employees.department_id=departments.id
INNER JOIN salary ON employees.salary_id=salary.id WHERE salary.salary = (SELECT MAX(salary) FROM salary)");
while($row = mysqli_fetch_array($result)) {
    echo $row['name']."<br>".$row['date_hired']."<br>".$row['salary']."<br>".$row['department'];
}
?>
