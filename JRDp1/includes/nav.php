<!DOCTYPE html>
<html lang="en">
<head>
<title>content.php</title>
<meta charset="utf-8">
</head>
<body>
<?php

  // generate an href using the existing first and last name variables, so the welcome message doesn't disappear
  function nav_url($query_name) {
    $link = (isset($_GET['firstname']) && isset($_GET['lastname'])) ?
      '?firstname=' . $_GET['firstname'] . '&lastname=' . $_GET['lastname'] . '&' . $query_name:
      '?' . $query_name;

    return $link;
  }

?>

<nav>
  <a href="<?php echo nav_url('Hello'); ?>">Home</a>
  <a href="<?php echo nav_url('DisplayNames'); ?>">Employee Names</a>
  <a href="<?php echo nav_url('EmployeeDepartment'); ?>">Employee Department</a>
  <a href="<?php echo nav_url('EmployeeLastS'); ?>">Employee LastS</a>
  <a href="<?php echo nav_url('EmployeePF'); ?>">Employee PF</a>
  <a href="<?php echo nav_url('EmployeeSalaries10000'); ?>">Employee Salaries</a>
  <a href="<?php echo nav_url('TotalSalaries'); ?>">Total Salaries</a>
  <a href="<?php echo nav_url('emps'); ?>">Add Employee</a>

</nav>
</body>
</html>
