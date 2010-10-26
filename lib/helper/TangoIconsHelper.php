<?php

/**
 * Return a URI to the icon.
 * @param string $context Context for the icon
 * @param string $name Name of the icon
 * @param integer $size Icon size
 * @return string URI to the icon
 */
function ti_get_image_uri($context, $name, $size=null) {
  $size = $size === null ? sfConfig::get('app_tango_icons_size', TangoIconsSize::EXTRA_SMALL) : $size;
  $size = TangoIconsSize::normalize($size);
  return sprintf('%s/sfTangoIconsPlugin/images/%dx%d/%s/%s.png',
    sfContext::getInstance()->getRequest()->getRelativeUrlRoot(),
    $size, $size, $context, $name);
}

/**
 * Return a URI to the action icon.
 * @param string $name Name of the action icon
 * @param integer $size Icon size
 * @return string URI to the action icon
 */
function ti_get_action_icon_uri($name, $size=null) {
    return ti_get_image_uri(TangoIconsAction::getContext(), $name, $size);
}

/**
 * Return a URI to the application icon.
 * @param string $name Name of the application icon
 * @param integer $size Icon size
 * @return string URI to the application icon
 */
function ti_get_application_icon_uri($name, $size=null) {
    return ti_get_image_uri(TangoIconsApplication::getContext(), $name, $size);
}
