<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header class="site-header" id="home">
    <nav class="main-nav" aria-label="Primary navigation">
      <a class="logo" href="<?php echo site_url(); ?>" aria-label="Bright Future U">
        <img src="<?php echo get_theme_file_uri('/assets/logo.png'); ?>" alt="Bright Future U" />
      </a>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
        <span></span><span></span><span></span>
        <span class="sr-only">Menu</span>
      </button>
      <div class="nav-links" id="primary-menu">
        <a href="<?php echo site_url(); ?>">Home</a>
        <a href="<?php echo site_url('/about-us'); ?>">About Us</a>

        <div class="nav-dropdown">
          <a class="nav-dropdown-trigger" href="#programs" aria-haspopup="true" aria-expanded="false">Programs <i
              class="ri-arrow-drop-down-line" aria-hidden="true"></i></a>

          <div class="nav-dropdown-menu" aria-label="Programs submenu">
            <a href="<?php echo site_url('/programs/infant'); ?>">Infant</a>
            <a href="<?php echo site_url('/programs/toddler'); ?>">Toddler</a>
            <a href="<?php echo site_url('/programs/preschool'); ?>">Preschool</a>
            <a href="<?php echo site_url('/programs/kindergarten'); ?>">Kindergarten</a>
          </div>
        </div>
        <div class="nav-dropdown">
          <a class="nav-dropdown-trigger" href="" aria-haspopup="true" aria-expanded="false">Explore <i
              class="ri-arrow-drop-down-line" aria-hidden="true"></i></a>
          <div class="nav-dropdown-menu" aria-label="Explore submenu">
            <a href="program-infant.html">Blogs</a>
            <a href="events.html">Events</a>
            <a href="#programs">Virtual Tour</a>
          </div>
        </div>

        <a class="button button-small" href="<?php echo site_url('/book-a-tour'); ?>">Book a Tour</a>
      </div>
    </nav>

  </header>
