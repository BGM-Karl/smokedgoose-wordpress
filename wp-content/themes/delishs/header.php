<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package delishs
 */

$delishs_preloader = get_theme_mod( 'delishs_preloader', false );
$delishs_preloader_text = get_theme_mod( 'delishs_preloader_text', 'Loading...' );
$delishs_backtotop = get_theme_mod( 'delishs_backtotop', true );
$delishs_color_mode = get_theme_mod( 'delishs_color_mode', 'dark' );

?>

<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ): ?>
    <?php endif;?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

    <?php wp_body_open();?>

    <?php if ( !empty( $delishs_preloader ) ): ?>
        <div id="preloader">
            <div class="preloader-close"><?php print esc_html( 'x', 'delishs' ); ?></div>
            <div class="rr-restaurant">
                <div class="loading-wrapper">
                    
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 35.235 35.235" style="enable-background:new 0 0 35.235 35.235;" xml:space="preserve">
                        <g>
                            <g id="b103_soup">
                                <path id = "cap" d="M26.776,12.687H19.25c0.68,0,1.233-0.553,1.233-1.234s-0.554-1.23-1.233-1.23h-3.078c-0.68,0-1.232,0.549-1.232,1.23
                                    s0.553,1.234,1.232,1.234H8.645c-2.094,0-3.828,1.877-4.165,3.875h26.464C30.605,14.563,28.871,12.687,26.776,12.687z"/>
                                <path id = "body" d="M31.005,18.677v-0.352H4.479H4.417H0v1.762h4.417v10.918c0,2.338,1.894,4.229,4.228,4.229h18.132
                                    c2.336,0,4.229-1.891,4.229-4.229V20.439h4.229v-1.762H31.005z"/>
                                <path class = "smell" id = "elem-1" d="M11.24,4.235c0.123,0.162,0.254,0.318,0.391,0.465l0.341,0.342c0.216,0.217,0.417,0.434,0.577,0.629
                                    c0.08,0.098,0.146,0.191,0.195,0.268c0.047,0.076,0.09,0.135,0.1,0.223c0.012,0.094-0.037,0.221-0.133,0.348
                                    c-0.096,0.125-0.23,0.246-0.387,0.367c0.186,0.072,0.389,0.096,0.605,0.07c0.215-0.025,0.451-0.121,0.648-0.326
                                    c0.195-0.205,0.304-0.508,0.321-0.775c0.019-0.27-0.022-0.514-0.083-0.734c-0.123-0.438-0.327-0.793-0.545-1.119
                                    c-0.109-0.16-0.244-0.322-0.34-0.447c-0.096-0.113-0.185-0.229-0.266-0.344c-0.33-0.459-0.561-0.873-0.647-1.359
                                    c-0.09-0.492,0.01-1.121,0.307-1.842c-0.771,0.162-1.457,0.807-1.681,1.709c-0.111,0.445-0.087,0.934,0.032,1.363
                                    C10.793,3.511,11.002,3.897,11.24,4.235z"/>
                                <path class = "smell" id = "elem-2" d="M15.809,4.235C15.932,4.397,16.064,4.553,16.2,4.7l0.34,0.342c0.216,0.217,0.416,0.434,0.58,0.629
                                    c0.077,0.098,0.143,0.191,0.193,0.268c0.049,0.076,0.09,0.135,0.098,0.223c0.013,0.094-0.035,0.221-0.131,0.348
                                    c-0.095,0.125-0.23,0.246-0.389,0.367c0.188,0.072,0.392,0.096,0.607,0.07c0.214-0.025,0.453-0.121,0.648-0.326
                                    c0.197-0.205,0.304-0.508,0.322-0.775c0.019-0.27-0.021-0.514-0.082-0.734c-0.125-0.438-0.33-0.793-0.548-1.119
                                    c-0.107-0.16-0.243-0.322-0.339-0.447c-0.094-0.113-0.185-0.229-0.264-0.344c-0.331-0.459-0.563-0.873-0.649-1.359
                                    c-0.09-0.49,0.008-1.119,0.304-1.84c-0.77,0.162-1.455,0.807-1.678,1.709c-0.111,0.445-0.088,0.934,0.031,1.363
                                    C15.363,3.511,15.568,3.897,15.809,4.235z"/>
                                <path class = "smell" id = "elem-3" d="M19.972,4.235c0.122,0.162,0.253,0.318,0.39,0.465l0.341,0.342c0.216,0.217,0.415,0.434,0.577,0.629
                                    c0.08,0.098,0.146,0.191,0.195,0.268c0.047,0.076,0.088,0.135,0.1,0.223c0.013,0.094-0.037,0.221-0.133,0.348
                                    c-0.095,0.125-0.23,0.246-0.389,0.367c0.188,0.072,0.392,0.096,0.605,0.07c0.215-0.025,0.453-0.121,0.65-0.326
                                    c0.195-0.205,0.303-0.508,0.32-0.775c0.02-0.27-0.021-0.514-0.082-0.734c-0.123-0.438-0.326-0.793-0.545-1.119
                                    c-0.109-0.16-0.244-0.322-0.34-0.447c-0.096-0.113-0.186-0.229-0.266-0.344c-0.33-0.459-0.561-0.873-0.646-1.359
                                    c-0.091-0.492,0.009-1.121,0.304-1.842c-0.77,0.162-1.457,0.807-1.679,1.709c-0.11,0.445-0.087,0.934,0.032,1.363
                                    C19.524,3.511,19.731,3.897,19.972,4.235z"/>
                            </g>
                            <g id="Capa_1_128_">
                            </g>
                        </g>
                        </svg>
                    <div class="loading-text"><h2><?php print esc_attr($delishs_preloader_text); ?></h2></div>
                </div>
            </div>
        </div>
    <?php endif;?>

    <?php if ( !empty( $delishs_backtotop ) ): ?>
        <div id="scroll-percentage">
            <span id="scroll-percentage-value"></span>
        </div>
    <?php endif;?>
    
    <!-- header start -->
    <?php do_action( 'delishs_header_style' );?>
    <!-- header end -->
    
    <!-- wrapper-box start -->
    <?php do_action( 'delishs_before_main_content' );?>