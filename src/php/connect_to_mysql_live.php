<?php
function connect_to_mysql() {
	$link = new mysqli('mysql.fscatalog.foursquaregames.com', 'riceje7', 'aecolomjerice1024!', "fscatalog");
	if ($link->connect_errno) {
		return json_encode(array('status' => false, 'message' => $link->error);
	} else {
		return json_encode(array('status' => true, 'mysqli' => $link));
	}
}
?>