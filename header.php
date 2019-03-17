<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="google-site-verification" content="fN9pYp6C0mSy-0ChKXnAmCiGYu9tPKpfNUpaUdmPXYo" />
    <title><?php if( is_home() ) : bloginfo('name'); ?> | <?php echo bloginfo( 'description' ); endif; ?><?php wp_title( '', true ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <nav> <a href='/'> /Razaqultegar</a> </nav>
      <div id="theme">
        <div onclick="setDarkMode(true)" id="darkBtn" class=""> 🌚  <span>Dark</span></div>
        <div onclick="setDarkMode(false)" id="lightBtn" class="is-hidden"> 🌝 <span>Light</span> </div>
      </div>
    </header>
