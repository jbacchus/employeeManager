
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List of Employees</title>
  </head>
  <body>
    <p>Here are the recently added employees:</p>
	
<?php
include './includes/emp_table.php';

  $sql = "
    SELECT *
    FROM employees
    WHERE employee_id > 205
	";

  $get_names = mysqli_query($conn, $sql);

  echo 
        display_results_table($get_names);
		
?>


<?php
include './includes/empForm.html.php';

if (isset($_POST ['first_name'])) 
$sql = "INSERT INTO employees 

employee_id = employee_id,
first_name = first_name,
last_name = last_name,
email = email,
phone_number = phone_number,
hire_date = hire_date,
job_id = job_id,
salary = salary,
commission_pct = commission_pct,
manager_id = manager_id,
department_id = department_id

";


 ?>


  </body>
</html>