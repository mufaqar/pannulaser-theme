<?php /*Template Name: FrontPage*/ get_header(); ?>

<!--Meet-->
<section class="bg-bgcolor py-20">
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

                <div class="mt-8 text-hovLink  ">
                    <a href="/" class="text-md font-semibold hover:underline flex w-fit gap-2 items-center ">
                        MORE DETAILS
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrowRight.svg" alt="" />
                    </a>
                </div>
            </div>
            <!-- Right Side: Image + Cards -->
            <div class="md:w-1/2 w-full grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="space-y-3 flex flex-col sm:pt-6">
                    <!-- Surgeon Image (full width of first column) -->
                    <div class="h-[323px] items-center justify-center shadow-md rounded-md">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/srini.png" alt=""
                            class="w-full h-full object-cover rounded-md " />
                    </div>
                    <!-- Card 1 -->
                    <div class="about_card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/transparent.png" alt=""
                            class='w-[93px] h-[107px] object-contain' />
                        <h3 class="font-bold text-xl text-secondry py-2">Transparent Price</h3>
                        <p class="text-Pan_black text-base">Enjoy competitive and clear pricing with no hidden fees.</p>
                    </div>
                </div>
                <div class="space-y-3 flex flex-col">
                    <!-- Card 2 -->
                    <div class="about_card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/experience.png" alt=""
                            class='w-[93px] h-[107px] object-contain' />
                        <h3 class="font-bold text-xl text-secondry py-2">Experienced Doctor</h3>
                        <p class="text-Pan_black text-base">Our highly skilled doctors ensure safe and effective
                            treatments with years of expertise.</p>
                    </div>
                    <!-- Card 3 -->
                    <div class="about_card ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision.png" alt=""
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
<section class="bg-primary py-14">
    <div class="container mx-auto px-4">
        <div class="md:max-w-[60%] w-full mx-auto text-white text-center mb-10">
            <p class="text-2xl pb-7">Transparent price</p>
            <h2 class="text-3xl sm:!text-5xl lg:!text-6xl pb-3 font-normal font-axiformaregular">WE PROVIDE BEST <span
                    class="font-bold font-axiformabold">SERVICES FOR
                    PATIENT</span></h2>
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
                    <div class="service_card">
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
        <div class="mt-8 text-hovLink text-white ">
            <a href="/services"
                class="text-md font-semibold hover:underline flex w-fit gap-2 items-center  mx-auto justify-center ">
                VIEW ALL
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrowRight.svg" alt="" />
            </a>
        </div>
    </div>
</section>


<!-- See What Our Patients Are Saying -->
<section class="flex flex-col md:flex-row ">
    <!-- Image Side -->
    <div class="w-full md:w-1/3">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dentist.png" alt="Dentist"
            class="w-full h-full object-cover">
    </div>
    <!-- Testimonials Side -->
    <div class="w-full md:w-2/3  px-6 bg-white container mx-auto md:py-16 md:px-10 py-12">
        <h2 class="text-3xl sm:text-5xl lg:text-6xl font-bold  pb-6">
            See What Our<br /> Patients Are Saying
        </h2>

        <!-- Testimonial Slider -->
        <div class="testimonial-slider w-full md:-ml-20">
            <?php
            $args = array(
                'post_type' => 'testimonials',
                'posts_per_page' => -1,
            );
            $loop = new WP_Query($args);

            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post(); ?>
                    <div class="p-4 h-full">
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
</section>



<!-- See the Difference -->

