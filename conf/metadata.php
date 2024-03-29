<?php
/**
 * Options for the c3chart plugin
 *
 * @author Jason Xun Xu <dev@jasonxu.net>
 */


$meta['url_yaml'] = array('string', '_pattern' => '#^(?:(?:(?:https?:)?/)?/)?(?:[\w.][\w./]*/)?js-yaml(?:\.min)?\.js$#');
$meta['url_d3'] = array('string', '_pattern' => '#^(?:(?:(?:https?:)?/)?/)?(?:[\w.][\w./]*/)?d3(?:\.min)?\.js$#');
$meta['url_c3'] = array('string', '_pattern' => '#^(?:(?:(?:https?:)?/)?/)?(?:[\w.][\w./]*/)?c3(?:\.min)?\.js$#');
$meta['url_c3_css'] = array('string', '_pattern' => '#^(?:(?:(?:https?:)?/)?/)?(?:[\w.][\w./]*/)?c3\.css$#');
$meta['width'] = array('string', '_pattern' => '/^(?:\d+(px|%))?$/');
$meta['height'] = array('string', '_pattern' => '/^(?:\d+(px|%))?$/');
$meta['align'] = array('multichoice', '_choices' => array('none','left','center','right'));
