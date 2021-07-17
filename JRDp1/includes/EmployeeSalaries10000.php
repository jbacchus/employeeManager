<?php

  include 'display_results_table.php';

  $question = 'What are the employee IDs, first and last names, and salaries that are greater than or equal to $10,000.00 in ascending order?';

  $sql = "
    SELECT employee_id 'Employee ID', last_name 'Last Name', first_name 'First Name', concat('$ ', format(salary,2)) as 'Salary'
    FROM employees
    WHERE salary >= 10000
    ORDER by salary asc
    ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
