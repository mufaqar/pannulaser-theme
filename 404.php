<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tp_theme
 */
<?php get_header(); ?>

<main id="primary" class="site-main bg-[#f9fafb] py-16 min-h-[70vh]">
  <div class="container mx-auto px-4 text-center max-w-2xl">
    
    <h1 class="text-4xl sm:text-5xl font-bold text-primary mb-6">
      <?php esc_html_e('Oops! Page not found.', 'tp_theme'); ?>
    </h1>

    <p class="text-lg text-gray-600 mb-8">
      <?php esc_html_e('The page you’re looking for doesn’t exist or has been moved.', 'tp_theme'); ?>
    </p>

    <?php get_search_form(); ?>

    <div class="grid md:grid-cols-2 gap-8 text-left mt-12">
      <div>
        <h2 class="text-xl font-semibold mb-4 text-gray-700">
          <?php esc_html_e('Recent Posts', 'tp_theme'); ?>
        </h2>
        <?php the_widget('WP_Widget_Recent_Posts'); ?>
      </div>

      <div>
        <h2 class="text-xl font-semibold mb-4 text-gray-700">
          <?php esc_html_e('Most Used Categories', 'tp_theme'); ?>
        </h2>
        <ul class="list-disc pl-5 text-gray-600">
          <?php
          wp_list_categories([
            'orderby' => 'count',
            'order' => 'DESC',
            'show_count' => true,
            'title_li' => '',
            'number' => 5,
          ]);
          ?>
        </ul>
      </div>

      <div class="col-span-2">
        <h2 class="text-xl font-semibold mb-4 text-gray-700">
          <?php esc_html_e('Archives', 'tp_theme'); ?>
        </h2>
        <p class="text-gray-500 mb-2">
          <?php printf(esc_html__('Try looking in the monthly archives. %s', 'tp_theme'), convert_smilies(':)')); ?>
        </p>
        <?php the_widget('WP_Widget_Archives', 'dropdown=1'); ?>
      </div>

      <div class="col-span-2">
        <h2 class="text-xl font-semibold mb-4 text-gray-700">
          <?php esc_html_e('Tags', 'tp_theme'); ?>
        </h2>
        <?php the_widget('WP_Widget_Tag_Cloud'); ?>
      </div>
    </div>

    <a href="<?php echo home_url(); ?>" class="inline-block mt-10 bg-primary text-white px-6 py-3 rounded hover:bg-secondary transition">
      <?php esc_html_e('Back to Home', 'tp_theme'); ?>
    </a>

  </div>
</main>

<?php get_footer(); ?>

