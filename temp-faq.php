<?php /*Template Name: FAQS*/ get_header(); ?>

<!-- FAQs Section -->
<section id="faq" class="md:py-20 py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl sm:!text-5xl lg:!text-6xl font-bold text-primary font-axiformaregular mb-8 text-center">
            Frequently Asked Questions
        </h2>

        <div class="max-w-[1068px] mx-auto faq-wrapper divide-y divide-black/20 bg-white shadow-lg px-7 py-10">
            <!-- FAQ 1 -->


            <?php
// Arguments for the FAQ query
$args = array(
    'post_type'      => 'faqs',
    'posts_per_page' => -1, // Show all FAQs
    'orderby'        => 'menu_order', // Order by menu order (if set)
    'order'          => 'ASC'
);

// Create new query
$faq_query = new WP_Query( $args );

// Check if FAQs exist
if ( $faq_query->have_posts() ) : ?>

            <div class="faq-container">
                <?php while ( $faq_query->have_posts() ) : $faq_query->the_post(); ?>

                <div class="pt-6 faq active">
                    <button class="faq-question w-full flex items-center justify-between text-left pb-6">
                        <span class="text-xl font-medium faq-title text-black"><?php the_title()?></span>
                        <svg class="w-5 h-5 transition-transform duration-300 icon" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer border-t border-black/20 py-6 hidden text-black">
                        <?php the_content()?>
                    </div>
                </div>

                <?php endwhile; ?>
            </div>

            <?php 
else : 
    // Fallback content if no FAQs exist
    echo '<p>No FAQs found.</p>';
endif;

// Reset post data
wp_reset_postdata();
?>


        </div>
    </div>
</section>



<script>
const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
    faq.querySelector('.faq-question').addEventListener('click', () => {
        // Close all other FAQs
        faqs.forEach(other => {
            if (other !== faq) {
                other.classList.remove('active');
            }
        });

        // Toggle current FAQ
        faq.classList.toggle('active');
    });
});
</script>

<?php get_footer(); ?>