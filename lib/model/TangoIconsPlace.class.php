<?php
/**
 * Names of places icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsPlace
{
  const
    FOLDER_REMOTE = 'folder-remote',

    FOLDER_SAVED_SEARCH = 'folder-saved-search',

    FOLDER = 'folder',

    NETWORK_SERVER = 'network-server',

    NETWORK_WORKGROUP = 'network-workgroup',

    START_HERE = 'start-here',

    USER_DESKTOP = 'user-desktop',

    USER_HOME = 'user-home',

    USER_TRASH = 'user-trash';

    public static function getContext()
    {
      return 'places';
    }
}