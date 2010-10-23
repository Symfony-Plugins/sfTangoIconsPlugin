<?php
/**
 * Names of actions icons.
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class TangoIconsAction
{
  const
    /**
     * Address book with a flare in the top right corner
     */
    ADDRESS_BOOK_NEW = 'address-book-new',

    /**
     * Calendar with an area roughly circled (as if with a thick pen), and a flare in the top right corner
     */
    APPOINTMENT_NEW = 'appointment-new',

    BOOKMARK_NEW = 'bookmark-new',

    /**
     * Business card with a flare in the top right corner
     */
    CONTACT_NEW = 'contact-new',

    /**
     * A paper sheet with a flare in the top right corner
     */
    DOCUMENT_NEW = 'document-new',

    /**
     * Page emerging from folder
     */
    DOCUMENT_OPEN = 'document-open',

    /**
     * A printer with a arrow pointing up from it
     */
    DOCUMENT_PRINT = 'document-print',

    /**
     * The printer icon inside a computer screen?
     */
    DOCUMENT_PRINT_PREVIEW = 'document-print-preview',

    /**
     * Page overlaid with an "i" information symbol
     */
    DOCUMENT_PROPERTIES = 'document-properties',

    /**
     * Hard drive with an arrow pointing onto it
     */
    DOCUMENT_SAVE = 'document-save',

    /**
     * Hard drive with an arrow pointing onto it. Additionaly a text entry widget with some text overlaid.
     */
    DOCUMENT_SAVE_AS = 'document-save-as',

    EDIT_CLEAR = 'edit-clear',

    /**
     * Two offset, overlapping text documents
     */
    EDIT_COPY = 'edit-copy',

    /**
     * Pair of scissors
     */
    EDIT_CUT = 'edit-cut',

    /**
     * A shredder
     */
    EDIT_DELETE = 'edit-delete',

    EDIT_FIND = 'edit-find',

    EDIT_FIND_REPLACE = 'edit-find-replace',

    /**
     * Clipboard with document
     */
    EDIT_PASTE = 'edit-paste',

    /**
     * Arrow making a leap up, then ends pointing right
     */
    EDIT_REDO = 'edit-redo',

    EDIT_SELECT_ALL = 'edit-select-all',

    /**
     * Arrow making a leap up, then ends pointing left
     */
    EDIT_UNDO = 'edit-undo',

    FOLDER_NEW = 'folder-new',

    /**
     * Block of light indented lines, with bold unindented lines in the middle
     */
    FORMAT_INDENT_LESS = 'format-indent-less',

    /**
     * Block of light unindented lines, with bold indented lines in the middle
     */
    FORMAT_INDENT_MORE = 'format-indent-more',

    /**
     * Block of centered lines of various lengths
     */
    FORMAT_JUSTIFY_CENTER = 'format-justify-center';

    public static function getContext()
    {
      return 'actions';
    }
}
