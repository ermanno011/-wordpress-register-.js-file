<!-- put code below in functions.php of your wordpress child theme -->

<?php //register custom .js file in your wordpress child theme
add_action('wp_enqueue_scripts', 'my_enqueue_front_scripts');
function my_enqueue_front_scripts(){
    wp_enqueue_script('my-custom-scripts', get_stylesheet_directory_uri().'/js/file.js');
}
?>
