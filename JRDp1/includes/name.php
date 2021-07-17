<?php

if (!isset($_GET['firstname'])) {
	include './includes/name.html'	;
}

else {
$firstName = $_GET['firstname'];
$lastName = $_GET['lastname'];

if ($firstName == 'Laurie' && $lastName == 'Crawford')
{
  $output = 'Welcome to my site, Professor!';
} else {
  $output = 'Welcome to my website, ' .
      htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
      htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
}
include './includes/welcome.html.php';
}


