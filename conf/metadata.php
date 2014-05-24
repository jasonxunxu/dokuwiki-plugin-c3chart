<?php
/**
 * Options for the c3chart plugin
 *
 * @author Jason Xun Xu <dev@jasonxu.net>
 */


$meta['cdn_yaml'] = array('string');
$meta['cdn_d3'] = array('string');
$meta['cdn_c3'] = array('string');
$meta['cdn_c3_css'] = array('string');
$meta['width'] = array('string', '_pattern' => '/^(?:\d+(px|%))?$/');
$meta['height'] = array('string', '_pattern' => '/^(?:\d+(px|%))?$/');
$meta['align'] = array('multichoice', '_choices' => array('left','center','right'));
