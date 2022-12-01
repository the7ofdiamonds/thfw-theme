<?php 
class THFW_Hero_Customizer {

    public function __construct() {
        add_action( 'customize_register', array( $this, 'register_thfw_hero_customize_section' ) );
    }

    public function register_thfw_hero_customize_section( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->thfw_hero_section( $wp_customize );
    }

    private function thfw_hero_section( $wp_customize ) {

        $wp_customize->add_section( 'hero_settings', array(
            'title'          => __('Hero', 'thehouseforeverwins'),
            'description'    =>  __('Hero Section Options', 'thehouseforeverwins'),
            'priority'       => 5,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'panel'  => 'theme_options',
        ) );

        $wp_customize->add_setting('hero_card_background_color');
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'hero_card_background_color', 
                array(
                    'label' => __( 'Hero Card Background Color', 'thehouseforeverwins' ),
                    'section' => 'hero_settings',
                    'settings' => 'hero_card_background_color',
                ) 
            ) 
        );

        $wp_customize->add_setting('hero_card_text_color');
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'hero_card_text_color', 
                array(
                    'label' => __( 'Hero Card Text Color', 'thehouseforeverwins' ),
                    'section' => 'hero_settings',
                    'settings' => 'hero_card_text_color',
                ) 
            ) 
        );

        $wp_customize->add_setting('hero_button_background_color');
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'hero_button_background_color', 
                array(
                    'label' => __( 'Hero Button Background Color', 'thehouseforeverwins' ),
                    'section' => 'hero_settings',
                    'settings' => 'hero_button_background_color',
                ) 
            ) 
        );

        $wp_customize->add_setting('hero_button_text_color');
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'hero_button_text_color', 
                array(
                    'label' => __( 'Hero Button Text Color', 'thehouseforeverwins' ),
                    'section' => 'hero_settings',
                    'settings' => 'hero_button_text_color',
                ) 
            ) 
        );
        
        $wp_customize->add_setting('hero_button_background_hover_color');
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'hero_button_background_hover_color', 
                array(
                    'label' => __( 'Hero Button Background Hover Color', 'thehouseforeverwins' ),
                    'section' => 'hero_settings',
                    'settings' => 'hero_button_background_hover_color',
                ) 
            ) 
        );

        $wp_customize->add_setting('hero_button_text_hover_color');
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'hero_button_text_hover_color', 
                array(
                    'label' => __( 'Hero Button Text Hover Color', 'thehouseforeverwins' ),
                    'section' => 'hero_settings',
                    'settings' => 'hero_button_text_hover_color',
                ) 
            ) 
        );
    }
}