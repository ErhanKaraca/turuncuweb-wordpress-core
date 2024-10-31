<?php

namespace TuruncuWeb\Core\Config;


if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

final class TuruncuWebPagePostTypeConfig
{

    function __construct()
    {
        add_action('init', array($this, 'taxonomies_for_pages'));
    }

    function taxonomies_for_pages()
    {
        register_taxonomy_for_object_type('post_tag', 'page');
    }
}

new TuruncuWebPagePostTypeConfig();
