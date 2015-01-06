<?php

require('connectToServer.php');
connect();

session_start();

$table='users';

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);

$result = mysql_query("SELECT * FROM $table WHERE username = '$username' AND pin = '$password'");
$alive = mysql_result($result,0, "alive");

if(mysql_num_rows($result))
{
  // Login
  	$_SESSION['DM2-username'] = htmlspecialchars($username); // htmlspecialchars() sanitises XSS
	$_SESSION['DM2-usertype'] = mysql_result($result,0,"usertype");
	$_SESSION['DM2-team'] = mysql_result($result,0,"team");
}
else
{
  // Invalid username/password

 $_SESSION['DM2-status']="<p><strong>Error:</strong> Invalid username or password.</p>";
 echo('<script language="javascript">history.back();</script>');
}

// Redirect
if ($alive)
	header('Location: index.php');
else
	header('Location: leaderboard.php');

exit;

?>
