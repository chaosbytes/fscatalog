$(document).on("pageinit", function() {
	loadPanels();

	$("#login-submit").click(function() {
		$.ajax({
			url: "./php/login.php",
			method: "POST",
			data: {
				login: true,
				user_name: $("#login-username-field").val(),
				user_password: $("#login-password-field").val()
			},
			success: function() {
				$('#left-panel').panel("close");
				loadPanels();
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
				$("#right-panel").panel("open");
			} else if (e.type === "swiperight") {
				$("#left-panel").panel("open");
			}
		}
	});

	function checkUserLoggedIn() {
		$.ajax({
			method: "POST",
			data: {
				action: "checkUserLoggedIn"
			},
			url: "./php/login.php",
			success: function(data) {
				return data;
			}
		});
	}

	function loadPanels() {
		if (checkUserLoggedIn()) {
			$.post("./content/logged-in-panels.php", function(data) {
				$('#page').prepend(data);
				setTimeout(function() {
					$('#left-panel').trigger("create");
					$('#right-panel').trigger("create");
					$('#page').trigger("create");
				}, 500);

			});
		} else {
			$.post("./content/logged-out-panels.php", function(data) {
				$('#page').prepend(data);
				setTimeout(function() {
					$('#left-panel').trigger("create");
					$('#right-panel').trigger("create");
					$('#page').trigger("create");
				}, 500);
			});
		}
	}
});