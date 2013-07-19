Object.size = function(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};

function searchFilms(film) {
	if (film === '') {
		console.log("enter a movie");
	} else {
		$.ajax({
			type: "POST",
			data: {
				action: 'searchFilm',
				film: film
			},
			dataType: "json",
			url: "./php/functions.php",
			success: function(json) {
				for(var i = 0;  i < Object.size(json); i++){
					var film = json[i.toString()];
				$('#film-search-results').append("<li data-theme='j' data-icon='plus' data-inset='true' data-iconpos='right' class='ui-li ui-btn'><a href='' class='ui-link-inherit'><img src='" + film.poster_path + "' alt='Poster' /><h3 class='ui-li-heading film-search-result-heading' >" + film.title + "</h3><p class='ui-li-desc film-search-result-tagline'><strong>" + film.tagline + "</strong></p><p class='ui-li-desc film-search-result-overview'>" + film.overview + "</p></a></li>");
				}
				$('#add-title-page').trigger("pagecreate");
			}
		});
		$('#main-title-name-field').val("");
		$('#add-title-name-field').val("");
		
	}
}