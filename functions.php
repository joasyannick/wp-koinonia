<?php
    require_once get_template_directory() . '/inc/constants.php';

    function snrg_add_fonts() {
        wp_enqueue_style(
                'google-font-roboto-condensed',
                'https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap'
            );
    }
    add_action( 'wp_enqueue_scripts', 'snrg_add_fonts' );

    function snrg_add_vue_css() {
        $css = '/assets/app/index.css';
        wp_enqueue_style(
                'snrg-vue',
                get_template_directory_uri() . $css,
                array(),
                date( 'Y.m.d.H.i.s', filemtime( get_template_directory() . $css ) )
            );
    }
    add_action( 'wp_enqueue_scripts', 'snrg_add_vue_css' );

    function snrg_add_vue_js() {
        $js = '/assets/app/index.js';
        wp_enqueue_script(
                'snrg-vue',
                get_template_directory_uri() . $js,
                array(),
                date( 'Y.m.d.H.i.s', filemtime( get_template_directory() . $js ) )
            );
    }
    function snrg_add_vue_js_html_attributes( $tag, $handle, $src ) {
        $prefix = 'snrg-vue';
        if ( substr($handle, 0, strlen( $prefix ) ) === $prefix ) {
            return preg_replace( '/(type\s*=\s*["\']).*?(["\'])/', '$1module$2', $tag, 1 );
        }
        return $tag;
    }
    add_filter( 'script_loader_tag', 'snrg_add_vue_js_html_attributes' , 10, 3 );
    add_action( 'wp_enqueue_scripts', 'snrg_add_vue_js' );
?>