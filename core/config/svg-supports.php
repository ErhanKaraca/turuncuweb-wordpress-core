<?php

namespace TuruncuWeb\Core\Config;


if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

final class TuruncuWebSVGSupportConfig
{

    function __construct()
    {

        add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
            global $wp_version;
            if ($wp_version !== '4.7.1') {
                return $data;
            }

            $filetype = wp_check_filetype($filename, $mimes);
            return [
                'ext'             => $filetype['ext'],
                'type'            => $filetype['type'],
                'proper_filename' => $data['proper_filename']
            ];
        }, 10, 4);


        add_filter('upload_mimes', [$this, 'trnc_add_mime_types']);
        add_action('admin_head', [$this, 'trnc_svg_admin_fix']);
    }

    function trnc_add_mime_types($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        $mimes['webp'] = 'image/webp';
        return $mimes;
    }

    function trnc_svg_admin_fix()
    {
        echo '<style type="text/css">
            .attachment-266x266, .thumbnail img {
                 width: 100% !important;
                 height: auto !important;
            }
            </style>';
    }
}

new TuruncuWebSVGSupportConfig();
