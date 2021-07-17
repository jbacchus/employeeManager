<!DOCTYPE html>
<html lang="en">
<head>
<title>content.php</title>
<meta charset="utf-8">
</head>
<body>

<section>



  <?php

    if (isset($_GET['DisplayNames'])) {
      include 'DisplayNames.php';
    } 
	else if (isset($_GET['EmployeeDepartment'])) {
      include 'EmployeeDepartment.php';
    }
	else if (isset($_GET['EmployeeLastS'])) {
      include 'EmployeeLastS.php';
    }
	else if (isset($_GET['EmployeePF'])) {
      include 'EmployeePF.php';
    }
	else if (isset($_GET['EmployeeSalaries10000'])) {
      include 'EmployeeSalaries10000.php';
    }
	else if (isset($_GET['TotalSalaries'])) {
      include 'TotalSalaries.php';
    }
	else if (isset($_GET['emps'])) {
      include 'emps.html.php';
    }
//	else if (isset($_GET['empF'])) {
//    include './empForm.html.php';
//   }
//	else if (isset($_GET['Test'])) {
//      include './testing.html.php';
//   }
	
	
	
  ?>
</section>
</body>
</html>
