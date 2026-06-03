<?php
/*
Plugin Name: Pace Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/pace-calculator/
Description: Easily calculate running pace, distance, or finish time with our free Pace Calculator. Perfect for 5K, half-marathon, and marathon training plans.
Version: 1.0.0
Author: www.calculator.io / Pace Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_pace_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Pace Calculator by www.calculator.io";

function calcio_pace_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Pace Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_pace_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_pace_calculator', 'calcio_pace_calculator_shortcode' );