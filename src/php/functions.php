<?php
session_name("fscatalog");
session_start();
require_once 'connect_to_mysql.php';

if(isset($_POST["action"])){
	switch($_POST['action']){
		case "getUserData":
			getUserData();
			break;
		case "saveSessionData":
			saveSessionData();
			break;
		case "getMovieContent":
			getMovieContent();
			break;
	}
}

function getUserData() {
	if (isset($_POST['action']) && $_POST['action'] == "getuserdata") {
		if (isset($_POST['getdata'])) {
			session_name('fscatalog');
			session_start();
			$link = connect_to_mysql();
			if ($link) {
				$sql = "SELECT ".$_POST['getdata']." FROM users WHERE user_name='".$_SESSION["user_name"]."'";
				$result = $link->query($sql) or die($link->error);
				$returnedcol = $result->fetch_assoc();
				$colvalue = $returnedcol[$_POST['getdata']];
				echo $colvalue;
			}
		}
	}
}

function saveSessionData() {
	if (isset($_POST['newestTitleData']) && isset($_POST['newestTitleType'])) {
		$_SESSION['newestTitleType'] = $_POST['newestTitleType'];
		$_SESSION['newestTitleData'] = json_decode($_POST['newestTitleData'], true);
	}
}

function getNewestTitleType(){
	if(isset($_SESSION['newestTitleType'])){
		echo $_SESSION["newestTitleType"];
	}
}

function getMovieContent() {
	$data = $_SESSION['returnData'][0];
	$strData = new stdClass();
	foreach ($data as $key => $value) {
		if (is_array($value)) {
			$strData->$key = implode(", ", $value);
		} else {
			$strData->$key = $value;
		}
	}
	$fields = $_POST['fields'];
	
	echo $fields;
}
?>