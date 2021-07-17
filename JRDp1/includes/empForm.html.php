<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Add Employee</title>

  </head>
  <body>
    <p align="center" >
	<strong>FILL OUT THE FORM TO ADD AN EMPLOYEE TO THE DATABASE</strong>
	</p>
	
	<form action="?emps" method="post">

	   <div>
	   <label for="employee_id">Employee ID:
		<input type="int" name="employee_id" id="employee_id"></label>
	</div>
	  <div>
		<label for="first_name">First name: 
		<input type="text" name="first_name" id="first_name"></label>
	</div>
	<div>
		<label for="last_name">Last name: 
		<input type="text" name="last_name" id="last_name"></label>
	</div>
	<div>
		<label for="email">Email: 
		<input type="text" name="email" id="email"></label>
	</div>
	<div>
		<label for="phone_number">Phone Number: 
		<input type="text" name="phone_number" id="phone_number"></label>
	</div>
	<div>
		<label for="hire_date">Hire Date: 
		<input type="text" name="hire_date" id="hire_date"></label>
	</div>
	<div>
		<label for="job_id">Job ID: 
		<input type="text" name="job_id" id="job_id"></label>
	</div>
	<div>
		<label for="salary">Salary: 
		<input type="text" name="salary" id="salary"></label>
	</div>
	<div>
		<label for="commission_pct">Commission PCT: 
		<input type="text" name="commission_pct" id="commission_pct"></label>
	</div>
	<div>
		<label for="manager_id">Manager ID: 
		<input type="text" name="manager_id" id="manager_id"></label>
	</div>
	<div>
		<label for="department_id">Department ID: 
		<input type="text" name="department_id" id="department_id"></label>
	</div>
	
	
      <div><input type="submit" value="Add"></div>
    </form>
  </body>
</html>