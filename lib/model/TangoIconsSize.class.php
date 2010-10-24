<?php
class TangoIconsSize
{
  const
    /**
    * At 16×16 pixels, the "Extra Small" size is used in places such as
    * lists (file dialog, message list in an e-mail client, etc.) and menus.
    */
    EXTRA_SMALL = 16,

    /**
    * "Small" is the common size for application toolbar icons. Its bitmap
    * size is 22×22 pixels.
    */
    SMALL = 22,

    /**
    * A very common size of 32x32px is used on some menus (slab).
    */
    MEDIUM = 32;

  /**
   * Normalize the size of the icons.
   * @param string $size Icon size
   *  <p>Proper values are:
   *  <ul>
   *   <li>For extra small icons:
   *    <ul>
   *     <li>16
   *     <li>16px
   *     <li>extra-small
   *     <li>extra small
   *     <li>x-small
   *    </ul>
   *   <li>For small icons:
   *    <ul>
   *     <li>22
   *     <li>22px
   *     <li>small
   *    </ul>
   *   <li>For medium icons:
   *    <ul>
   *     <li>32
   *     <li>32px
   *     <li>medium
   *    </ul>
   *  </ul>
   *  </p>
   * @return int Icon size in pixels
   */
  public static function normalize($size)
  {
    $size = strtolower(trim((string)$size));
    
    switch($size)
    {
      case '16':
      case '16px':
      case 'extra-small':
      case 'extra small':
      case 'x-small':
        return 16;
      case '22':
      case '22px':
      case 'small':
        return 22;
      case '32':
      case '32px':
      case 'medium':
        return 32;
      default:
        //TODO: log the bad icon size
        return 32;
    }
  }
}
