<?php $bgImg = get_field('background_image');
$bgImg = $bgImg['url'];
$text = get_field('text');
$btn = get_field('button'); 
$blockHeight = get_field('block_height');

require get_template_directory().'/_partials/page-header-template.php';