<?php
/**
 * Names of emblems icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsEmblem
{
  const
	/**
	 * A heart
	 */
    EMBLEM_FAVORITE = 'emblem-favorite',

    EMBLEM_IMPORTANT = 'emblem-important',

    EMBLEM_PHOTOS = 'emblem-photos',

    EMBLEM_READONLY = 'emblem-readonly',

    EMBLEM_SYMBOLIC_LINK = 'emblem-symbolic-link',

    EMBLEM_SYSTEM = 'emblem-system',

    EMBLEM_UREADABBLE = 'emblem-unreadable';

    public static function getContext()
    {
      return 'emblems';
    }
}