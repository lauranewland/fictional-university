<?php 

    function university_files() {
        /*This fuction calls a wordpress function & points it to the CSS file we want to load*/
        wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    }
        add_action('wp_enqueue_scripts', 'university_files');
?>
