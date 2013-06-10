
<div data-role="panel" id="left-panel" data-theme="j" data-display="overlay" data-dismissible="false" data-position-fixed="true" class="ui-panel ui-panel-display-overlay ui-body-j ui-panel-fixed ui-panel-animate ui-panel-closed">
    <div id="left-panel-header" data-theme="j" data-role="header" data-position="fixed">
        <h3 id="left-panel-header-text">Login</h3><a id="left-panel-close-btn" data-role="button" data-theme="j" data-rel="close" data-icon="delete" data-iconpos="notext" class="ui-btn-right"></a>
    </div>

    <div data-role="content" id="left-panel-content">
        <h5 id="login-directions">Please login using your username and password below:</h5>

        <div data-role="fieldcontain" class="login-input-field">
            <input name="" id="login-username-field" placeholder="Username..." value="" type="text" data-mini="true">
        </div>

        <div data-role="fieldcontain" class="login-input-field">
            <input name="" id="login-password-field" placeholder="Password..." value="" type="password" data-mini="true">
        </div>

        <div data-role="fieldcontain" class="login-submit-button">
            <input id="login-submit" value="Login" type="submit" data-mini="true">
        </div>
    </div>
</div>

<div data-role="panel" id="right-panel" data-theme="j" data-display="overlay" data-position="right" data-dismissible="false" data-position-fixed="true" class="ui-panel ui-panel-position-right ui-panel-display-overlay ui-body-j ui-panel-fixed ui-panel-animate ui-panel-closed">
    <div id="right-panel-header" data-theme="j" data-role="header" data-position="fixed">
        <h3 id="right-panel-header-text">Register</h3><a id="right-panel-close-btn" data-role="button" data-theme="j" data-rel="close" data-icon="delete" data-iconpos="notext"></a>
    </div>

    <div data-role="content" id="right-panel-content">
        <h5 id="register-directions">Please register below. Enter a username, email address, and password:</h5>

        <div data-role="fieldcontain" class="register-input-field">
            <input name="" id="register-input-username" placeholder="Username..." value="" type="text" data-mini="true" pattern="[a-zA-Z0-9]{2,64}" required="">
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
</div>
