<?php
//ウィジェット
register_sidebar(array(
    'id' => 'sidebar-1'
));

add_theme_support( 'automatic-feed-lincs' );

register_nav_menu( 'navigation', 'ナビゲーション' );