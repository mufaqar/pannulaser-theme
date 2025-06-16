<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tp_theme
 */

get_header();
?>

<main class="min-h-screen bg-gray-100 flex items-center justify-center px-4 py-16">
  <div class="text-center max-w-xl">
    
    <!-- Image -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/404.png" alt="404 Error" class="w-full  mx-auto ">

    <!-- Text -->
    <p class="text-2xl font-semibold text-gray-800 mb-4">Oops! Page Not Found</p>
    <p class="text-gray-600 mb-6">The page you are looking for doesn't exist or has been moved.</p>

    <!-- Button -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block bg-primary hover:bg-secondary text-white px-6 py-3 rounded-md transition mt-8">
      Back to Home
    </a>
  </div>
</main>

<?php
get_footer();