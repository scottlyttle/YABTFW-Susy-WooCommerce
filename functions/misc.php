<?php
// Register editor stylesheet
function register_editor_stylesheet() {
    add_editor_style( 'style/build/editor-style.css' );
}
add_action( 'init', 'register_editor_stylesheet' );

// Custom login page logo
function theme_login_logo() {
    echo 
    '<style type="text/css">
        body.login {
            background: #ffffff;
        }
        .login h1 a { 
            background-image:url('.get_bloginfo('template_directory').'/img/login-logo.png) !important; 
            background-size: 263px 95px !important;
            height: 95px !important;
            width: 320px !important;
            padding-left: 8px;
            padding-bottom: 0 !important;
            margin-bottom: 20px;
            background-position: center bottom;
        }
        .login form, .login form .input, .login input[type="text"] {
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .widefat, div.updated, div.error, .wrap .add-new-h2, textarea, input[type="text"], input[type="password"], input[type="file"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="url"], select, .tablenav .tablenav-pages a, .tablenav-pages span.current, #titlediv #title, .postbox, #postcustomstuff table, #postcustomstuff input, #postcustomstuff textarea, .imgedit-menu div, .plugin-update-tr .update-message, #poststuff .inside .the-tagcloud, .login form, #login_error, .login .message, #menu-management .menu-edit, .nav-menus-php .list-container, .menu-item-handle, .link-to-original, .nav-menus-php .major-publishing-actions .form-invalid, .press-this #message, #TB_window, .tbtitle, .highlight, .feature-filter, #widget-list .widget-top, .editwidget .widget-inside {
            -webkit-border-radius: 0;
            border-radius: 0;
        }
    </style>';
}
add_action('login_head', 'theme_login_logo');

// WordPress Change Login page logo link
function change_login_page_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'change_login_page_url' );