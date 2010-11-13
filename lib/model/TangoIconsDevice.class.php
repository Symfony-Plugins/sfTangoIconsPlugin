<?php
/**
 * Names of devices icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsDevice
{
  const
	/**
	 * A circuit board with a small note or speaker in the corner?
	 */
    AUDIO_CARD = 'audio-card',

    /**
	 * Microphone
	 */
    AUDIO_INPUT_MICROPHONE = 'audio-input-microphone',

    BATTERY = 'battery',

    CAMERA_PHOTO = 'camera-photo',

    /**
	 * Video camera
	 */
    CAMERA_VIDEO = 'camera-video',

    /**
	 * Computer
	 */
    COMPUTER = 'computer',

    DRIVE_HARDDISK = 'drive-harddisk',

    DRIVE_OPTICAL = 'drive-optical',

    DRIVE_REMOVABLE_MEDIA = 'drive-removable-media',

    /**
	 * Joystick
	 */
    INPUT_GAMING = 'input-gaming',

    /**
	 * A keyboard
	 */
    INPUT_KEYBOARD = 'input-keyboard',

    /**
	 * A computer mouse
	 */
    INPUT_MOUSE = 'input-mouse',

    MEDIA_FLASH = 'media-flash',

    MEDIA_FLOPPY = 'media-floppy',

    MEDIA_OPTICAL = 'media-optical',

    MULTIMEDIA_PLAYER = 'multimedia-player',

    NETWORK_WIRED = 'network-wired',

    NETWORK_WIRELESS = 'network-wireless',

    PRINTER = 'printer',

    VIDEO_DISPLAY = 'video-display';

    public static function getContext()
    {
      return 'devices';
    }
}