<?php

  include 'display_results_table.php';

  $question = 'What is the total salaries payable to employees?';

 $sql = "
    SELECT concat('$ ', format(sum(salary),2)) as 'Total of all Salaries'
    FROM employees ";
	
  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);
