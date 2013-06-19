function getUserData(dataRequest){
	var userData = null;
	$.ajax({
		type: "POST",
		async: false,
		data: {
			'action': 'getuserdata',
			'getdata': dataRequest
		},
		url: "./php/getuserdata.php",
		success: function(data) {
			userData = data;
		}
	});
	return userData;
}