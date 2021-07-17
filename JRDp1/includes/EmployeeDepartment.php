<?php

  include 'display_results_table.php';

  $question = 'What are the unique department IDs in descending order?';

  $sql = "
    SELECT  DISTINCT department_id 'Department ID'
    FROM employees
    ORDER by department_id desc ";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
