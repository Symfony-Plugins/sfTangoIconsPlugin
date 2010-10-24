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
     * Calendar with an area roughly circled (as if with a thick pen), and a
     * flare in the top right corner
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
     * Hard drive with an arrow pointing onto it. Additionaly a text entry
     * widget with some text overlaid.
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
    FORMAT_JUSTIFY_CENTER = 'format-justify-center',

    /**
     * Block of justified lines, with the last line aligned left/right in
     * LTR/RTL locales
     */
    FORMAT_JUSTIFY_FILL = 'format-justify-fill',

    /**
     * Block of left-aligned lines of various lengths
     */
    FORMAT_JUSTIFY_LEFT = 'format-justify-left',

    /**
     * Block of right-aligned lines of various lengths
     */
    FORMAT_JUSTIFY_RIGHT = 'format-justify-right',

    /**
     * Bold sans-serif "A"
     */
    FORMAT_TEXT_BOLD = 'format-text-bold',

    /**
     * Italic sans-serif "A"
     */
    FORMAT_TEXT_ITALIC = 'format-text-italic',

    /**
     * Sans-serif "A" with strikethrough
     */
    FORMAT_TEXT_STRIKETHROUGH = 'format-text-strikethrough',

    /**
     * Underlined sans-serif "A"
     */
    FORMAT_TEXT_UNDERLINE = 'format-text-underline',

    /**
     * Arrow pointing down with a horizontal line at the arrow tip
     */
    GO_BOTTOM = 'go-bottom',

    /**
     * Arrow pointing down
     */
    GO_DOWN = 'go-down',

    /**
     * Arrow pointing to the left (for ltr-languages) with a vertical line at
     * the arrow tip
     */
    GO_FIRST = 'go-first',

    /**
     * House
     */
    GO_HOME = 'go-home',

    /**
     * Arrow making a leap up, right and then pointing down with its tip at
     * its baseline
     */
    GO_JUMP = 'go-jump',

    /**
     * Arrow pointing to the right (for ltr-languages) with a vertical line at
     * the arrow tip
     */
    GO_LAST = 'go-last',

    /**
     * Arrow pointing to the right (for ltr-languages)
     */
    GO_NEXT = 'go-next',

    /**
     * Arrow pointing to the left (for ltr-languages)
     */
    GO_PREVIOUS = 'go-previous',

    /**
     * Arrow pointing up with a horizontal line at the arrow tip
     */
    GO_TOP = 'go-top',

    /**
     * Arrow pointing up
     */
    GO_UP = 'go-up',

    /**
     * Bold "+" symbol
     */
    LIST_ADD = 'list-add',

    /**
     * Bold "−" symbol
     */
    LIST_REMOVE = 'list-remove',

    MAIL_FORWARD = 'mail-forward',

    /**
     * Rubbish bag
     */
    MAIL_MARK_JUNK = 'mail-mark-junk',

    /**
     * Rubbish bag with a (black) diagonal line through it
     */
    MAIL_MARK_NOTJUNK = 'mail-mark-notjunk',

    /**
     * Page with a pencil writing on it
     */
    MAIL_MESSAGE_NEW = 'mail-message-new',

    /**
     * Two arrows curling back
     */
    MAIL_REPLY_ALL = 'mail-reply-all',

    /**
     * One arrow curling back
     */
    MAIL_REPLY_SENDER = 'mail-reply-sender',

    /**
     * Circle of two arrows chasing each other
     */
    MAIL_SEND_RECEIVE = 'mail-send-receive',

    MEDIA_EJECT = 'media-eject',

    /**
     * Two solid (black) vertical rectangles
     */
    MEDIA_PLAYBACK_PAUSE = 'media-playback-pause',

    /**
     * Solid (black) equilateral triangle pointing right
     */
    MEDIA_PLAYBACK_START = 'media-playback-start',

    /**
     * Solid (black) square
     */
    MEDIA_PLAYBACK_STOP = 'media-playback-stop',

    /**
     * Solid (maroon) circle
     */
    MEDIA_RECORD = 'media-record',

    /**
     * Two solid (black) equilateral triangles touching, pointing left
     */
    MEDIA_SEEK_BACKWARD = 'media-seek-backward',

    /**
     * Two solid (black) equilateral triangles touching, pointing right
     */
    MEDIA_SEEK_FORWARD = 'media-seek-forward',

    /**
     * Solid (black) equilateral triangle pointing left, touching a vertical
     * rectangle
     */
    MEDIA_SKIP_BACKWARD = 'media-skip-backward',

    /**
     * Solid (black) equilateral triangle pointing right, touching a vertical
     * rectangle
     */
    MEDIA_SKIP_FORWARD = 'media-skip-forward',

    PROCESS_STOP = 'process-stop',

    /**
     * Stylized keyhole in a stylized screen
     */
    SYSTEM_LOCK_SCREEN = 'system-lock-screen',

    /**
     * Stylized keyhole
     */
    SYSTEM_LOG_OUT = 'system-log-out',

    /**
     * Magnifying glass
     */
    SYSTEM_SEARCH = 'system-search',

    SYSTEM_SHUTDOWN = 'system-shutdown',

    TAB_NEW = 'tab-new',

    /**
     * Stylized screen with arrows pulling each corner outward
     */
    VIEW_FULLSCREEN = 'view-fullscreen',

    /**
     * Circle of two arrows chasing each other
     */
    VIEW_REFRESH = 'view-refresh',

    WINDOW_NEW = 'window-new';

    public static function getContext()
    {
      return 'actions';
    }
}
