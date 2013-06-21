$(document).ready(function () {
	function checkUserLoggedIn() {
		var check = 0;
		$.ajax({
			method: "POST",
			async: false,
			data: {
				action: "checkUserLoggedIn"
			},
			url: "./php/php-login/login.php",
			success: function (data) {
				check = data;
			}
		});
		return check;
	}

	$("#login-btn").click(function () {
		$.ajax({
			url: "../php/php-login/login.php",
			method: "POST",
			data: {
				action: "login",
				login: true,
				user_name: $("#login-username-field").val(),
				user_password: $("#login-password-field").val()
			},
			success: function (data) {
				if (data == 1) {
					$('#left-panel').panel("close");
					$.mobile.changePage("#main-page");
				}
			}
		});
	});

	$("#register-btn").click(function () {
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
			success: function (data) {
				console.log(data);
			}
		});
	});

	$("#logout-btn").click(function () {
		$.ajax({
			url: "../php/php-login/login.php",
			method: "POST",
			data: {
				action: "logout",
				logout: true
			},
			success: function () {
				$('#navbar-popup-menu').popup('close');
				$.mobile.changePage("#home-page");
			}
		});
	});

	$("#home-page").on("pageinit", function () {
		$("#home-page").on("swipeleft swiperight", function (e) {
			if ($.mobile.activePage.jqmData("panel") !== "open") {
				if (e.type === "swipeleft") {
					$("#right-panel").panel("open");
				} else if (e.type === "swiperight") {
					$("#left-panel").panel("open");
				}
			}
		});
	});

	$("#main-page").on("pageinit", function () {
		$('#main-add-title-btn').click(function () {
			if ($('#main-title-type-select').val() === "movie") {
				$.ajax({
					type: "GET",
					url: "http://mymovieapi.com/?title=" + $('#main-title-name-field').val() + "&type=json&plot=simple&limit=3&lang=en-US&&release=simple",
					success: function (data) {
						$.ajax({
							type: "POST",
							data: {
								action: "saveSessionData",
								newestTitleType: "movie",
								newestTitleData: data
							},
							url: "./php/functions.php",
							success: function () {
								$('#right-panel2').panel("close");
							},
							complete: function () {
								$.mobile.changePage("#add-title-page");
							}
						});
					}
				});
			}
		});
		$("#main-page").on("swipeleft swiperight", function (e) {
			if ($.mobile.activePage.jqmData("panel") !== "open") {
				if (e.type === "swipeleft") {
					$("#right-panel2").panel("open");
				} else if (e.type === "swiperight") {
					$("#left-panel2").panel("open");
				}
			}
		});
	});

	$("#add-title-page").on("pageinit", function () {
		$('#add-add-title-btn').click(function () {
			if ($('#add-title-type-select').val() === "movie") {
				$.ajax({
					type: "GET",
					url: "http://mymovieapi.com/?title=" + $('#main-title-name-field').val() + "&type=json&plot=simple&limit=3&lang=en-US&&release=simple",
					success: function (data) {
						$.ajax({
							type: "POST",
							data: {
								action: "saveSessionData",
								newestTitleType: "movie",
								newestTitleData: data
							},
							url: "./php/functions.php",
							success: function () {
								$('#right-panel3').panel("close");
							},
							complete: function () {
								$('#add-title-page').trigger("create");
							}
						});
					}
				});
			}
		});
		$("#add-title-page").on("swipeleft swiperight", function (e) {
			if ($.mobile.activePage.jqmData("panel") !== "open") {
				if (e.type === "swipeleft") {
					$("#right-panel3").panel("open");
				} else if (e.type === "swiperight") {
					$("#left-panel3").panel("open");
				}
			}
		});
	});

});