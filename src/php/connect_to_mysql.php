<?php
function connect_to_mysql() {
	$link = new mysqli('localhost', 'root', 'aecolomjerice1024!', "fscatalog");
	if ($link->connect_errno) {
		return $link->error;
	} else {
		return $link;
	}
}
?>
