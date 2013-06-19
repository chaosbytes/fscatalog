userData = null;
$(document).ready(function() {


	function checkUserLoggedIn() {
		var check = 0;
		$.ajax({
			method: "POST",
			async: false,
			data: {
				action: "checkUserLoggedIn"
			},
			url: "./php/php-login/login.php",
			success: function(data) {
				check = data;
			}
		});
		return check;
	}

	$("#login-btn").click(function() {
		$.ajax({
			url: "../php/php-login/login.php",
			method: "POST",
			data: {
				action: "login",
				login: true,
				user_name: $("#login-username-field").val(),
				user_password: $("#login-password-field").val()
			},
			success: function(data) {
				if (data == 1) {
					$('#left-panel').panel("close");
					$.post("../php/getuserdata.php", function(data) {
						userData = data;
					});
					$.mobile.changePage("#members-page", true);
				}
			}
		});
	});

	$("#register-btn").click(function() {
		$.ajax({
			url: "../php/php-login/register.php",
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

	$("#logout-btn").click(function() {
		$.ajax({
			url: "../php/php-login/login.php",
			method: "POST",
			data: {
				action: "logout",
				logout: true
			},
			success: function(data) {
				$('#navbar-popup-menu').popup('close');
				$.mobile.changePage("#home-page", true);
			}
		});
	});

	$("#home-page").on("pageinit", function() {
		$("#home-page").on("swipeleft swiperight", function(e) {
			if ($.mobile.activePage.jqmData("panel") !== "open") {
				if (e.type === "swipeleft") {
					$("#right-panel").panel("open");
				} else if (e.type === "swiperight") {
					$("#left-panel").panel("open");
				}
			}
		});
	});

	$("#members-page").on("pageinit", function() {
		$.post("../php/getuserdata.php", function(data) {
			userData = data;
		});
		$('#add-title-btn').click(function() {
			if ($('#title-type-select').val() === "movie") {
				var movie = "http://mymovieapi.com/?title=" + $('#title-name-field').val() + "&type=json&plot=simple&episode=0&limit=10&yg=0&mt=none&lang=en-US&offset=&aka=simple&release=simple&business=0&tech=0";
				console.log(movie);
				$.get(movie, function(output) {
					console.log(output);
				});
			}
		});
		$("#members-page").on("swipeleft swiperight", function(e) {
			if ($.mobile.activePage.jqmData("panel") !== "open") {
				if (e.type === "swipeleft") {
					$("#right-panel2").panel("open");
				} else if (e.type === "swiperight") {
					$("#left-panel2").panel("open");
				}
			}
		});
	});

});