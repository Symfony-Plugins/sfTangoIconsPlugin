<?php

/**
 * Return a path to the icon.
 * @param string $context Context for the icon
 * @param string $name Name of the icon
 * @param integer $size Icon size
 * @return string Path to the icon
 */
function ti_get_image_path($context, $name, $size=null) {
  $size = $size === null ? sfConfig::get('app_tango_icons_size', TangoIconsSize::EXTRA_SMALL) : $size;
  $size = TangoIconsSize::normalize($size);
  return sprintf('%s/sfTangoIconsPlugin/images/%dx%d/%s/%s.png',
    sfContext::getInstance()->getRequest()->getRelativeUrlRoot(),
    $size, $size, $context, $name);
}
