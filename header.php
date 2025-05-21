<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico"
    type="image/x-icon">
    <!-- Slick CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- ////top bar// -->
  <!-- Top Bar -->
  <div
    class="relative bg-cover bg-center bg-no-repeat min-h-[450px] bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.png')]">

    <section class="!bg-primary w-full py-3.5 hidden md:flex">
      <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center gap-2 md:gap-0">
          <p class="text-center md:text-left text-white ">Your Eyes, Our Passion</p>
          <?php wp_nav_menu(array('theme_location' => 'top', 'fallback_cb' => 'fallbackmenu1', 'menu_class' => 'top_nav', )); ?>
        </div>
      </div>
    </section>

    <!-- Header -->
    <header class="bg-topBarBg w-full py-4">
      <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
          <!-- Logo -->
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class='w-52'>
          </a>

          <!-- Desktop Navigation -->
          <nav class="hidden md:flex items-center space-x-6">
              <?php               
             wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class' => 'flex space-x-6',
                'container' => false,
                'walker' => new Tailwind_Hover_Nav_Walker()
            ]);    ?>
            <div class="bg-secondry hover:bg-primary py-2 px-4 rounded-sm">
              <a href="tel:9544840700" class='flex gap-2 items-center'>
                <i class="fa-solid fa-phone-volume text-white text-xl"></i>
                <p class='text-lg md:text-xl text-white'>954-484-0700</p>
              </a>
            </div>
          </nav>
          <!-- Mobile Toggle -->
          <button id="menu-toggle"
            class="md:hidden p-2 text-white text-2xl focus:outline-none border border-white/20 rounded-md">
            <!-- Hamburger Icon -->
            <svg id="icon-open" class="w-6 h-6 block" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Close (X) Icon -->
            <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu"
        class="md:hidden hidden text-white space-y-4 py-8 px-5 border-t bg-primary absolute left-0 right-0 z-50">
        <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => 'fallbackmenu1', 'menu_class' => 'primary_nav','walker'          => new Tailwind_Navwalker(), )); ?>
        <div class="bg-secondry py-2 px-4 rounded-sm w-max">
          <a href="tel:9544840700" class="hover:underline">954-484-0700</a>
        </div>
      </div>
    </header>
    <!-- Hero Section -->
    <?php if (is_front_page()) {
      get_template_part('templates/hero', 'banner');
    } else {
      get_template_part('templates/hero', 'page');
    } ?>
  </div>

  <Script>

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll('[data-toggle="dropdown"]').forEach(function (trigger) {
    trigger.addEventListener("click", function (e) {
      e.preventDefault();
      const parent = this.closest(".has-dropdown");
      const dropdown = parent.querySelector(".dropdown");

      // Hide all others
      document.querySelectorAll(".dropdown").forEach(d => {
        if (d !== dropdown) d.classList.add("hidden");
      });

      // Toggle current
      dropdown.classList.toggle("hidden");
    });
  });

  // Close on outside click
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".has-dropdown")) {
      document.querySelectorAll(".dropdown").forEach(d => d.classList.add("hidden"));
    }
  });
});


    
  </Script>