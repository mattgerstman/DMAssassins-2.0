<?php

include('checkSession.php');

function checkAdmin()
{
	//check if logged in
	check();

	//then check if admin
	if($_SESSION['DM2-usertype'])
	{

	}
	else
	{
  		// Not an admin
  		header('Location: index.php');
  		exit;
	}
}



?>
