<?php /*Template Name: Contact Us*/ get_header(); ?>

<section class="pt-[100px] pb-[80px]">
    <div class="container mx-auto px-4 flex md:flex-row flex-col gap-8">
        <div class="md:w-1/2 w-full">
            <h6 class="text-lg pb-5 font-normal">
                Get In Touch
            </h6>
            <h2 class="text-3xl sm:!text-5xl lg:!text-6xl pb-3 font-[300] font-axiformaregular">
                Contact Details
            </h2>
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                <div class="contact_box border border-[#EFEFEF] hover:border-primary rounded-2xl px-6 py-9 group">
                    <span
                        class="map_icon icon flex items-center justify-center text-2xl text-primary group-hover:text-white group-hover:bg-primary transition-all h-[70px] w-[70px] rounded-full bg-transparent border border-primary mb-5 mx-auto">
                        <i class="fa-regular fa-map"></i>
                    </span>
                    <h3 class="text-2xl font-normal text-center mb-3">
                        Address
                    </h3>
                    <p class="text-base font-normal text-black text-center">
                        0650 West State Road 84, Suite 100 Davie, FL 33324
                    </p>
                </div>
                <div class="contact_box border border-[#EFEFEF] hover:border-primary rounded-2xl px-6 py-9 group">
                    <span
                        class="map_icon icon flex items-center justify-center text-2xl text-primary group-hover:text-white group-hover:bg-primary transition-all h-[70px] w-[70px] rounded-full bg-transparent border border-primary mb-5 mx-auto">
                        <i class="fa-solid fa-headphones"></i>
                    </span>
                    <h3 class="text-2xl font-normal text-center mb-3">
                        24/7 Support
                    </h3>
                    <p class="text-base font-normal text-black text-center">
                        4821 Ridge Top Cir, Anchorage Street, Alaska 99508, USA.
                    </p>
                </div>
                <div class="contact_box border border-[#EFEFEF] hover:border-primary rounded-2xl px-6 py-9 group md:col-span-2 flex md:flex-row flex-col gap-6 items-center justify-start">
                    <span
                        class="map_icon icon flex items-center justify-center text-2xl text-primary group-hover:text-white group-hover:bg-primary transition-all h-[70px] w-[70px] rounded-full bg-transparent border border-primary">
                        <i class="fa-regular fa-clock"></i>
                    </span>
                    <div>
                        <h3 class="text-2xl font-normal mb-3">
                            Working Hours
                        </h3>
                        <a href="tel:03244644208" target="_blank" class="text-base font-normal text-black">
                            0324 4644208
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:w-1/2 w-full">
            <form>

            </form>
        </div>
    </div>
</section>



<?php get_footer(); ?>