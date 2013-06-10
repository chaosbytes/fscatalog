<?php
require_once("../php/functions.php");
?>
<div data-role="panel" id="left-panel" data-theme="j" data-display="overlay" data-dismissible="false" data-position-fixed="true" class="ui-panel ui-panel-position-left ui-panel-display-overlay ui-body-j ui-panel-fixed ui-panel-animate ui-panel-closed">
    <div id="left-panel-header" data-theme="j" data-role="header" data-position="fixed">
        <h3 id="login-panel-header">Login</h3><a id="left-panel-close-btn" data-role="button" data-theme="j" data-rel="close" data-icon="delete" data-iconpos="notext" class="ui-btn-right"></a>
    </div>

    <div data-role="content" id="left-panel-content">
        <div class="profile-button-wrapper">
        	<a id="movie-btn" data-role="button" data-theme="j" data-icon="arrow-r" data-iconpos="right"><?php echo getUserMovieCount($_SESSION['user_name']); ?></a>
        </div>
        
        <div class="profile-button-wrapper">
        	<a id="music-btn" data-role="button" data-theme="j" data-icon="arrow-r" data-iconpos="right"><?php echo getUserMusicCount($_SESSION['user_name']); ?></a>
        </div>
        
        <div class="profile-button-wrapper">
        	<a id="book-btn" data-role="button" data-theme="j" data-icon="arrow-r" data-iconpos="right"><?php echo getUserBookCount($_SESSION['user_name']); ?></a>
        </div>
        
        <div class="profile-button-wrapper">
        	<a id="game-btn" data-role="button" data-theme="j" data-icon="arrow-r" data-iconpos="right"><?php echo getUserGameCount($_SESSION['user_name']); ?></a>
        </div>
    </div>
</div>

<div data-role="panel" id="right-panel" data-theme="j" data-display="overlay" data-position="right" data-dismissible="false" data-position-fixed="true" class="ui-panel ui-panel-position-right ui-panel-display-overlay ui-body-j ui-panel-fixed ui-panel-animate ui-panel-closed">  
    <div id="right-panel-header" data-theme="j" data-role="header" data-position="fixed">
        <h3 id="right-panel-header">Sign-Up</h3><a id="right-panel-close-btn" data-role="button" data-theme="j" data-rel="close" data-icon="delete" data-iconpos="notext"></a>
    </div>

    <div data-role="content" id="right-panel-content">
    
    </div>
</div>
