function searchFilms(film, settings) {
	if (film === '') {
		console.log("enter a movie");
	} else {
		$.ajax({
			type: 'GET',
			url: 'http://api.themoviedb.org/3/configuration?api_key=442fa4d97e5dd47ef05407083d5b6bc8',
			async: false,
			crossDomain: true,
			jsonpCallback: 'getSearchResults',
			contentType: 'application/json',
			dataType: 'jsonp',
			success: function(json) {
				if (json.images) {
					settings.imageData = json.images;
					getSearchResults(json, settings);
				}
			}
		});

		function getSearchResults(data, settings) {
			$.ajax({
				type: 'GET',
				url: 'http://api.themoviedb.org/3/search/movie?api_key=442fa4d97e5dd47ef05407083d5b6bc8&query=' + film,
				async: false,
				crossDomain: true,
				jsonpCallback: 'deliverResults',
				contentType: 'application/json',
				dataType: 'jsonp',
				success: function(json) {
					if (json.total_results !== 0) {
						deliverResults(json, settings);
					}
				}
			});

			function deliverResults(data, settings) {
				for (var i = 0; i < data.results.length; i++) {
					$.ajax({
						type: 'GET',
						url: 'http://api.themoviedb.org/3/movie/' + data.results[i].id + '?api_key=442fa4d97e5dd47ef05407083d5b6bc8&append_to_response=' + settings.extras,
						async: false,
						crossDomain: true,
						jsonpCallback: this.appendData,
						contentType: 'application/json',
						dataType: 'jsonp',
						success: function(json) {							
							this.appendData(json);	
						},
						error: function(jqXHR){
							console.log(jqXHR);
						},
						appendData: function(data){
						$('#film-search-results').append("<li data-theme='j'><img src='" + settings.imageData.base_url + settings.imageData.poster_sizes[0] + "/" + data.poster_path + "' alt='Poster' /><a href='' class='ui-link-inherit'><h3 class='ui-li-heading'>" + data.title + "</h3><p class='ui-li-desc'><strong>" + data.tagline + "</strong></p><p class='ui-li-desc'>" + data.overview + "</p></a></li>");
					}
					});
					
				}
			}
		}
	}
	$('#main-title-name-field').val("");
	$('#add-title-name-field').val("");
	$('#film-search-results').listview("refresh");
}