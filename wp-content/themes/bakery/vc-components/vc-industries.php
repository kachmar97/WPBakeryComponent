<?php

/**
 * Adds new shortcode "myprefix_say_hello" and registers it to
 * the Visual Composer plugin
 *
 */
if ( ! class_exists( 'VcCusmotComponent' ) ) {

    class VcCusmotComponent {

        /**
         * Main constructor
         */
        function __construct()
        {
            add_action('init', array($this, 'create_shortcode'), 999);
            add_shortcode('vc_industries', array($this, 'render_shortcode'));
        }

        /**
         * Shortcode output
         */
        public function create_shortcode()
        {
            // Stop all if VC is not enabled
            if (!defined('WPB_VC_VERSION')) {
                return;
            }

            vc_map(array(
                'name' => __('Industries', 'bakery'),
                'base' => 'vc_industries',
                'description' => __('', 'bakery'),
                'category' => __('Custom Modules', 'bakery'),
                'params' => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'div',
                        'heading' => __('Title', 'bakery'),
                        'param_name' => 'component_title',
                        'value' => __('', 'bakery'),
                        'description' => __('', 'bakery'),
                    ),
                    array(
                        'type' => 'param_group',
                        'param_name' => 'box_repeater_items',
                        'admin_label' => true,
                        'params' => array(
                            array(
                                'type' => 'attach_image',
                                'holder' => 'div',
                                'heading' => __('Icon', 'bakery'),
                                'param_name' => 'industry_icon',
                                'value' => __('', 'bakery'),
                                'description' => __('', 'bakery'),
                            ),
                            array(
                                'type' => 'textfield',
                                'holder' => 'div',
                                'heading' => __('Industry title', 'bakery'),
                                'param_name' => 'industry_title',
                                'value' => __('', 'bakery'),
                                'description' => __('', 'bakery'),
                            ),
                            array(
                                'type' => 'textarea',
                                'holder' => 'div',
                                'heading' => __('Subtitle', 'bakery'),
                                'param_name' => 'industry_subtitle',
                                'value' => __('', 'bakery'),
                                'description' => __('', 'bakery'),
                            ),
                        )

                    )
                ),
            ));
        }

        public function render_shortcode($atts)
        {
            extract(shortcode_atts(array(
                'component_title' => '',
                'box_repeater_items' => '',
            ), $atts));

            $values = vc_param_group_parse_atts($atts['box_repeater_items']); ?>

            <div class="industries-component">
                <h2><?php echo $atts['component_title']; ?></h2>
                <div class="industry-cards-wrapper">
                    <?php foreach ($values as $value) :
                        $icon = wp_get_attachment_image_src($value['industry_icon']); ?>
                        <div class="industry-card">
                            <div class="img-block">
                                <img src="<?php echo $icon['0']; ?>" width="<?php echo $icon['1']; ?>" height="<?php echo $icon['2']; ?>">
                            </div>
                            <div class="text-block">
                                <h3><?php echo $value['industry_title']; ?></h3>
                                <p><?php echo $value['industry_subtitle']; ?></p>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>

        <?php }

    }

}
new VcCusmotComponent;