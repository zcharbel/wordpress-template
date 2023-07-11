<?php

add_filter( 'allowed_block_types_all', 'usr_allowed_block_types', 25, 2 );

function usr_allowed_block_types( $allowed_blocks ) {
  
  // this allows you to show default
  // gutenberg blocks that come installed with wordpress
  $allowed_blocks = array(
    'core/html',
    'core/column',
    'core/columns',
    'core/separator',
    'core/spacer',
    'core/shortcode',
    //'core/image',
    //'core/block',
    //'core/cover',
    //'core/heading',
    //'core/list',
    //'core/media-text',
    //'core/paragraph',
    //'core/pullquote',
    //'core/quote',
    //'core/video',
    //'core/custom-html',
  );
  
  // this adds in all custom ACF blocks
  // for use on posts and pages
  $dir    = get_template_directory() . '/_includes/acf/acf-blocks';
  $files = array_diff(scandir($dir), array('..', '.'));
  
  foreach ($files as &$file) {
    $file =str_replace(".php","",$file);
    array_push($allowed_blocks, "acf/".$file);
  };
  
  // this returns the full array
  // of blocks that are to be listed
  return $allowed_blocks;

}