<section class='bg-primary py-14'>
    <div class='container mx-auto px-4'>
        <h2 class="text-3xl sm:!text-5xl lg:!text-6xl pb-3 text-white text-center">See the Difference</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-8 text-white items-center">
            <!-- card 1 -->
            <div class="see_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Excellence.png" alt="" />
                <h3 class="font-bold text-secondry text-2xl py-2">Excellence</h3>
                <p class='text-2xl text-Pan_black'>in Eyecare since 1980</p>
            </div>
            <!-- card 2 -->
            <div class="see_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Award-winning.png" alt=""
                    class='w-[70px] h-[82px]'>
                <h3 class="font-bold text-secondry text-2xl py-2">Award winning</h3>
                <p class='text-2xl text-Pan_black'>Eye specialists</p>
            </div>
            <!-- card 3 -->
            <div class="see_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Empathetic.png" alt=""
                    class='w-[70px] h-[82px]'>
                <h3 class="font-bold text-secondry text-2xl py-2">Empathetic</h3>
                <p class='text-2xl text-Pan_black'>Personalized patient care</p>
            </div>
            <!-- card 4 -->
            <div class="see_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Advanced-care.png" alt=""
                    class='w-[70px] h-[82px]'>
                <h3 class="font-bold text-secondry text-2xl py-2">Advanced care</h3>
                <p class='text-2xl text-Pan_black'>Personalized patient care</p>
            </div>
        </div>
    </div>
</section>


<!--  MEET OUR TEAM  -->

