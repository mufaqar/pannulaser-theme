<?php /*Template Name: FrontPage*/ get_header(); ?>


<section class="bg-bgcolor py-32">
    <div class="container mx-auto px-4">
        <div class="flex md:flex-row flex-col items-center md:gap-16 gap-10">
            <!-- Left Text Block -->
            <div class="md:w-1/2 w-full">
                <h2 class="text-3xl sm:text-5xl lg:text-6xl font-bold pb-3 text-Pan_black">Meet Our Surgeon</h2>
                <p class='text-base md:text-xl text-Pan_black mt-5'>
                    PANNU LASER & VISION INSTITUTE is proud to have DR. SRINI
                    MUTYALA as our Medical Director and LASIK Surgeon.
                </p>
                <p class="py-3 text-base md:text-xl text-Pan_black mt-5">

                    DR. M is a LASIK eye surgery specialist in Southeast Florida
                    and has performed over 100,000 laser vision correction procedures. He has been operating in Broward
                    County for the past 20 years.
                </p>
                <p class='text-base md:text-xl text-Pan_black mt-5'>
                    DR. SRINI MUTYALA studied ophthalmology at the world-renowned
                    Mayo Clinic. After completing his training at Mayo Clinic, DR. M was hand-selected for a prestigious
                    advanced training program to further his specialization in LASIK, laser and cornea surgery. This
                    fellowship was with the surgeon who performed the first laser vision correction surgery in the
                    world.
                </p>

                <div class="mt-8 text-[#3F574E]">
                    <a href="/"
                        class="text-md font-semibold hover:underline flex w-fit gap-2 items-center transform hover:scale-110 duration-150 transition-all ">
                        MORE DETAILS
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrowRight.svg" alt="" />
                    </a>
                </div>
            </div>
            <!-- Right Side: Image + Cards -->
            <div class="md:w-1/2 w-full grid grid-cols-1 sm:grid-cols-2 gap-6 items-center">
                <div class="">
                    <!-- Surgeon Image (full width of first column) -->
                    <div
                        class="shadow-md rounded-tl-[100px] rounded-tr-md rounded-br-[100px] rounded-bl-md transform hover:-translate-y-2.5 duration-150 transition-all">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/srini.png" alt=""
                            class="rounded-tl-[100px] rounded-tr-md rounded-br-[100px] rounded-bl-md" height="323" />
                    </div>
                </div>
                <div class="space-y-3 flex flex-col">
                    <!-- Card 1 -->
                    <div class="about_card rounded-tl-[100px] rounded-tr-md rounded-br-[100px] rounded-bl-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience.png" alt=""
                            class='w-[93px] h-[107px] object-contain' />
                        <h3 class="font-bold text-xl text-secondry py-2">Experienced Doctor</h3>
                        <p class="text-Pan_black text-base">Our highly skilled doctors ensure safe and effective
                            treatments with years of expertise.
                        </p>
                    </div>
                    <!-- Card 2 -->
                    <div class="about_card rounded-tr-[100px] rounded-tl-md rounded-bl-[100px] rounded-br-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision.svg" alt=""
                            class='w-[93px] h-[107px] object-contain' />
                        <h3 class="font-bold text-xl text-secondry py-2">100,000 Laser Vision</h3>
                        <p class="text-Pan_black text-base">
                            Correction procedures. He has been operating in Broward County for the past 20 years.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Services -->
