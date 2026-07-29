<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
</head>

<body>

  <header class="site-header" id="home" style="background-image:
    linear-gradient(
      90deg,
      rgba(255, 255, 255, 0.98) 0 39%,
      rgba(255, 255, 255, 0.73) 50%,
      rgba(255, 255, 255, 0) 72%
    ), url(<?php echo get_theme_file_uri('assets/header.png'); ?>">
    <nav class="main-nav" aria-label="Primary navigation">
      <a class="logo" href="#home" aria-label="Bright Future U home">
        <img src="<?php echo get_theme_file_uri('/assets/logo.png'); ?>" alt="Bright Future U" />
      </a>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu">
        <span></span><span></span><span></span>
        <span class="sr-only">Menu</span>
      </button>
      <div class="nav-links" id="primary-menu">
        <a href="#home">Home</a>
        <a href="about-us.html">About Us</a>

        <div class="nav-dropdown">
          <a class="nav-dropdown-trigger" href="#programs" aria-haspopup="true" aria-expanded="false">Programs <i
              class="ri-arrow-drop-down-line" aria-hidden="true"></i></a>

          <div class="nav-dropdown-menu" aria-label="Programs submenu">
            <a href="program-infant.html">Infant</a>
            <a href="program-toddler.html">Toddler</a>
            <a href="program-preschool.html">Preschool</a>
            <a href="program-kindergarten.html">Kindergarten</a>
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

        <a class="button button-small" href="book-a-tour.html">Book a Tour</a>
      </div>
    </nav>

    <section class="hero">
      <div class="hero-copy">
        <h1>Helping Little Minds <span>Grow With Confidence</span></h1>
        <p>Nurturing, play-based learning in a safe and caring environment for infants, toddlers, preschool and
          kindergarten children in Calgary.</p>
        <div class="hero-actions">
          <a class="button" href="#tour">Book a Tour</a>
          <a class="button button-outline" href="#programs">View Programs</a>
        </div>
        <div class="award">
          <img src="<?php echo get_theme_file_uri('/assets/award.png'); ?>" alt="Consumer Choice Award 2026" />
          <div>
            <strong>Consumer Choice Award 2026</strong>
            <span>Southern Alberta</span>
          </div>
        </div>
      </div>
    </section>
  </header>