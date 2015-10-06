<?php

/**
* @version 2.0
* @package cleanlogic
* @copyright (C) 2012 by Robin Jungermann
* @license Released under the terms of the GNU General Public License
**/

function ct_bgGradient($gradient_1, $gradient_2)
{
	return ('
		background: '.$gradient_1.';
		background: -moz-linear-gradient(top,  '.$gradient_1.' 0%, '.$gradient_2.' 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,'.$gradient_1.'), color-stop(100%,'.$gradient_2.'));
		background: -webkit-linear-gradient(top,  '.$gradient_1.' 0%,'.$gradient_2.' 100%);
		background: -o-linear-gradient(top,  '.$gradient_1.' 0%,'.$gradient_2.' 100%);
		background: -ms-linear-gradient(top,  '.$gradient_1.' 0%,'.$gradient_2.' 100%);
		background: linear-gradient(top,  '.$gradient_1.' 0%,'.$gradient_2.' 100%);
		
		-pie-background: linear-gradient(top,  '.$gradient_1.' 0%,'.$gradient_2.' 100%);
	');
}

function ct_bgImageGradient($bg_image, $bg_align, $bg_repeat, $gradient_1, $gradient_2)
{
	global $templateUrl;
	
	return ('
		background: '.$gradient_1.';
		background: url(../images/'.$bg_image.') '.$bg_repeat.' '.$bg_align.', -moz-linear-gradient(top,  '.$gradient_1.' 0%, '.$gradient_2.' 100%);
		background: url(../images/'.$bg_image.') '.$bg_repeat.' '.$bg_align.', -webkit-gradient(linear, left top, left bottom, color-stop(0%,'.$gradient_1.'), color-stop(100%,'.$gradient_2.'));
		background: url(../images/'.$bg_image.') '.$bg_repeat.' '.$bg_align.', -webkit-linear-gradient(top,  '.$gradient_1.' 0%,'.$gradient_2.' 100%);
		background: url(../images/'.$bg_image.') '.$bg_repeat.' '.$bg_align.', -o-linear-gradient(top,  '.$gradient_1.' 0%,'.$gradient_2.' 100%);
		background: url(../images/'.$bg_image.') '.$bg_repeat.' '.$bg_align.', -ms-linear-gradient(top,  '.$gradient_1.' 0%,'.$gradient_2.' 100%);
		background: url(../images/'.$bg_image.') '.$bg_repeat.' '.$bg_align.', linear-gradient(top,  '.$gradient_1.' 0%,'.$gradient_2.' 100%);
		
		-pie-background: url('.$templateUrl.'/images/'.$bg_image.') '.$bg_repeat.' '.$bg_align.', linear-gradient(top,  '.$gradient_1.' 0%,'.$gradient_2.' 100%);
	');
}

function ct_borderRadius($radius)
{
	return ('
		-webkit-border-radius: '.$radius.'px;
		border-radius: '.$radius.'px; 
	');
}

function ct_boxShadow($shadowtype, $horizontal, $vertical, $blur, $spread, $color)
{
	return ('
		-webkit-box-shadow: '.$shadowtype.' '.$horizontal.'px '.$vertical.'px '.$blur.'px '.$spread.'px rgba('.$color.');
		box-shadow:  '.$shadowtype.' '.$horizontal.'px '.$vertical.'px '.$blur.'px '.$spread.'px rgba('.$color[0].','.$color[1].','.$color[2].','.$color[3].');
	');
}

?>