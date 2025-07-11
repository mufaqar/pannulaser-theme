<?php /*Template Name: Blog Page*/ get_header(); ?>
<main>
    <section class='pt-[106px] pb-[105px]'>
        <div class='container mx-auto px-4'>
            <div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 mt-8 items-center'>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4, // change as needed
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()):
                    while ($loop->have_posts()):
                        $loop->the_post(); ?>
                        <div
                            class="post_box relative bg-white shadow-lg rounded-lg transform translate-y-0 hover:translate-y-[-10px] transition-[.5s_ease-in-out] ">
                            <div class="img-holder rounded-lg relative">
                                <span class="absolute top-0 left-0 px-3.5 py-2 bg-primary text-white text-sm font-medium rounded-t-lg">
                                    <i class="fa-solid fa-calendar-days mr-2"></i>
                                    September 5, 2024
                                </span>
                                <?php
                                if (has_post_thumbnail()) {
                                    echo get_the_post_thumbnail(get_the_ID(), '', [
                                        'class' => 'rounded-lg w-full'
                                    ]);
                                } else {
                                    ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/cta.jpg" alt="Default Image"
                                        class="rounded-lg w-full" />
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="pt-8 p-7">
                                <h4 class="font-bold text-primary text-xl mb-4">
                                    <?php the_title() ?>
                                </h4>
                                <a href="<?php the_permalink(); ?>" class="font-bold text-hovLink text-lg">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    <?php endwhile;
                else:
                    echo '<p>No doctors found.</p>';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>