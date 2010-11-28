# Tango Icons Plugin #

The sfTangoIconsPlugin offers a set of [Tango Icons](http://tango.freedesktop.org/Tango_Icon_Library) in sizes *extra small* (16x16 px), *small* (22x22 px) and *medium* (32x32 px).

## Installation ##

  * Install the plugin

        $ symfony plugin:install sfTangoIconsPlugin

  * Clear cache

        $ symfony cc

## Configuration ##

  * You can set the default size of icons in app.yml:

        all:
          tango_icons:
            size: small

  * Activate helper in settings.yml:

        standard_helpers: [...TangoIcons]

    or:

        use_helper('TangoIcons');

## Use ##

### Icons

If you have selected the default size of icons:

    <img src="<?php echo ti_get_action_icon_uri(TangoIconsAction::GO_HOME) ?>" alt="" />

If you do not have determined the size of the default icons, or want to manually set the icon size:

    <img src="<?php echo ti_get_action_icon_uri(TangoIconsAction::GO_HOME, 'small') ?>" alt="" />

### Animation

    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
    <html>
      <head>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script type="text/javascript" src="sfTangoIconsPlugin/js/jquery.processworking.js"></script>
    	<link href="sfTangoIconsPlugin/css/animation.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
          $(document).ready(function() {
            $('#animation').processWorking('init', 32);
          });
        </script>
      </head>
      <body>
          <div id="animation"></div>
          <button type="button" onclick="$('#animation').processWorking('start', 15);">Start 15</button>
          <button type="button" onclick="$('#animation').processWorking('start', 30);">Start 30</button>
          <button type="button" onclick="$('#animation').processWorking('start', 60);">Start 60</button>
          <button type="button" onclick="$('#animation').processWorking('stop');">Stop</button>
      </body>
    </html>

## Icon size ##

Proper icon sizes are:

  * For extra small icons:
    * 16
    * 16px
    * extra-small
    * extra small
    * x-small
  * For small icons:
    * 22
    * 22px
    * small
  * For medium icons:
    * 32
    * 32px
    * medium
