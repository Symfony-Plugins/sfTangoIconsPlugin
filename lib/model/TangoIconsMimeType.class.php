<?php
/**
 * Names of mimetypes icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsMimeType
{
  const
    APPLICATION_CERTIFICATE = 'application-certificate',

    APPLICATION_X_EXECUTABLE = 'application-x-executable',

    AUDIO_X_GENERIC = 'audio-x-generic',

    /**
	 * Page with "A" printed on it
	 */
    FONT_X_GENERIC = 'font-x-generic',

    IMAGE_X_GENERIC = 'image-x-generic',

    PACKAGE_X_GENERIC = 'package-x-generic',

    TEXT_HTML = 'text-html',

    TEXT_X_GENERIC_TEMPLATE = 'text-x-generic-template',

    /**
	 * Page with lines of unreadable text
	 */
    TEXT_X_GENERIC = 'text-x-generic',

    TEXT_X_SCRIPT = 'text-x-script',

    VIDEO_X_GENERIC = 'video-x-generic',

    X_OFFICE_ADDRESS_BOOK = 'x-office-address-book',

    X_OFFICE_CALENDAR = 'x-office-calendar',

    X_OFFICE_DOCUMENT_TEMPLATE = 'x-office-document-template',

    /**
	 * A fileable document containing some lines of text surrounding an image
	 */
    X_OFFICE_DOCUMENT = 'x-office-document',

    X_OFFICE_DRAWING_TEMPLATE = 'x-office-drawing-template',

    X_OFFICE_DRAWING = 'x-office-drawing',

    X_OFFICE_PRESENTATION_TEMPLATE = 'x-office-presentation-template',

    X_OFFICE_PRESENTATION = 'x-office-presentation',

    X_OFFICE_SPREADSHEET_TEMPLATE = 'x-office-spreadsheet-template',

    /**
	 * A document containing a spreadsheet and a pie chart in the bottom-right corner
	 */
    X_OFFICE_SPREADSHEET = 'x-office-spreadsheet';

    public static function getContext()
    {
      return 'mimetypes';
    }
}