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
    return ti_get_image_path(TangoIconsApplication::getContext(), $name, $size);
}

/**
 * Return a URI to the category icon.
 * @param string $name Name of the category icon
 * @param integer $size Icon size
 * @return string URI to the category icon
 */
function ti_get_category_icon_uri($name, $size=null) {
    return ti_get_image_path(TangoIconsCategory::getContext(), $name, $size);
}

/**
 * Return a URI to the device icon.
 * @param string $name Name of the device icon
 * @param integer $size Icon size
 * @return string URI to the device icon
 */
function ti_get_device_icon_uri($name, $size=null) {
    return ti_get_image_path(TangoIconsDevice::getContext(), $name, $size);
}

/**
 * Return a URI to the emblem icon.
 * @param string $name Name of the emblem icon
 * @param integer $size Icon size
 * @return string URI to the emblem icon
 */
function ti_get_emblem_icon_uri($name, $size=null) {
    return ti_get_image_path(TangoIconsEmblem::getContext(), $name, $size);
}

/**
 * Return a URI to the emot icon.
 * @param string $name Name of the emot icon
 * @param integer $size Icon size
 * @return string URI to the emot icon
 */
function ti_get_emot_icon_uri($name, $size=null) {
    return ti_get_image_path(TangoIconsEmotes::getContext(), $name, $size);
}

/**
 * Return a URI to the mime type icon.
 * @param string $name Name of the mime type icon
 * @param integer $size Icon size
 * @return string URI to the mime type icon
 */
function ti_get_mime_type_icon_uri($name, $size=null) {
    return ti_get_image_path(TangoIconsMimeType::getContext(), $name, $size);
}

/**
 * Return a URI to the place icon.
 * @param string $name Name of the place icon
 * @param integer $size Icon size
 * @return string URI to the place icon
 */
function ti_get_place_icon_uri($name, $size=null) {
    return ti_get_image_path(TangoIconsPlace::getContext(), $name, $size);
}

/**
 * Return a URI to the status icon.
 * @param string $name Name of the status icon
 * @param integer $size Icon size
 * @return string URI to the status icon
 */
function ti_get_status_icon_uri($name, $size=null) {
    return ti_get_image_path(TangoIconsStatus::getContext(), $name, $size);
}