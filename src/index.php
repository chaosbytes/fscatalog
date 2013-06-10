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
    <script src="./js/modernizr.js" type="text/javascript">
</script>
</head>

<body>
    <!-- Main Page -->

    <div data-role="page" id="page">
        <div data-theme="j" data-role="header" data-position="fixed">
            <a id="login-button" data-role="button" data-theme="j" href="#left-panel" data-icon="home" data-iconpos="notext"></a>

            <h4 id="fs-header">FS-Catalog™</h4><a id="register-button" data-role="button" data-theme="j" href="#right-panel" data-icon="plus" data-iconpos="notext"></a>
        </div>

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
        </div>

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
                <a id="navbar-menu-close-button" data-rel="back" data-role="button" data-icon="delete" data-iconpos="notext" title="Close" class="ui-btn-right"></a> test info
            </div>

            <h3 id="fs-footer-dev">A Foursquare Dev Venture</h3>

            <h5 id="fs-footer-copyright">© Joe Rice</h5>
        </div>
    </div>
</body>
</html>
