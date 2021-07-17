<?php

  include 'display_results_table.php';

  $question = 'What are all the employee details for employees whose last names start with "S"?';

 $sql = "
    SELECT employee_id 'Employee ID', first_name 'First Name', last_name 'Last Name', email 'Email', hire_date 'Hire Date',
		job_id 'Job ID', concat('$ ', format(salary,2)) as 'Salary', concat('$ ', format(commission_pct,2)) 'Commission PCT', manager_id 'Manager ID', department_id 'Department ID'
    FROM employees
    WHERE last_name 
    LIKE 's%'
    ORDER by last_name asc ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
