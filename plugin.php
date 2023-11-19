<?php
/*
Plugin Name: CI Pace calculator
Plugin URI: https://www.calculator.io/pace-calculator/
Description: This free pace calculator computes pace, distance and time by setting values of two variables. You can use it for training purposes.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_pace_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Pace Calculator by Calculator.iO";

function display_ci_pace_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Pace Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_pace_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_pace_calculator', 'display_ci_pace_calculator' );