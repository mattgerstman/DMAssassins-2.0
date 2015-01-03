<?php

function connect() //connects to the mysql server and opens the assassins database
{
	$server = "localhost";
	$username = "root";	
	$connect = @mysql_connect($server, $username);

//connect to server

	if (!$connect) {
  		echo( "<P>Unable to connect to the assassins database at this time.</P>" );
  		exit();
	}

	
//select the assassins database

	if (! @mysql_select_db("dmassassins") ) {
    	echo( "<P>Unable to locate the applications database at this time.</P>" );
    exit();
  	}
}
?>