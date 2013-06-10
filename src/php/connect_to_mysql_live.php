<?php
function connect_to_mysql() {
	$link = mysql_connect('mysql.fscatalog.foursquaregames.com', 'riceje7', 'aecolomjerice1024!');
	if ($link) {
		mysql_select_db("fscatalog", $link);
		return json_encode(array('status' => true, 'message' => "connected"));
	} else {
		return json_encode(array('status' => false, 'message' => mysql_error()));
	}
}
?>
