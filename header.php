<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow" />
    <?php } ?>
    <title>
        <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged, $post;

        wp_title('|', true, 'right');

        // Add the blog name.
        bloginfo('name');

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";

        // Add a page number if necessary:
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', 'wpv'), max($paged, $page));
        ?>
    </title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
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

    <div
        class="relative z-50 md:bg-[position:right_top] bg-[position:left_top]  bg-no-repeat bg-[#3F574E] min-h-[360px] bg-[url('<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.png')]">
        <section class="w-full py-3.5 hidden md:flex relative">
            <!-- Gradient background -->
            <div class="absolute inset-0 bg-gradient-to-r from-[#244848]  bg-[#244848]"></div>

            <!-- Content with relative z-index -->
            <div class="relative z-10 container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 md:gap-0">
                    <p class="text-center md:text-left text-white">Your Eyes, Our Passion</p>
                    <?php wp_nav_menu(array('theme_location' => 'top', 'fallback_cb' => 'fallbackmenu1', 'menu_class' => 'top_nav', )); ?>
                </div>
            </div>
        </section>
        <header class="bg-[#3F574E] w-full md:py-0 py-4">
            <div class="container mx-auto px-4 ">
                <div class="flex justify-between items-center">
                    <!-- Logo -->
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                            alt="<?php bloginfo('name'); ?>" class='w-52'>
                    </a>
                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex items-center space-x-6 ">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'primary',
                            'menu_class' => 'flex space-x-6',
                            'container' => false,
                            'walker' => new Tailwind_Hover_Nav_Walker()
                        ]); ?>
                        <div class="bg-secondry hover:bg-primary p-2 px-4  rounded-sm">
                            <a href="tel:9544840700" class='flex gap-2 items-center '>
                                <i class="fa-solid fa-phone-volume text-white text-xl"></i>
                                <p class='text-lg md:text-xl text-white pt-1'>954-484-0700</p>
                            </a>
                        </div>
                    </nav>
                    <!-- Mobile Toggle -->
                    <button id="menu-toggle"
                        class="md:hidden p-2 text-white text-2xl focus:outline-none border border-white/20 rounded-md">
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
                class="md:hidden hidden text-white space-y-4 py-8 px-5 border-t bg-primary absolute left-0 right-0 z-50 top-20">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex flex-col',
                    'fallback_cb' => 'fallbackmenu1',
                    'container' => false,
                    'walker' => new Tailwind_Hover_Nav_Walker()
                )); ?>
                <div class="bg-secondry py-2 px-4 rounded-sm w-max">
                    <a href="tel:9544840700" class="hover:underline">954-484-0700</a>
                </div>
            </div>
        </header>
        <!-- Header -->

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
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.getElementById("menu-toggle");
            const menu = document.getElementById("mobile-menu");
            const iconOpen = document.getElementById("icon-open");
            const iconClose = document.getElementById("icon-close");

            menuToggle.addEventListener("click", function () {
                menu.classList.toggle("hidden");
                iconOpen.classList.toggle("hidden");
                iconClose.classList.toggle("hidden");
            });
        });
    </Script>