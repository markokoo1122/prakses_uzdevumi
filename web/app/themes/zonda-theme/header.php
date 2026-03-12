<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="header-container">

    <div class="logo">
      <?php
    $logo = carbon_get_theme_option('crb_logo');
    if ($logo) {
        echo wp_get_attachment_image($logo, 'full', false, ['class' => 'site-logo']);
    }
    ?>
    </div>

    <nav class="main-nav">
      <div class="nav-links">
        <a href="#">products</a>
        <a href="#">references</a>
        <a href="#">about us</a>
        <a href="#">contact</a>
      </div>
      
      <div class="nav-contact-info">
        <p class="phone">+371 27705363</p>
        <p class="email">info@zondalighting.com</p>
      </div>
    </nav>

    <div class="icons">
      <div class="desktop-icons">
        <svg class="icon" viewBox="0 0 24 24">
          <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
        </svg>

        <div class="cart">
          <svg class="icon" viewBox="0 0 24 24">
            <path d="M7 18c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM7.2 14h9.5c.8 0 1.5-.5 1.7-1.2l2.1-7.3H6.2L5.3 3H2v2h2l3.6 7.6-1.3 2.4c-.1.2-.2.5-.2.8 0 1.1.9 2 2 2h12v-2H8.4l.8-1.6z"/>
          </svg>
          <div class="cart-count">0</div>
        </div>
      </div>
      
      <button class="menu-toggle" aria-label="Toggle navigation">
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
      </button>
    </div>

  </div>
</header>