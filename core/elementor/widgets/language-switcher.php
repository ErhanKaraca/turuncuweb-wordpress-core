<?php

namespace Elementor;

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class TuruncuWeb_Widget_Language_Switcher extends Widget_Base
{

    public function get_name()
    {
        return 'turuncuweb-widget-language-switcher';
    }

    public function get_title()
    {
        return esc_html__('Language Switcher', 'turuncuweb');
    }

    public function get_icon()
    {
        return 'fa fa-code';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'turuncuweb'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'switcher_style',
            [
                'label'       => esc_html__('Style', 'turuncuweb'),
                'label_block' => true,
                'type'        => Controls_Manager::SELECT,
                'options'     => [
                    'image'   => esc_html__('Image', 'turuncuweb'),
                    'name'    => esc_html__('Name', 'turuncuweb'),
                ],
                'default'     => 'image',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $switcher_style = $settings['switcher_style'];
        $alternate_language = pll_current_language() == 'tr' ? 'en' : 'tr';
        ?>
        <a href="<?php echo pll_home_url($alternate_language); ?>" class="trnc-language-switcher">
            <img src="<?php echo TURUNCUWEB_URL . 'images/' . $alternate_language . '.png'; ?>">
        </a>
        <?php
    }

    protected function _content_template()
    {
        ?>
            <img src="<?php echo TURUNCUWEB_URL . 'images/tr.png'; ?>">
        <?php
    }
}
