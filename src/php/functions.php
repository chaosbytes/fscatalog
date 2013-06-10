<?php
require("connect_to_mysql.php");

	function getUserMovieCount($user){
		$link = json_decode(connect_to_mysql());
		if($link->status){
			$query = mysql_query("SELECT movie_count FROM users WHERE user_name='".$user."';");
			echo mysql_fetch_object($query);
		}
	}
	
	function getUserMusicCount($user){
		$link = json_decode(connect_to_mysql());
		if($link->status){
			$query = mysql_query("SELECT music_count FROM users WHERE user_name='".$user."';");
			var_dump($query);
		}
	}
	
	function getUserBookCount($user){
		$link = json_decode(connect_to_mysql());
		if($link->status){
			$query = mysql_query("SELECT book_count FROM users WHERE user_name='".$user."';");
			var_dump($query);
		}
	}
	
	function getUserGameCount($user){
		$link = json_decode(connect_to_mysql());
		if($link->status){
			$query = mysql_query("SELECT game_count FROM users WHERE user_name='".$user."';");
			var_dump($query);
		}
	}
?>