<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "company";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}





// THIS PART WORKS TO CONNECT TO THE COMPANY DATABASE
/* 
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=company', 'root',
    '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}  // END CONNECT TO COMPANY DATABASE SECTION



// MANIPULATE THIS TEXT TO FIT ADDING AND DELETING AN EMPLOYEE RECORD 


try
{
  $sql = 'SELECT id, first_name FROM employees';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching jokes: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
  $jokes[] = array('id' => $row['id'], 'text' =>
    $row['joketext']);
}

include 'emps.html.php';

if (isset($_GET['addjoke']))
{
	include 'form.html.php';
	exit();
}

if (isset($_POST['joketext']))
{
  try
  {
    $sql = 'INSERT INTO joke SET
        joketext = :joketext,
        jokedate = CURDATE()';
    $s = $pdo->prepare($sql);
    $s->bindValue(':joketext', $_POST['joketext']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted joke: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

if (isset($_GET['deletejoke']))
{
  try
  {
    $sql = 'DELETE FROM joke WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error deleting joke: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

// */

// END COMMENTED SECTION



?>
