<?php
/*
Plugin Name: Names
Plugin URI: https://gfu.de
Description: Namen Vorschlag
Version: 1.0
Author: Markus Müllenborn-Pitzen
*/


//Jedes Plugin braucht CSS und JS

if( !defined('NAME_PLUGIN_DIR') ) {
    define('NAME_PLUGIN_DIR', plugin_dir_url( __FILE__ ));
}

function name_assets() {

    // Die CSS-Datei registrieren und einbinden
    wp_enqueue_style('name-css', NAME_PLUGIN_DIR . 'assets/css/name.css' , array(), '1.0', 'all');

    // Die JS-Datei registrieren und einbinden
    wp_enqueue_script('name-js', NAME_PLUGIN_DIR . 'assets/js/name.js' , array(), '1.0', 'true');

}

// Die Funktion beim Laden der WordPress-Seite aufrufen
add_action('wp_enqueue_scripts', 'name_assets');

//Shortcode für das Frontend-Formular Input Feld

function names_frontend_in_shortcode() {
    $content  =  '<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>';

    return $content;
}
add_shortcode('namesfrontend', 'names_frontend_in_shortcode');
