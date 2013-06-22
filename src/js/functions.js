function getNewestTitleInfo() {
	var info = "";
	$.ajax({
		url: "./php/functions.php",
		data: {
			action: "getNewestTitleType"
		},
		type: "POST",
		success: function (data) {
			console.log(data);
			switch(data){
			case "movie":
				$.ajax({
					type: "POST",
					url: "./php/functions.php",
					data: {
						action: "getMovieContent",
						fields: {title: "Title: ", director: "Director: ", year: "Year: ", actors: "Actors: ", plot: "Plot: "}
					},
					success: function (output) {
						info = output;
					}
				});
				break;
			}
		}
	});
	console.log(info);
} 