<?php
/**
 * Plugin load class.
 *
 * @author   Ikpugbu George
 * @package  LearnPress/Paystack
 * @version  1.0.0
 */

defined('ABSPATH') or die();

if (! class_exists('LP_Addon_Paystack')) {
    /**
     * Class LP_Addon_Paystack.
     */
    class LP_Addon_Paystack extends LP_Addon
    {
        public function __construct()
        {
            parent::__construct();

            add_filter('learn-press/payment-methods', array($this, 'add_payment'));
            add_filter('learn_press_payment_method', array($this, 'add_payment'));
        }

        /**
         * Add paystack to payment system.
         *
         * @param $methods
         *
         * @return mixed
         */
        public function add_payment($methods)
        {
            $methods['paystack'] = 'LP_Gateway_Paystack';

            return $methods;
        }

        public function plugin_links()
        {
            $links = array( 'settings' => '<a href="' . admin_url('admin.php?page=learn-press-settings&tab=payments&section=paystack') . '">' . __('Settings', 'learnpress') . '</a>' );

            return $links;
        }

        /**
         * Include core file
         */
        protected function _includes()
        {
            require_once "class-lp-gateway-paystack.php";
        }

        public function plugin_url($file = '')
        {
            return plugins_url('/' . $file, __FILE__);
        }
    }
}
