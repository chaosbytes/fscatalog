<?php
include "./bcrypt.php";
include "./connect_to_mysql.php";
if ($_POST['password'] == $_POST['passwordConfirm']) {

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
		$sqlquery = mysql_query("INSERT INTO users (username, password) VALUES ('$username', '$passwordHash')");
		$insert = mysql_query($sqlquery);
		if ($insert) {
			return json_encode(array('status' => true, 'message' => "Sign-Up Successful."));
		} else {
			return json_encode(array('status' => false, 'error' => "duplicate entry", 'message' => "That username has been chosen already please choose another."));
		}
	} else {
		return json_encode($conn);
	}
} else {
	return json_encode(array('status' => false, 'error' => 'sign-up failure', 'message' => "The passwords you entered do not match, please try again."));
}

?>