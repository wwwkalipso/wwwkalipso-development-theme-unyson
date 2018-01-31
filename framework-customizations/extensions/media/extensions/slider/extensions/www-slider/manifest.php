<?php
if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'My extension www slider', MY_THEME_TEXTDOMAIN );
$manifest['description'] = __( 'My extension www slider description', MY_THEME_TEXTDOMAIN );
$manifest['version'] = '0.0.1';
$manifest['display'] = true;
$manifest['standalone'] = true;
$manifest['id'] = 'scratch';
$manifest['supported_extensions'] = array(
    'page-builder' => array(),
    'slider' => array(),
    'styling' => array(),
    'breadcrumbs' => array(),
    'events' => array(),
    'feedback' => array(),
    'learning' => array(),
    'megamenu' => array(),
    'portfolio' => array(),
    'sidebars' => array(),
);