<?php
/**
 * Names of status icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsStatus
{
  const
    AUDIO_VOLUME_HIGH = 'audio-volume-high',

    AUDIO_VOLUME_LOW = 'audio-volume-low',

    AUDIO_VOLUME_MEDIUM = 'audio-volume-medium',

    AUDIO_VOLUME_MUTED = 'audio-volume-muted',

    /**
	 * A battery with a yellow glow, yellow coloring
	 */
    BATTERY_CAUTION = 'battery-caution',

    DIALOG_ERROR = 'dialog-error',

    DIALOG_INFORMATION = 'dialog-information',

    DIALOG_WARNING = 'dialog-warning',

    FOLDER_DRAG_ACCEPT = 'folder-drag-accept',

    FOLDER_OPEN = 'folder-open',

    FOLDER_VISITING = 'folder-visiting',

    IMAGE_LOADING = 'image-loading',

    IMAGE_MISSING = 'image-missing',

    MAIL_ATTACHMENT = 'mail-attachment',

    NETWORK_ERROR = 'network-error',

    NETWORK_IDLE = 'network-idle',

    NETWORK_OFFLINE = 'network-offline',

    NETWORK_RECEIVE = 'network-receive',

    NETWORK_TRANSMIT_RECEIVE = 'network-transmit-receive',

    NETWORK_TRANSMIT = 'network-transmit',

    NETWORK_WIRELESS_ENCRYPTED = 'network-wireless-encrypted',

    PRINTER_ERROR = 'printer-error',

    SOFTWARE_UPDATE_AVAILABLE = 'software-update-available',

    SOFTWARE_UPDATE_URGENT = 'software-update-urgent',

    USER_TRASH_FULL = 'user-trash-full',

    WEATHER_CLEAR_NIGHT = 'weather-clear-night',

    /**
	 * Sun
	 */
    WEATHER_CLEAR = 'weather-clear',

    WEATHER_FEW_CLOUDS_NIGHT = 'weather-few-clouds-night',

    /**
	 * Sun partly overlaid by a cloud
	 */
    WEATHER_FEW_CLOUDS = 'weather-few-clouds',

    /**
	 * Clouds
	 */
    WEATHER_OVERCAST = 'weather-overcast',

    WEATHER_SEVERE_ALERT = 'weather-severe-alert',

    WEATHER_SHOWERS_SCATTERED = 'weather-showers-scattered',

    WEATHER_SHOWERS = 'weather-showers',

    WEATHER_SNOW = 'weather-snow',

    /**
	 * Cloud with lightning bolt
	 */
    WEATHER_STORM = 'weather-storm';

    public static function getContext()
    {
      return 'status';
    }
}