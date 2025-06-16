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

<main id="primary" class="site-main bg-[#f8f9fc] min-h-screen flex items-center justify-center px-4 py-16">
    <div class="max-w-3xl text-center">

        <h1 class="text-5xl font-bold text-primary mb-4">
            <?php esc_html_e('404 - Page Not Found', 'tp_theme'); ?>
        </h1>

        <p class="text-lg text-gray-700 mb-8">
            <?php esc_html_e('Sorry, we couldn’t find the page you were looking for. It might have been moved or deleted.', 'tp_theme'); ?>
        </p>

        <?php get_search_form(); ?>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-4"><?php esc_html_e('Recent Posts', 'tp_theme'); ?>
                </h2>
                <?php the_widget('WP_Widget_Recent_Posts'); ?>
            </div>

            <div>
                <h2 class="text-xl font-semibold text-gray-800 mb-4"><?php esc_html_e('Top Categories', 'tp_theme'); ?>
                </h2>
                <ul class="list-disc pl-5 text-gray-700">
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

            <div class="md:col-span-2">
                <h2 class="text-xl font-semibold text-gray-800 mb-4"><?php esc_html_e('Archives', 'tp_theme'); ?></h2>
                <?php
        $archive_content = '<p>' . sprintf( esc_html__('Try looking in the monthly archives. %1$s', 'tp_theme'), convert_smilies(':)') ) . '</p>';
        the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");
        ?>
            </div>
        </div>

        <a href="<?php echo esc_url(home_url('/')); ?>"
            class="inline-block mt-10 bg-primary hover:bg-secondary text-white px-6 py-3 rounded transition-all">
            <?php esc_html_e('Back to Homepage', 'tp_theme'); ?>
        </a>

    </div>
</main>

<?php
get_footer();