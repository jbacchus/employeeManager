

<?php

  include 'display_results_table.php';

  $question = 'What are the first and last names from the employees table sorted by last name in ascending order and then first name in ascending order?';

  $sql = "
    SELECT last_name 'Last Name', first_name 'First Name'
    FROM employees
    ORDER by last_name asc, first_name asc";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
