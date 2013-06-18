<?php
require_once("./php/functions.php");
session_name('fscatalog');
session_start();
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <title>FS-Catalog</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/custom.css">
    <script src="./js/jquery-1.10.1.min.js" type="text/javascript">
</script>
    <script src="./js/index.js" type="text/javascript">
</script>
    <script src="./js/jquery.mobile-1.3.1.min.js" type="text/javascript">
</script>
</head>

<body>
    <!-- Main Page -->

    <div data-role="page" id="homepage">
        <!-- Panels -->

        <div data-role="panel" id="left-panel" data-theme="j" data-display="overlay" data-dismissible="false" data-position-fixed="true">
            <div id="left-panel-header" data-theme="j" data-role="header" data-position="fixed">
                <h3 id="left-panel-header-text">Login</h3>
                <a id="left-panel-close-btn" data-role="button" data-theme="j" data-rel="close" data-icon="delete" data-iconpos="notext" class="ui-btn-right"></a>
            </div>

            <div data-role="content" id="left-panel-content" class="ui-content" role="main">
                <h5 id="login-directions">Please login using your username and password below:</h5>

                <div data-role="fieldcontain" class="login-input-field">
                    <input name="" id="login-username-field" placeholder="Username..." value="" type="text" data-mini="true" required="">
                </div>

                <div data-role="fieldcontain" class="login-input-field">
                    <input name="" id="login-password-field" placeholder="Password..." value="" type="password" data-mini="true" required="">
                </div>

                <div data-role="fieldcontain" class="login-submit-button">
                    <a id="login-btn" data-role="button" data-theme="j" data-icon="arrow-r" data-iconpos="right" data-mini="true">Login</a>
                </div>
            </div>
        </div>

        <div data-role="panel" id="right-panel" data-theme="j" data-display="overlay" data-position="right" data-dismissible="false" data-position-fixed="true">
            <div id="right-panel-header" data-theme="j" data-role="header" data-position="fixed">
                <h3 id="right-panel-header-text">Register</h3>
                <a id="right-panel-close-btn" data-role="button" data-theme="j" data-rel="close" data-icon="delete" data-iconpos="notext" class="ui-btn-left"></a>
            </div>

            <div data-role="content" id="right-panel-content" class="ui-content" role="main">
                <h5 id="register-directions">Please register below. Enter a username, email address, and password:</h5>

                <div data-role="fieldcontain" class="register-input-field">
                    <input name="" id="register-input-username" placeholder="Username..." value="" type="text" data-mini="true" pattern="[a-zA-Z0-9\.\_]{2,64}" required="">
                </div>

                <div data-role="fieldcontain" class="register-input-field">
                    <input name="" id="register-input-email" placeholder="Email..." value="" type="email" data-mini="true" required="">
                </div>

                <div data-role="fieldcontain" class="register-input-field">
                    <input name="" id="register-input-password" placeholder="Password..." value="" type="password" data-mini="true" pattern=".{6,}" required="">
                </div>

                <div data-role="fieldcontain" class="register-input-field">
                    <input name="" id="register-input-password-confirm" placeholder="Confirm Password..." value="" type="password" data-mini="true" pattern=".{6,}" required="">
                </div>

                <div data-role="fieldcontain" class="register-submit-button">
                    <input id="register-submit" name="register" value="Register" type="submit" data-mini="true">
                </div>
            </div>
        </div><!-- header -->

        <div data-theme="j" data-role="header" data-position="fixed">
            <a id="left-btn" data-role="button" data-theme="j" href="#left-panel" data-icon="home" data-iconpos="notext" class="ui-btn-left"></a>

            <h4 id="fs-header">FS-Catalog™</h4>
            <a id="right-btn" data-role="button" data-theme="j" href="#right-panel" data-icon="plus" data-iconpos="notext" class="ui-btn-right"></a>
        </div><!-- content -->

        <div data-role="content">
            <span id="welcome-message">Welcome to the Foursquare-Catalog, Your Personal Media Organizer.</span><br>
            <span id="login-message">If you are already a FS-Catalog Member you may sign-in by swiping to the right or pressing the button in the upper-left corner of the screen.</span>

            <div id="icons-wrapper">
                <div class="ui-grid-a">
                    <div class="icon-tile ui-block-a"><img src="./images/movie-icon.png" alt="image" id="movie-icon-tile"></div>

                    <div class="icon-tile ui-block-b"><img src="./images/music-icon.png" alt="image" id="music-icon-tile"></div>

                    <div class="icon-tile ui-block-a"><img src="./images/movie-icon.png" alt="image" id="book-icon-tile"></div>

                    <div class="icon-tile ui-block-b"><img src="./images/music-icon.png" alt="image" id="game-icon-tile"></div>
                </div>
            </div>

            <div id="intro-message">
                <p>Foursquare-Catalog is your all-in-one personal media catalog. Never again will you be at a store wondering if you should buy something because you're unsure if you have it already. And Foursquare-Catalog (or FS-Catalog as we like to call it) does so much more than catalog your media. We thought it should help you decide what you want to watch too, because who hasn't stood in front of your DVDs or Blu-Rays for a half hour trying to decide what it is you actually want to watch? And the same goes for your music, books, and video games. In addition to cataloging your media, and suggesting options for the media you already have, it can suggest new media based on what other users, with similar interests to you, are watching, listening to, reading, or playing.</p>
            </div>
        </div><!-- footer -->

        <div data-theme="j" data-role="footer" data-position="fixed">
            <div id="navbar" data-role="navbar" data-iconpos="bottom">
                <ul>
                    <li id="navbar-menu-button">
                        <a href="#navbar-popup-menu" data-transition="slideup" data-position-to="origin" data-rel="popup" data-theme="j" data-icon="bars" data-overlay-theme="j" data-dismissible="false"></a>
                    </li>

                    <li id="navbar-info-button">
                        <a href="#navbar-popup-info" data-transition="slide" data-position-to="window" data-rel="popup" data-theme="j" data-icon="info"></a>
                    </li>
                </ul>
            </div>

            <div id="navbar-popup-menu" data-role="popup" class="ui-content">
                <a id="navbar-menu-close-button" data-rel="back" data-role="button" data-icon="delete" data-iconpos="notext" title="Close" class="ui-btn-right"></a> <a id="logout-btn" data-role="button" data-icon="delete" data-iconpos="left" title="Logout">Logout</a>
            </div>

            <h3 id="fs-footer-dev">A Foursquare Dev Venture</h3>

            <h5 id="fs-footer-copyright">© Joe Rice</h5>
        </div>
    </div>
    
    <!-- members page -->
    <div data-role="page" id="memberspage">
        <!-- Panels -->
				
        <div data-role="panel" id="left-panel2" data-theme="j" data-display="overlay" data-dismissible="false" data-position-fixed="true">
            <div id="left-panel-header" data-theme="j" data-role="header" data-position="fixed" >
                <div id="left-panel-header-text" class="ui-title"><?php echo($_SESSION['user_name']); ?></div><a id="left-panel-close-btn" data-role="button" data-theme="j" data-rel="close" data-icon="delete" data-iconpos="notext" class="ui-btn-right"></a>
            </div>

            <div data-role="content" id="left-panel-content">
                <a id="movie-btn" data-role="button" data-theme="j" data-icon="arrow-r" data-iconpos="right" data-mini="true">My Movies (<?php echo getUserMovieCount($_SESSION['user_name']); ?>)</a>
                <a id="music-btn" data-role="button" data-theme="j" data-icon="arrow-r" data-iconpos="right" data-mini="true">My Music (<?php echo getUserMusicCount($_SESSION['user_name']); ?>)</a>
                <a id="book-btn" data-role="button" data-theme="j" data-icon="arrow-r" data-iconpos="right" data-mini="true">My Books (<?php echo getUserBookCount($_SESSION['user_name']); ?>)</a> 
                <a id="game-btn" data-role="button" data-theme="j" data-icon="arrow-r" data-iconpos="right" data-mini="true">My Games (<?php echo getUserGameCount($_SESSION['user_name']); ?>)</a>
            </div>
        </div>

        <div data-role="panel" id="right-panel2" data-theme="j" data-display="overlay" data-position="right" data-dismissible="false" data-position-fixed="true">
            <div id="right-panel-header" data-theme="j" data-role="header" data-position="fixed">
                <div id="right-panel-header-text" class="ui-title">Quick Actions</div>
                <a id="right-panel-close-btn" data-role="button" data-theme="j" data-rel="close" data-icon="delete" data-iconpos="notext" class="ui-btn-left"></a>
            </div>

            <div data-role="content" id="right-panel-content" class="ui-content" role="main"></div>
        </div><!-- header -->

        <div data-theme="j" data-role="header" data-position="fixed">
            <a id="left-btn2" data-role="button" data-theme="j" href="#left-panel2" data-icon="grid" data-iconpos="notext"></a>
            <h4 id="fs-header">FS-Catalog™</h4>
            <a id="right-btn2" data-role="button" data-theme="j" href="#right-panel2" data-icon="star" data-iconpos="notext"></a>
        </div>

        <div data-role="content">
            <span id="welcome-message">Welcome to the Foursquare-Catalog, Your Personal Media Organizer.</span><br>
            <span id="login-message">If you are already a FS-Catalog Member you may sign-in by swiping to the right or pressing the button in the upper-left corner of the screen.</span>

            <div id="icons-wrapper">
                <div class="ui-grid-a">
                    <div class="icon-tile ui-block-a"><img src="../images/movie-icon.png" alt="image" id="movie-icon-tile"></div>

                    <div class="icon-tile ui-block-b"><img src="../images/music-icon.png" alt="image" id="music-icon-tile"></div>

                    <div class="icon-tile ui-block-a"><img src="../images/movie-icon.png" alt="image" id="book-icon-tile"></div>

                    <div class="icon-tile ui-block-b"><img src="../images/music-icon.png" alt="image" id="game-icon-tile"></div>
                </div>
            </div>

            <div id="intro-message">
                
            </div>
        </div><!-- footer -->

        <div data-theme="j" data-role="footer" data-position="fixed">
            <div id="navbar" data-role="navbar" data-iconpos="bottom">
                <ul>
                    <li id="navbar-menu-button">
                        <a href="#navbar-popup-menu" data-transition="slideup" data-position-to="origin" data-rel="popup" data-theme="j" data-icon="bars" data-overlay-theme="j" data-dismissible="false"></a>
                    </li>

                    <li id="navbar-info-button">
                        <a href="#navbar-popup-info" data-transition="slide" data-position-to="window" data-rel="popup" data-theme="j" data-icon="info"></a>
                    </li>
                </ul>
            </div>

            <div id="navbar-popup-menu" data-role="popup" class="ui-content">
                <a id="navbar-menu-close-button" data-rel="back" data-role="button" data-icon="delete" data-iconpos="notext" title="Close" class="ui-btn-right"></a> <a id="logout-btn" data-role="button" data-icon="delete" data-iconpos="left" title="Logout" href="#homepage">Logout</a>
            </div>

            <h3 id="fs-footer-dev">A Foursquare Dev Venture</h3>

            <h5 id="fs-footer-copyright">© Joe Rice</h5>
        </div>
    </div><!-- end Members Page -->
</body>
</html>
