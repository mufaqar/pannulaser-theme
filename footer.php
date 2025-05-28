<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tp_theme
 */

$navLinks = [
    [
        'name' => 'About',
        'link' => '/',
    ],
    [
        'name' => 'Partnerships',
        'link' => '/',
    ],

];

$Menu1 = [
    [
        'name' => 'What is LASIK Eye Surgery?',
        'link' => '/',
    ],
    [
        'name' => 'WaveFront Custom LASIK',
        'link' => '/',
    ],
    [
        'name' => 'PRK/LASEK/Laser Surface Treatment',
        'link' => '/',
    ],
    [
        'name' => 'Schedule A Free LASIK Consultation',
        'link' => '/',
    ],
    [
        'name' => 'LASIK Testimonials for Pannu',
        'link' => '/',
    ],
    [
        'name' => 'LASIK Self Eval Test',
        'link' => '/',
    ],

];

$Menu3 = [
    [
        'name' => 'Diabetic Eye Care & Treatment ',
        'link' => '#',
    ],
    [
        'name' => 'Glaucoma Treatment',
        'link' => '#',
    ],
    [
        'name' => 'Macular Degeneration',
        'link' => '#',
    ],
    [
        'name' => 'Pterygium Removal',
        'link' => '#',
    ],
    [
        'name' => 'Cornea Transplants',
        'link' => '#',
    ],
];

$Menu2 = [
    [
        'name' => 'Laser Vision Correction',
        'link' => '/',
    ],
    [
        'name' => 'Cataract Surgery & Lenses',
        'link' => '/',
    ],
    [
        'name' => 'Premium Intraocular Lens',
        'link' => '/',
    ],
    [
        'name' => 'Cosmetic Fillers',
        'link' => '/internet/va/new-kent/',
    ],
    [
        'name' => 'Dry Eye Treatment',
        'link' => '/internet/ga/atlanta/',
    ],
    [
        'name' => 'Eye Exams, Contacts & Glasses',
        'link' => '/internet/ne/omaha/',
    ],

]

    ?>

<footer class="w-full image-overlay bg-footercol ">
    <div class="px-4 container mx-auto">
        <!--Grid-->
        <div class=" grid grid-cols-1 md:grid-cols-5 sm:grid-cols-3 xl:grid-cols-5 gap-3 gap-y-8 md:gap-8 py-10">
            <div class="">
                <a href="<?php bloginfo('url'); ?>" class="flex  ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="" class='w-52'>

                </a>
                <div class='mt-10 flex flex-wrap  lg:justify-start gap-6 sm:gap-8'>
                    <a href="/" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f text-2xl text-white"></i>
                    </a>
                    <a href="/" aria-label="Twitter">
                        <i class="fa-brands fa-twitter text-2xl text-white"></i>
                    </a>
                    <a href="/" aria-label="YouTube">
                        <i class="fa-brands fa-youtube text-2xl text-white"></i>
                    </a>
                    <a href="/" aria-label="Instagram">
                        <i class="fa-brands fa-instagram text-2xl text-white"></i>
                    </a>
                </div>
            </div>
            <!--End Col-->
            <div class="lg:mx-auto text-left text-white">
                <h4 class="text-xl  font-[600] mb-7">LASIK Eye Surgery</h4>
                <ul class="text-sm transition-all duration-500">
                    <?php
                    foreach (array_slice($Menu1, 0, 7) as $provider) {
                        echo "<li class='mb-4'><a href='{$provider['link']}' class='text-white '>{$provider['name']}</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <!--End Col-->
            <div class="lg:mx-auto text-left text-white ">
                <h4 class="text-xl  font-[600] mb-7 ">Services</h4>
                <ul class="text-sm  transition-all duration-500">
                    <?php
                    foreach ($Menu2 as $provider) {
                        echo "<li class='mb-4'><a href='{$provider['link']}' class='text-white'>{$provider['name']}</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <!--End Col-->
            <div class="lg:mx-auto text-left text-white ">
                <h4 class="text-xl  font-[600] mb-7">Services</h4>
                <ul class="text-sm   transition-all duration-500">
                    <?php
                    foreach ($Menu3 as $provider) {
                        echo "<li class='mb-4'><a href='{$provider['link']}' class='text-white'>{$provider['name']}</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <!--End Col-->
            <div class="lg:mx-auto text-left  text-white">
                <h4 class="text-xl  font-[600] mb-7">Company</h4>
                <ul class="text-sm  transition-all duration-500">
                    <?php
                    foreach (array_slice($navLinks, 0, 11) as $otherpage) {
                        echo "<li class='mb-4'><a href='{$otherpage['link']}' class='text-white'>{$otherpage['name']}</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!--Grid-->
        <div class="py-7 border-t border-gray-700">
            <div class="flex items-center justify-center flex-col lg:justify-between lg:flex-row">
                <span class="text-sm text-white ">©<a href="<?php bloginfo('url'); ?>"> Copyright 2026,
                        designercrunch.net</span>
                <div class="flex mt-4 space-x-4 sm:justify-center lg:mt-0 text-white ">
                    <a href="/Sitemap" class='text-[14px]'>Sitemap</a>
                    <a href="/Terms & Conditions" class='text-[14px]'>- Terms & Conditions</a>
                    <a href="/Privacy Policy" class='text-[14px]'>- Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


<!-- jQuery and Slick JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

 <!-- custom js files  -->
<script src="<?php echo get_template_directory_uri(); ?>/js/slick-slider.js" type="text/javascript"></script>
</body>

</html>