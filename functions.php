<?php

/*
* Function definitionsh for Tranquil Spa theme
*/

?>

<?php

if( !isset($content_width) ) {
  $content_width = 660;
}

function tranquilwp_setup() {
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
}

add_action('after-setup_theme', 'tranquilwp_setup');

?>