<section class="bg-[#3F574E] pt-[100px] pb-[80px]">
    <div class="container mx-auto px-4">
        <div class="md:w-2/3 w-full mx-auto text-white text-center mb-10">
            <p class="text-2xl pb-7 font-normal">Transparent price</p>
            <h2 class="text-3xl sm:!text-5xl lg:!text-6xl pb-3 font-[300] font-axiformaregular">WE PROVIDE BEST <span
                    class="font-bold font-axiformabold">SERVICES FOR PATIENT</span>
            </h2>
        </div>
        <!-- Responsive Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 items-center">
            <!-- Reusable Card -->
            <?php
            $args = array(
                'post_type' => 'services',
                'posts_per_page' => 8, // change as needed
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post(); ?>
                    <div class="service_card transform hover:-translate-y-5 duration-150 transition-all">
                        <?php
                        $services_icon = get_post_meta($post->ID, 'services_icon', true);
                        if ($services_icon) {
                            echo wp_get_attachment_image($services_icon, 'medium', false, ['class' => 'h-[60px] w-[60px]']);
                        }
                        ?>
                        <div class="font-bold text-xl line-clamp-1 mt-5">
                            <?php the_title() ?>
                        </div>
                        <div class='text-[15px] line-clamp-3 mt-2'>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endwhile;
            else:
                echo '<p>No doctors found.</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="mt-8 text-hovLink text-white  ">
            <a href="/"
                class="text-md font-semibold hover:underline flex w-fit gap-2 items-center  mx-auto justify-center transform hover:scale-110 duration-150 transition-all">
                VIEW ALL
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrowRight.svg" alt="" />
            </a>
        </div>
    </div>
</section>


<!-- See What Our Patients Are Saying -->
<section class="flex flex-col md:flex-row ">
    <!-- Image Side -->
    <div class="w-full md:w-1/2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dentist.png" alt="Dentist"
            class="w-full h-full object-cover">
    </div>
    <!-- Testimonials Side -->
    <div class='container mx-auto px-4'>
        <div class="w-full  px-6 bg-white container mx-auto md:py-16  py-12">
            <h2 class="text-3xl sm:text-5xl lg:text-6xl font-bold  pb-6">
                See What Our<br /> Patients Are Saying
            </h2>

            <!-- Testimonial Slider -->
            <div class="testimonial-slider w-full md:-ml-24">
                <?php
                $args = array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => -1,
                );
                $loop = new WP_Query($args);

                if ($loop->have_posts()):
                    while ($loop->have_posts()):
                        $loop->the_post(); ?>
                        <div class="p-4 pt-8 h-full transform hover:-translate-y-3 duration-150 transition-all">
                            <div
                                class="bg-white p-6 rounded-tr-[30px] rounded-bl-[30px] shadow-[0_0_15px_0_rgba(0,40,255,0.15)] flex flex-col justify-between h-[388px]">

                                <div class="text-Pan_black text-base italic pt-3 line-clamp-9">
                                    <?php the_content(); ?>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-Pan_black text-lg pt-6">
                                        <?php the_title(); ?>
                                    </h4>
                                    <h4 class="font-semibold text-secondry text-lg">
                                        <?php echo get_field('position'); ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                else:
                    echo '<p>No testimonials found.</p>';
                endif;

                wp_reset_postdata();
                ?>
            </div>

        </div>
    </div>
</section>



<!-- See the Difference -->
<section class='bg-[#3F574E] pt-[131px] pb-[108px]'>
    <div class='container mx-auto px-4'>
        <h2 class="text-3xl sm:!text-5xl lg:!text-6xl pb-3 text-white text-center">See the Difference</h2>
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-8 text-white items-center text-center justify-center h-[300px]">
            <!-- card 1 -->
            <div class="see_card md:self-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Excellence.svg" alt=""
                    class='w-[70px] h-[82px] ' />
                <h3 class="font-bold text-secondry text-2xl pt-6  py-2">Excellence</h3>
                <p class='text-2xl text-Pan_black line-clamp-1'>in Eyecare since 1980</p>
            </div>
            <!-- card 2 -->
            <div class="see_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Award-winning.svg" alt=""
                    class='w-[70px] h-[70px]'>
                <h3 class="font-bold text-secondry text-2xl py-2 pt-6">Award winning</h3>
                <p class='text-2xl text-Pan_black line-clamp-1'>Eye specialists</p>
            </div>
            <!-- card 3 -->
            <div class="see_card md:self-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Empathetic.svg" alt=""
                    class='w-[70px] h-[70px]'>
                <h3 class="font-bold text-secondry text-2xl py-2 pt-6">Empathetic</h3>
                <p class='text-2xl text-Pan_black line-clamp-1'>Personalized patient care</p>
            </div>
            <!-- card 4 -->
            <div class="see_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision.svg" alt=""
                    class='w-[70px] h-[90px]'>
                <h3 class="font-bold text-secondry text-2xl py-2 pt-6">Advanced care</h3>
                <p class='text-2xl text-Pan_black line-clamp-1'>Personalized patient care</p>
            </div>
        </div>
    </div>
</section>


<!--  MEET OUR TEAM  -->

