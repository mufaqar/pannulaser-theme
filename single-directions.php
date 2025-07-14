<?php
/**
 * The template for displaying all single CPT posts
 *
 * @package tp_theme
 */

get_header();

$post_id = get_the_ID();

// Meta and featured image
$meta_description = get_post_meta($post_id, '_yoast_wpseo_metadesc', true);
$thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
$thumbnail_id = get_post_thumbnail_id();
$caption = wp_get_attachment_caption($thumbnail_id);

// Custom fields
$address = get_post_meta($post_id, 'address', true);
$phone = get_post_meta($post_id, 'phone', true);
$map_link = get_post_meta($post_id, 'map_link', true);
// $map_image = get_post_meta($post_id, 'map_image', true);

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'order' => 'DESC'
);
$query = new WP_Query($args);
?>

<main>
    <!-- Content Section -->
    <section class="md:py-20 py-16">
        <div class="container mx-auto px-4">
            <div class="flex md:flex-row flex-col gap-8 items-center">
                <div class="md:w-1/3 w-full">
                    <?php
                    $map_image = get_post_meta($post->ID, 'map_image', true);
                    if ($map_image) {
                        echo wp_get_attachment_image($map_image, '', false, ['class' => '']);
                    } else {
                        ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/davie_map.png" alt="davie_map"
                            width="430" height="430" />
                        <?php
                    }
                    ?>
                </div>
                <div class="md:w-2/3 w-full space-y-4 md:px-0 px-4">
                    <?php if ($address): ?>
                        <div class="flex gap-2.5 ">
                            <span class="text-2xl"><i class="fa-regular fa-map"></i></span>
                            <span class="cursor-pointer text-xl inline-flex"><?php echo esc_html($address); ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if ($phone): ?>
                        <div class="flex gap-2.5 ">
                            <span class="text-2xl"><i class="fa-solid fa-phone"></i></span>
                            <a href="tel:<?php echo esc_attr($phone); ?>" class="cursor-pointer text-xl inline-flex">
                                <?php echo esc_html($phone); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if ($map_link): ?>
                        <div class="gap-2.5 bg-secondry hover:bg-primary text-white p-2 px-4 inline-flex rounded-sm">
                            <span class=""><i class="fa-solid fa-map-pin"></i></span>
                            <a href="<?php echo esc_url($map_link); ?>" target="_blank" class="cursor-pointer text-xl ">
                                Click Here For Google Maps
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="direction_Content prose max-w-none mt-10">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="md:py-20 py-16 bg-gray-100">
        <div class="container mx-auto px-4 grid md:grid-cols-3 grid-cols-1 gap-6 ">
            <div>
                <div class="bg-white px-5 py-9 rounded-lg shadow-md">
                    <div class="flex items-center justify-between gap-3">
                        <div class="flex items-center gap-2 ">
                            <p>
                                <span>
                                    <i class="fa-solid fa-star text-yellow-500"></i>
                                    <i class="fa-solid fa-star text-yellow-500"></i>
                                    <i class="fa-solid fa-star text-yellow-500"></i>
                                    <i class="fa-solid fa-star text-yellow-500"></i>
                                    <i class="fa-solid fa-star-half-stroke text-yellow-500"></i>
                                </span>
                            </p>
                            <p class="text-xs text-gray-500">
                                Feb 20, 2025
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/branding-google.png"
                            alt="google-badge" width="100" />
                    </div>
                    <p class="text-sm font-normal text-gray-500 mt-2">
                        <span class="font-bold text-hovLink">4.8</span> Stars - Based on 321 User Reviews
                    </p>
                    <p class="text-base font-normal text-black max-h-[160px] overflow-y-scroll mt-6 mb-10">
                        Great experience, the staff is very nice and welcoming since the first time I called to make an
                        appointment.
                        Dr. Don (optometrist) and Dr. Mutyala (surgeon) are great, they took their time to explain the
                        procedure in depth and what we could expect after.
                        I started to see positive results as soon as hours after the procedure.
                        It is so good to be able to watch TV and drive without prescription glasses again.
                        Only regret is not having the procedure done years ago.
                        I recommended this office 1000%, I couldn’t have found a better team to take care of my eyes.
                    </p>
                    <div class="flex items-center gap-3">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/review-pic.png" alt="reviewer-pic"
                            width="70" />
                        <h4 class="text-black text-base">Olga Vizcaino</h4>
                    </div>
                </div>
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


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const copyButton = document.getElementById('copy-to-clip-board');
        copyButton.addEventListener('click', function () {
            const clipboardText = this.getAttribute('clipbord-attr');
            if (clipboardText) {
                // Create a temporary textarea to copy the text
                const textarea = document.createElement('textarea');
                textarea.value = clipboardText;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);
                // Optional: Notify the user
                alert('Link copied to clipboard!');
            }
        });
    });

</script>
<?php get_footer(); ?>