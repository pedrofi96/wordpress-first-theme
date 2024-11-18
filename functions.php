<?php

//função para chamar a tag tittle
function title_tag(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'title_tag');

// Registrar o Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// registrar os menus
// Registrar os menus
register_nav_menus( array(
  'principal' => __('Menu principal', 'bs4wp')
));

//definir minaturas dos posts.
add_theme_support('post-thumbnails');

// limitar tamanho do resumo
add_filter('excerpt_length', function($length){
  return 60;
});

//adicionano estilo a paginação:
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes(){
  return 'class="btn btn-outline-my-color-5" ';
};



?>