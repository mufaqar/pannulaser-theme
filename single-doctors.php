<?php
/**
 * The template for displaying all single CPT posts
 *
 * @package tp_theme
 */

get_header();

$post_id = get_the_ID();
// Custom fields
$type = get_post_meta($post_id, 'type', true);
?>
<main>
    <!-- Content Section -->
    <section class="md:py-20 py-16">
        <div class="container mx-auto px-4">
            <div class="flex md:flex-row flex-col gap-8 items-center">
                <div class="md:w-2/3 w-full max-w-none Post_Content">
                    <p>
                        <?php echo mb_substr(strip_tags(get_the_excerpt()), 0, 150) . '...'; ?>
                    </p>
                    <?php the_content(); ?>
                    <div class="flex md:flex-row flex-col gap-5 items-center mt-4">
                        <a href="<?php echo site_url('/contact'); ?>"
                            class="text-sm font-semibold text-white bg-primary hover:bg-secondry py-3.5 px-7 rounded-md transform transition-all duration-300 hover:scale-95">
                            Book an appointment
                        </a>
                        <a href="<?php echo site_url('/services'); ?>"
                            class="text-sm font-semibold text-white bg-secondry hover:bg-primary py-3.5 px-7 rounded-md transform transition-all duration-300 hover:scale-95">
                            Learn more about my services
                        </a>
                    </div>
                </div>
                <div class="md:w-1/3 w-full">
                    <div class="relative bg-white shadow-lg">
                        <div class="img-holder relative">
                            <?php
                            if (has_post_thumbnail()) {
                                echo get_the_post_thumbnail(get_the_ID(), '', [
                                    'class' => 'size-full'
                                ]);
                            } else {
                                ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Dr-Mutyala.png"
                                    alt="Default Image" class="size-full" />
                                <?php
                            }
                            ?>
                        </div>
                        <div class="flex flex-col gap-4 items-center justify-between px-7 py-5 bg-primary">
                            <div>
                                <h3 class="font-normal text-white text-lg text-center">
                                    <?php the_title() ?>
                                </h3>
                                <h4 class="font-normal text-hovLink text-sm text-center">
                                    Specialist
                                </h4>
                            </div>
                            <ul class="flex gap-2 items-center justify-center ">
                                <li>
                                    <a href="#"
                                        class="text-primary w-8 h-8 rounded-full bg-gray-200 hover:scale-105 transform transition-all duration-300 flex justify-center items-center ">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="text-primary w-8 h-8 rounded-full bg-gray-200 hover:scale-105 transform transition-all duration-300 flex justify-center items-center ">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="md:py-20 py-16 bg-gray-100">
        <div class="container mx-auto px-4  ">
            <h2 class="text-3xl sm:!text-5xl lg:!text-6xl font-bold text-primary font-axiformaregular mb-8">
                Testimonial about <?php the_title() ?></h2>
        </div>
        <div class="container mx-auto px-4 grid md:grid-cols-3 grid-cols-1 gap-6 ">
            <?php
            $args = array(
                'post_type' => 'testimonials',
                'posts_per_page' => -1,
                'doc_types' => $type,
                'post_status' => 'publish',
            );

            $testimonials_query = new WP_Query($args);

            if ($testimonials_query->have_posts()): ?>

                <?php while ($testimonials_query->have_posts()):
                    $testimonials_query->the_post(); ?>
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
                                <?php the_content() ?>
                            </p>
                            <div class="flex items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/review-pic.png" alt="reviewer-pic"
                                    width="70" />
                                <h4 class="text-black text-base"><?php the_title() ?></h4>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p class="col-span-full">No testimonials found.</p>
            <?php endif; ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>