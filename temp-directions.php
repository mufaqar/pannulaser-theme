<?php /*Template Name: Directions */ get_header(); ?>

<section class="pt-[100px] pb-[80px] space-y-10">
    <?php
    $args = array(
        'post_type' => 'directions',
        'posts_per_page' => -1, // Show all locations, or set a number
        'orderby' => 'title', // Order by title, date, menu_order, etc.
        'order' => 'ASC' // ASC or DESC
    );
    $locations_query = new WP_Query($args);

    if ($locations_query->have_posts()):
        while ($locations_query->have_posts()):
            $locations_query->the_post();
            $phone = get_post_meta($post->ID, "phone", true);
            $address = get_post_meta($post->ID, "address", true);
            $map_iframe = get_post_meta($post->ID, "map_iframe", true);
            $map_link = get_post_meta($post->ID, "map_link", true);
            ?>

    <div class="container mx-auto px-4">
        <div
            class="flex md:flex-row flex-col gap-8 items-center bg-[#3F574E] rounded-tl-[25px] rounded-bl-[75px] rounded-tr-[75px] rounded-br-[25px] md:rounded-tr-[75px] shadow-2xl md:pb-0 pb-10">
            <div class="md:w-2/5 w-full ">
                <div
                    class="w-full h-[400px] rounded-tl-[25px] md:rounded-bl-[75px] md:rounded-tr-none rounded-tr-[75px] overflow-hidden">
                    <iframe src="<?php echo $map_iframe ?>" width="100%" height="100%" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <div class="md:w-2/5 w-full space-y-4 md:px-0 px-4">
                <h2 class="text-2xl text-white sm:!text-3xl pb-3 font-[300] font-axiformaregular">
                    <a href="<?php the_permalink() ?>"> <?php the_title() ?></a>
                </h2>
                <div class="map_box group">
                    <span class="map_icon">
                        <i class="fa-regular fa-map"></i>
                    </span>
                    <span class="map_title">
                        <?php echo $address ?>
                    </span>
                </div>
                <div class="map_box group">
                    <span class="map_icon">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    <a href="tel:<?php echo $phone ?>" target="_blank" class="map_title">
                        <?php echo $phone ?>
                    </a>
                </div>
                <div class="map_box group ">
                    <span class="map_icon">
                        <i class="fa-solid fa-map-pin"></i>
                    </span>
                    <a href="<?php echo $map_link ?>" target="_blank" class="map_title">
                        Get Direction
                    </a>
                </div>
            </div>
            <div class="md:w-1/5 w-full px-4 space-y-4">
                <div class="bg-white p-5 rounded-lg shadow">
                    <div class="flex items-start gap-2.5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/google-badge.png"
                            alt="google-badge" width="32" />
                        <span class="text-black text-base">
                            Pannu Laser & Vision Institute- Davie
                        </span>
                    </div>
                    <p>
                        <span>
                            <i class="fa-solid fa-star text-yellow-500"></i>
                            <i class="fa-solid fa-star text-yellow-500"></i>
                            <i class="fa-solid fa-star text-yellow-500"></i>
                            <i class="fa-solid fa-star text-yellow-500"></i>
                            <i class="fa-solid fa-star-half-stroke text-yellow-500"></i>
                        </span>
                    </p>
                    <p>
                        <span class="font-bold text-hovLink">4.8</span> Stars - Based on 321 User Reviews
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
        endwhile;

        // Reset post data
        wp_reset_postdata();
    else:
        echo '<p>No locations found.</p>';
    endif;
    ?>
</section>

<?php get_footer(); ?>