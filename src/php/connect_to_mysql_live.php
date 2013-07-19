<?php
function connect_to_mysql() {
	$link = new mysqli('mysql.fscatalog.foursquaregames.com', 'riceje7', 'aecolomjerice1024!', "fscatalog");
	if ($link->connect_errno) {
		return $link->error;
	} else {
		return $LINK;
	}
}
?>