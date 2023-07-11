<?php
global $ctName;
global $blockName;
global $icon;

$blockNameLC = strtolower($blockName);
$blockSlug = preg_replace('/\s+/', '-', $blockNameLC);

$acfBlockArray = array(
	'name'				=> $blockNameLC,
	'title'				=> __($blockName),
	'description'		=> __('Allows you to add a ' . $blockNameLC . ' block.'),
	'render_template'	=> 'acf-block-templates/' . $blockSlug . '.php',
	'category'			=> $ctName,
	'icon'				=> $icon,
	'keywords'			=> array( $blockNameLC ),
);