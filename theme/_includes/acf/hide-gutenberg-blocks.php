<?php

add_filter( 'allowed_block_types_all', 'usr_allowed_block_types', 25, 2 );

function usr_allowed_block_types( $allowed_blocks ) {
  
  $allowed_blocks = array(
    //'core/image',
    'core/block',
    //'core/cover',
    'core/html',
    'core/column',
    'core/columns',
    //'core/heading',
    //'core/list',
    //'core/media-text',
    //'core/paragraph',
    //'core/pullquote',
    //'core/quote',
    'core/separator',
    'core/spacer',
    //'core/video',
    //'core/custom-html',
    'core/shortcode'
  );
  
  // this adds in all custom ACF blocks
  // for use on posts and pages
  $dir    = get_template_directory() . '/_includes/acf/acf-blocks';
  $files = array_diff(scandir($dir), array('..', '.'));
  
  foreach ($files as &$file) {
    $file =str_replace(".php","",$file);
    array_push($allowed_blocks, "acf/".$file);
  };
  
  return $allowed_blocks;

}