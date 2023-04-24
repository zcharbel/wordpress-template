<?php

add_filter( 'allowed_block_types_all', 'usr_allowed_block_types' );

function usr_allowed_block_types( $allowed_blocks ) {
  return array(
    'acf/faq',
    'acf/team',
    'acf/accordion',
    'acf/carousel',
    'acf/content',
    //'core/image',
    'core/block',
    //'core/cover',
    'core/html',
    'core/column',
    'core/columns',
    'core/heading',
    //'core/list',
    //'core/media-text',
    'core/paragraph',
    //'core/pullquote',
    'core/quote',
    'core/separator',
    'core/spacer',
    //'core/video',
    //'core/custom-html',
    'core/shortcode'
  );

}