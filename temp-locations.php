<?php /*Template Name: Location*/ get_header(); ?>




<?php
$args = array(
    'post_type' => 'directions',
    'posts_per_page' => -1, // Show all locations, or set a number
    'orderby' => 'title', // Order by title, date, menu_order, etc.
    'order' => 'ASC' // ASC or DESC
);

$locations_query = new WP_Query($args);

if ($locations_query->have_posts()) :
    while ($locations_query->have_posts()) : $locations_query->the_post();        
             $phone =  get_post_meta($post->ID, "phone", true);
               $address =  get_post_meta($post->ID, "address", true);
                 $map_iframe =  get_post_meta($post->ID, "map_ifram", true);
                   $map_link =  get_post_meta($post->ID, "map_link", true);
        ?>

<section class="pt-[100px] pb-[80px]">
    <div
        class="container mx-auto flex md:flex-row flex-col gap-8 items-center bg-[#3F574E] rounded-tl-[25px] rounded-bl-[75px]  rounded-br-[25px] rounded-tr-[75px] shadow-2xl">
        <div class="md:w-1/2 w-full ">
            <div class="w-full h-[400px] rounded-tl-[25px] rounded-bl-[75px] overflow-hidden">
                <iframe src="<?php echo $map_iframe ?>" width="100%" height="100%" style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <div class="md:w-1/2 w-full space-y-4 ">

            <h2 class="text-2xl text-white sm:!text-3xl pb-3 font-[300] font-axiformaregular">
                <?php the_title()?>
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
    </div>
</section>

<?php
    endwhile;
    
    // Reset post data
    wp_reset_postdata();
else :
    echo '<p>No locations found.</p>';
endif;
?>




<?php get_footer(); ?>