<?php

require_once('TMDb.php');
require_once('tmdb_config.php');
// create/read session
session_name("fscatalog");
session_start();
if (isset($_POST["action"])) {
	switch ($_POST['action']) {
	case "searchFilm":
		searchFilm($_POST);
		break;
	}
}


function searchFilm($data){
	
	$results = "{";
	$tmdb = new TMDb(APIKEY);
	$films = $tmdb->searchMovie($data['film']);
	for($i = 0; $i < count($films['results']); $i++){

		$filmId = $films['results'][$i]['id'];
		$film = $tmdb->getMovie($filmId);
		$results .= '"'.$i.'"'.': ';
		$results .= "{";
		$results .= '"id": '.$film['id'].', ';
		$results .= '"title": "'.$film['title'].'", ';
		$results .= '"tagline": "'.preg_replace('/\"/', "'", $film['tagline']).'", ';
		$results .= '"overview": "'.preg_replace('/\"/', "'", $film['overview']).'", ';
		$results .= '"release_date": "'.$film['release_date'].'", ';
		$results .= '"genres": [';
		for($x = 0; $x < count($film['genres']); $x++){
			$results .= '{"id": '.$film['genres'][$x]['id'].', "name": "'.$film['genres'][$x]['name'].'"';
			if($x !== count($film['genres'])-1){
				$results .= "},";
			} else {
				$results .= "}";
			}
		}
		$results .= "],";
		$results .= '"homepage": "'.$film['homepage'].'", ';
		$results .= '"vote_average": '.$film['vote_average'].', ';
		$results .= '"vote_count": '.$film['vote_count'].', ';
		$results .= '"poster_path": "'.$tmdb->getImageUrl($film['poster_path'], TMDb::IMAGE_PROFILE, 'w45').'", ';
		$results .= '"backdrop_path": "'.$tmdb->getImageUrl($film['backdrop_path'], TMDb::IMAGE_BACKDROP, 'original').'"';
		if($i !== count($films['results'])-1){
			$results .= "},";
		} else {
			$results .= "}";
		}
	}
	$results .= "}";
	header("Content-type: application/json");
	echo $results;
}