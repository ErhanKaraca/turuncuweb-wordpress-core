<?php

namespace TuruncuWeb\Core\Config;


if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

final class TuruncuWebWoocommerceConfig
{

    function __construct()
    {
        add_action('init', array($this, 'configure_woocommerce'));
    }

    function configure_woocommerce() {}
}

new TuruncuWebWoocommerceConfig();