<section class='bg-bgcolor py-14'>
    <div class='container mx-auto px-4'>
        <div>
            <div class=" w-full mx-auto text-center">
                <p class="text-2xl pb-3 text-[#27304B] font-axiformaregular">MEET OUR TEAM</p>

                <h2 class="text-3xl sm:!text-5xl lg:!text-6xl pb-3 text-primary font-axiformaregular">THE MOST
                    QUALIFIED,<br><span class="font-bold font-axiformabold"> SKILLFUL& PROFESSIONAL DOCTORS.</span></h2>
            </div>
            <div class='grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 mt-8 items-center'>
                <?php
                $args = array(
                    'post_type' => 'doctors',
                    'posts_per_page' => 4, // change as needed
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()):
                    while ($loop->have_posts()):
                        $loop->the_post(); ?>
                        <div class="bg-white text-center flex flex-col items-center justify-center shadow-lg rounded-md">
                            <?php
                            if (has_post_thumbnail()) {
                                echo '<div style="width:100%; height:350px;">' . get_the_post_thumbnail(get_the_ID(), 'full', ['class' => 'object-cover'], ['style' => 'width:100%; height:350px;']) . '</div>';
                            }
                            ?>
                            <div class='p-4 sm:px-6'>
                                <div class="font-bold text-Pan_black text-2xl py-2">
                                    <?php the_title() ?>
                                </div>
                                <div class='text-[14px] text-Pan_black line-clamp-3'>
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="mt-8 text-hovLink text-center flex items-center mx-auto justify-center ">
                                    <a href="/" class="read-more">MORE
                                        DETAILS <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/arrowRight.svg"
                                            alt="icon" class='w-4'></a>
                                </div>
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
<section class='bg-primary py-14'>
    <div class='container mx-auto px-4'>
        <h2 class="text-3xl sm:!text-5xl lg:!text-6xl pb-3 text-white text-center">Locate a Centre</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2  text-white items-center">
            <!-- card 1 -->
            <div class="relative flex flex-col p-3">
                <!-- Image with text overlay -->
                <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Davie-Office.png" alt=""
                        class="w-full h-auto">
                    <!-- Overlay text on top-left -->
                    <div
                        class="absolute top-3 left-3 bg-secondry text-white text-sm px-3 py-1 rounded-tl-md rounded-br-md shadow-lg">
                        GET DIRECTIOS
                    </div>
                </div>
                <!-- Content below image -->
                <h3 class="font-bold text-white text-2xl mt-6">Davie Office</h3>
                <div class='flex gap-2 py-3'>
                    <i class="fa-solid fa-location-dot"></i>
                    <p class='text-[14px] text-white'>10650 West State Road 84, Suite 100 Davie, FL 33324</p>
                </div>
                <div class='flex gap-2'>
                    <i class="fa-solid fa-phone-volume"></i>
                    <p class='text-[14px] text-white'>954-496-9151</p>
                </div>
            </div>
            <!-- card 2 -->
            <div class=" flex flex-col  p-3 ">
                <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Weston-Office.png" alt=""
                        class="w-full h-auto">
                    <!-- Overlay text on top-left -->
                    <div
                        class="absolute top-3 left-3 bg-secondry text-white text-sm px-3 py-1 rounded-tl-md rounded-br-md shadow-lg">
                        GET DIRECTIOS
                    </div>
                </div>
                <h3 class="font-bold text-white text-2xl mt-6">Weston Office</h3>
                <div class='flex gap-2 py-3'>
                    <i class="fa-solid fa-location-dot"></i>
                    <p class='text-[14px] text-white'>2625 Executive Park Drive, Suite 4 Weston, Florida 33331</p>
                </div>
                <div class='flex gap-2 '>
                    <i class="fa-solid fa-phone-volume"></i>
                    <p class='text-[14px] text-white'>954-659-9051</p>
                </div>
            </div>
            <!-- card 3 -->
            <div class=" flex flex-col  p-3 ">
                <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Fort-Lauderdale-Office.png"
                        alt="" class="w-full h-auto">
                    <!-- Overlay text on top-left -->
                    <div
                        class="absolute top-3 left-3 bg-secondry text-white text-sm px-3 py-1 rounded-tl-md rounded-br-md shadow-lg">
                        GET DIRECTIOS
                    </div>
                </div>
                <h3 class="font-bold text-white text-2xl mt-6">Fort Lauderdale Office</h3>
                <div class='flex gap-2 py-3'>
                    <i class="fa-solid fa-location-dot"></i>
                    <p class='text-[14px] text-white'>4300 W Oakland Park Boulevard Lauderdale Lakes, Florida 33313</p>
                </div>
                <div class='flex gap-2 '>
                    <i class="fa-solid fa-phone-volume"></i>
                    <p class='text-[14px] text-white'>954-484-0700</p>
                </div>
            </div>
            <!-- card 4 -->
            <div class=" flex flex-col  p-3 ">
                <div class="relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Davie-Office.png" alt=""
                        class="w-full h-auto">
                    <!-- Overlay text on top-left -->
                    <div
                        class="absolute top-3 left-3 bg-secondry text-white text-sm px-3 py-1 rounded-tl-md rounded-br-md shadow-lg">
                        GET DIRECTIOS
                    </div>
                </div>
                <h3 class="font-bold text-white text-2xl mt-6">Olga Vizcaino</h3>
                <div class='flex gap-2 py-3'>
                    <i class="fa-solid fa-location-dot"></i>
                    <p class='text-[14px] text-white'>10650 West State Road 84, Suite 100 Davie, FL 33324</p>
                </div>
                <div class='flex gap-2 '>
                    <i class="fa-solid fa-phone-volume"></i>
                    <p class='text-[14px] text-white'>954-496-9151</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- With Our Doctor OR Call -->
<section class='bg-secondry py-10'>
    <div class='container mx-auto px-4'>
        <div class='flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8'>
            <!-- Left text content -->
            <div class='lg:w-[75%]'>
                <p class='text-2xl md:text-[30px] lg:text-[36px] text-white font-normal'>
                    If you Have Any Questions Schedule an Appointment
                </p>
                <h2 class='!text-[32px] md:!text-[48px] lg:!text-[62px] font-bold text-white'>
                    With Our Doctor OR Call
                </h2>
            </div>
            <!-- Right buttons -->
            <div class='flex flex-col gap-4 items-start lg:items-end mx-auto'>
                <a href="tel:03244644208"
                    class='flex  gap-2 bg-primary py-4 px-8 items-center rounded-tl-2xl rounded-br-2xl'>
                    <i class="fa-solid fa-phone-volume text-white text-xl"></i>
                    <p class='text-[18px] md:text-xl text-white'>0324 4644208</p>
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