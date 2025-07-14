<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tp_theme
 */

get_header();
$post_id = get_the_ID();
$meta_description = get_post_meta($post_id, '_yoast_wpseo_metadesc', true);
$thumbnail_url = get_the_post_thumbnail_url($post_id, 'full'); // 'full' or other sizes
$thumbnail_id = get_post_thumbnail_id(); // Get the ID of the featured image
$caption = wp_get_attachment_caption($thumbnail_id);

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC'
);

$query = new WP_Query($args);

?>

<main class="">
    <!-- Content Section -->
    <section class="md:py-20 py-16">
        <div class="container mx-auto px-4">
            <div class="Post_Content prose max-w-none mt-10">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <?php get_template_part('templates/content', 'cta'); ?>

    <!-- FAQs Section -->
    <section id="faq" class="md:py-20 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl sm:!text-5xl lg:!text-6xl font-bold text-primary font-axiformaregular mb-8 text-center">
                Frequently Asked Questions
            </h2>

            <div class="max-w-[1068px] mx-auto faq-wrapper divide-y divide-black/20 bg-white shadow-lg px-7 py-10">
                <!-- FAQ 1 -->
                <div class="pt-6">
                    <button class="w-full flex items-center justify-between text-left pb-6 faq-toggle"
                        aria-expanded="true">
                        <span class="text-xl font-medium faq-title text-hovLink">What is your return policy?</span>
                        <svg class="w-5 h-5 transition-transform duration-300 transform rotate-180 icon" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content border-t border-black/20 py-6">
                        <p class="text-black">Our return policy lasts 30 days. No questions asked.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="pt-6">
                    <button class="w-full flex items-center justify-between text-left pb-6 faq-toggle"
                        aria-expanded="false">
                        <span class="text-xl font-medium faq-title text-black">Do you offer international
                            shipping?</span>
                        <svg class="w-5 h-5 transition-transform duration-300 transform icon" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-content border-t border-black/20 py-6 hidden">
                        <p class="text-black">Yes, we ship globally. Shipping rates apply.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
    const faqToggles = document.querySelectorAll('.faq-toggle');

    faqToggles.forEach((button) => {
        button.addEventListener('click', () => {
            const isOpen = button.getAttribute('aria-expanded') === 'true';

            // Close all
            faqToggles.forEach((btn) => {
                btn.setAttribute('aria-expanded', 'false');
                btn.nextElementSibling.classList.add('hidden');
                btn.querySelector('.icon').classList.remove('rotate-180');
                btn.querySelector('.faq-title').classList.remove('text-hovLink');
                btn.querySelector('.faq-title').classList.add('text-black');
            });

            // Open clicked only if it was closed
            if (!isOpen) {
                button.setAttribute('aria-expanded', 'true');
                button.nextElementSibling.classList.remove('hidden');
                button.querySelector('.icon').classList.add('rotate-180');
                button.querySelector('.faq-title').classList.remove('text-black');
                button.querySelector('.faq-title').classList.add('text-hovLink');
            }
        });
    });
</script>
<?php get_footer(); ?>