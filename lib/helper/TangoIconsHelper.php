<?php

/**
 * Return a path to the icon.
 * @param integer $size Icon size
 * @param string $context Context for the icon
 * @param string $name Name of the icon
 * @return string Path to the icon
 */
function ti_get_image_path($size, $context, $name) {
	return sfContext::getInstance()->getRequest()->getRelativeUrlRoot()."/sfTangoIconsPlugin/images/{$size}x{$size}/{$context}/{$name}.png";
}