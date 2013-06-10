$(document).on("pageinit", function() {
	$("#login-submit").click(function() {
		$.ajax({
			url: "./php/login.php",
			method: "POST",
			data: {
				login: true,
				user_name: $("#login-username-field").val(),
				user_password: $("#login-password-field").val()
			},
			success: function(data) {
				console.log(data);
			}
		});
	});
	$("#register-submit").click(function() {
		$.ajax({
			url: "./php/register.php",
			method: "POST",
			data: {
				register: true,
				user_name: $("#register-input-username").val(),
				user_email: $("#register-input-email").val(),
				user_password_new: $("#register-input-password").val(),
				user_password_repeat: $("#register-input-password-confirm").val()
			},
			success: function(data) {
				console.log(data);
			}
		});
	});
	$('#page').on("swipeleft swiperight", function(e) {
		if ($.mobile.activePage.jqmData("panel") !== "open") {
			if (e.type === "swipeleft") {
				$("#register-panel").panel("open");
			} else if (e.type === "swiperight") {
				$("#login-panel").panel("open");
			}
		}
	});

	$('#movie-icon-tile').click(function() {
		var userLoggedIn = checkUserLoggedIn();
		console.log(userLoggedIn);
		if (userLoggedIn.status) {
			window.location = "./html/movies.html";
		}
	});
});