<?php
/**
 * @author   Ikpugbu George
 * @package  LearnPress/Paystack
 * @version  1.0.0
 *
 * @wordpress-plugin
 * Plugin Name: Paystack Plugin for LearnPress
 * Description: Accept credit card payment on LearnPress using paystack
 * Version:     1.0.0
 * Author:      Ikpugbu George
 * Author URI:  https://linkedin.com/in/george-ikpugbu-072ab11a/
 * Text Domain: lp-paystack
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined('ABSPATH') or die();

define('LP_PAYSTACK_VERSIOM', '1.0.0');

LP_Addon::load('LP_Addon_Paystack', 'load.php', __FILE__);