<section class='bg-bgcolor pt-[106px] pb-[105px]'>
    <div class='container mx-auto px-4'>
        <div>
            <div class=" w-full mx-auto flex md:flex-row flex-col gap-5 justify-between items-center">
                <h2 class="text-3xl sm:!text-5xl lg:!text-6xl pb-3 font-bold text-primary font-axiformaregular">
                    MEET OUR TEAM
                </h2>
                <p class="text-base font-normal text-primary">
                    THE MOST QUALIFIED, SKILLFUL& PROFESSIONAL DOCTORS.
                </p>
            </div>
            <div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 mt-8 items-center'>
                <?php
                $args = array(
                    'post_type' => 'doctors',
                    'posts_per_page' => 4, // change as needed
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()):
                    while ($loop->have_posts()):
                        $loop->the_post(); ?>
                        <div class="team_box relative bg-white shadow-lg rounded-lg p-7 ">
                            <div class="img-holder rounded-lg relative">
                                <?php
                                if (has_post_thumbnail()) {
                                    echo get_the_post_thumbnail(get_the_ID(), '', [
                                        'class' => 'rounded-lg size-full'
                                    ]);
                                } else {
                                    ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Dr-Mutyala.png" alt="Default Image"
                                        class="rounded-lg size-full" />
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="flex flex-row items-center justify-between pt-8">
                                <div>
                                    <a href="<?php the_permalink(); ?>" class="font-bold text-primary text-xl cursor-pointer">
                                        <?php the_title() ?>
                                    </a>
                                    <h4 class="font-bold text-hovLink text-lg">
                                        Specialist
                                    </h4>
                                </div>
                                <ul class="flex gap-2 items-center">
                                    <li>
                                        <a href="#"
                                            class="text-primary w-10 h-10 rounded-full bg-gray-200  flex justify-center items-center ">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-primary w-10 h-10 rounded-full bg-gray-200  flex justify-center items-center ">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
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
    </div>
</section>

<!-- Locate a Centre -->
<section class='bg-[#3F574E] pt-[100px] pb-[113px]'>
    <div class='container mx-auto px-4'>
        <h2 class="text-3xl sm:!text-5xl lg:!text-6xl pb-3 text-white text-center">Locate a Centre</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2  text-white items-center">


            <?php
            $args = array(
                'post_type' => 'directions',
                'posts_per_page' => 4, // Show all locations, or set a number
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

                    <!-- card 1 -->
                    <div class="flex flex-col p-3">
                        <!-- Image with text overlay -->
                        <div class="relative">
                            <?php
                            if (has_post_thumbnail()) {
                                echo get_the_post_thumbnail(get_the_ID(), 'full', [
                                    'class' => 'w-full h-auto'
                                ]);
                            } else {
                                ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Davie-Office.png" alt=""
                                    class="w-full h-auto">
                                <?php
                            }
                            ?>
                            <!-- Overlay text on top-left -->
                            <div
                                class="absolute top-3 left-3 bg-secondry text-white text-sm px-3 py-1 rounded-tl-md rounded-br-md shadow-lg">
                                GET DIRECTIOS
                            </div>
                        </div>
                        <!-- Content below image -->
                        <h3 class="font-bold text-white text-2xl mt-6"><?php the_title() ?></h3>
                        <div class='flex gap-2 py-3'>
                            <i class="fa-solid fa-location-dot"></i>
                            <p class='text-[14px] text-white'> <?php echo $address ?></p>
                        </div>
                        <div class='flex gap-2'>
                            <i class="fa-solid fa-phone-volume"></i>
                            <a href="tel:<?php echo $phone ?>" target="_blank" class='text-[14px] text-white'><?php echo $phone ?></a>
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





        </div>
    </div>
</section>


<!-- With Our Doctor OR Call -->
<section class='bg-secondry py-10'>
    <div class='container mx-auto px-4'>
        <div class='flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8'>
            <!-- Left text content -->
            <div class='lg:w-[75%] '>
                <p class='text-2xl md:text-[30px] lg:text-[36px] text-white font-normal'>
                    If you Have Any Questions Schedule an Appointment
                </p>
                <h2 class='!text-[32px] md:!text-[48px] lg:!text-[62px] font-bold text-white'>
                    With Our Doctor OR Call
                </h2>
            </div>
            <!-- Right buttons -->
            <div class='flex flex-col gap-4 items-start lg:items-end mx-auto'>
                <a href="tel:954-484-0700"
                    class='flex  gap-2 bg-primary py-4 px-8 items-center rounded-tl-2xl rounded-br-2xl'>
                    <i class="fa-solid fa-phone-volume text-white text-xl"></i>
                    <p class='text-[18px] md:text-xl text-white'>954-484-0700</p>
                </a>
                <a href="#"
                    class='bg-primary text-white py-4 px-8 items-center rounded-tl-2xl rounded-br-2xl font-semibold'>
                    Make an Appointment
                </a>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>