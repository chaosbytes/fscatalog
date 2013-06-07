<?php
include "./bcrypt.php";
include "./connect_to_mysql.php";
$conn = json_decode(connect_to_mysql());
if ($conn->{'status'} == true) {
	$bcrypt = new Bcrypt(15);
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$passwordHash = $bcrypt->hash($password);
	$sqlquery = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$passwordHash'");
	if (msyql_num_rows($sqlquery) == 1) {
		return json_encode(array('status' => true, 'message' => "Login Successful."));
	} else {
		return json_encode(array('status' => false, 'error' => 'Login Failure', 'message' => "The username or password you entered does not match our records. Please try again."));
	}
} else {
	return json_encode($conn);
}

?>