<?php
/**
 * Names of categories icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsCategory
{
  const
    APPLICATIONS_ACCESSORIES = 'applications-accessories',

    /**
	 * A yellow hard hat
	 */
    APPLICATIONS_DEVELOPMENT = 'applications-development',

    APPLICATIONS_GAMES = 'applications-games',

    APPLICATIONS_GRAPHICS = 'applications-graphics',

    APPLICATIONS_INTERNET = 'applications-internet',

    APPLICATIONS_MULTIMEDIA = 'applications-multimedia',

    APPLICATIONS_OFFICE = 'applications-office',

    APPLICATIONS_OTHER = 'applications-other',

    APPLICATIONS_SYSTEM = 'applications-system',

    PREFERENCES_DESKTOP_PERIPHERALS = 'preferences-desktop-peripherals',

    PREFERENCES_DESKTOP = 'preferences-desktop',

    PREFERENCES_SYSTEM = 'preferences-system';

    public static function getContext()
    {
      return 'categories';
    }
}