<?php
/**
 * Names of applications icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsApplication
{
  const
    /**
     * A handheld calculator
     */
    ACCESSORIES_CALCULATOR = 'accessories-calculator',

    /**
     * A keyboard key displaying a character
     */
    ACCESSORIES_CHARACTER_MAP = 'accessories-character-map',

    /**
     * A paper notepad
     */
    ACCESSORIES_TEXT_EDITOR = 'accessories-text-editor',

    HELP_BROWSER = 'help-browser',

    INTERNET_GROUP_CHAT = 'internet-group-chat',

    INTERNET_MAIL = 'internet-mail',

    INTERNET_NEWS_READER = 'internet-news-reader',

    INTERNET_WEB_BROWSER = 'internet-web-browser',

    OFFICE_CALENDAR = 'office-calendar',

    PREFERENCES_DESKTOP_ACCESSIBILITY = 'preferences-desktop-accessibility',

    PREFERENCES_DESKTOP_ASSISTIVE_TECHNOLOGY = 'preferences-desktop-assistive-technology',

    /**
     * "A" (or locale equivalent) in a variety of overlaid fonts
     */
    PREFERENCES_DESKTOP_FONT = 'preferences-desktop-font',

    PREFERENCES_DESKTOP_KEYBOARD_SHORTCUTS = 'preferences-desktop-keyboard-shortcuts',

    /**
     * Globe
     */
    PREFERENCES_DESKTOP_LOCALE = 'preferences-desktop-locale',

    PREFERENCES_DESKTOP_MULTIMEDIA = 'preferences-desktop-multimedia',

    PREFERENCES_DESKTOP_REMOTE_DESKTOP = 'preferences-desktop-remote-desktop',

    /**
     * Stylized screen displaying moon and stars
     */
    PREFERENCES_DESKTOP_SCREENSAVER = 'preferences-desktop-screensaver',

    PREFERENCES_DESKTOP_THEME = 'preferences-desktop-theme',

    PREFERENCES_DESKTOP_WALLPAPER = 'preferences-desktop-wallpaper',

    PREFERENCES_SYSTEM_NETWORK_PROXY = 'preferences-system-network-proxy',

    PREFERENCES_SYSTEM_SESSION = 'preferences-system-session',

    PREFERENCES_SYSTEM_WINDOWS = 'preferences-system-windows',

    SYSTEM_FILE_MANAGER = 'system-file-manager',

    SYSTEM_INSTALLER = 'system-installer',

    SYSTEM_SOFTWARE_UPDATE = 'system-software-update',

    SYSTEM_USERS = 'system-users',

    UTILITIES_SYSTEM_MONITOR = 'utilities-system-monitor',

    /**
     * A computer screen with command prompt
     */
    UTILITIES_TERMINAL = 'utilities-terminal';

    public static function getContext()
    {
      return 'apps';
    }
}