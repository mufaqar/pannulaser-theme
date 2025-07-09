<?php /*Template Name: Contact Us*/ get_header(); ?>

<section class="pt-[100px] pb-[80px]">
    <div class="container mx-auto px-4 flex md:flex-row flex-col gap-8">
        <div class="md:w-1/2 w-full">
            <h6 class="text-lg pb-5 font-normal">
                Get In Touch
            </h6>
            <h2 class="text-3xl sm:!text-3xl pb-3 font-[300] font-axiformaregular">
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
                <div
                    class="contact_box border border-[#EFEFEF] hover:border-primary rounded-2xl px-6 py-9 group text-center">
                    <span
                        class="map_icon icon flex items-center justify-center text-2xl text-primary group-hover:text-white group-hover:bg-primary transition-all h-[70px] w-[70px] rounded-full bg-transparent border border-primary mb-5 mx-auto">
                        <i class="fa-solid fa-headphones"></i>
                    </span>
                    <h3 class="text-2xl font-normal text-center mb-3">
                        24/7 Support
                    </h3>
                    <a href="tel:03244644208" target="_blank" class="text-base font-normal text-black ">
                        0324 4644208
                    </a>
                </div>
                <div
                    class="contact_box border border-[#EFEFEF] hover:border-primary rounded-2xl px-6 py-9 group md:col-span-2 flex md:flex-row flex-col gap-6 items-center justify-start">
                    <span
                        class="map_icon icon flex items-center justify-center text-2xl text-primary group-hover:text-white group-hover:bg-primary transition-all h-[70px] w-[70px] rounded-full bg-transparent border border-primary">
                        <i class="fa-regular fa-clock"></i>
                    </span>
                    <div>
                        <h3 class="text-2xl font-normal mb-3">
                            Working Hours
                        </h3>
                        <p class="text-base font-normal text-black">
                            Sat - Mon 10 am - 8 pm Friday Off - Day
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:w-1/2 w-full bg-[#F7F7F7] md:px-10 md:py-[45px] px-8 py-10 rounded-2xl">
            <h6 class="text-lg pb-5 font-normal">
                Contact Now
            </h6>
            <h2 class="text-2xl sm:!text-3xl pb-3 font-[300] font-axiformaregular">
                Schedule Your Appointment?
            </h2>
            <form class="flex flex-col gap-5">
                <div class="flex md:flex-row flex-col gap-5">
                    <div class="md:w-1/2 w-full">
                        <label for="name" class="hidden">
                            Name *
                        </label>
                        <input name="name" placeholder="Name *"
                            class="text-base placeholder:text-black text-black w-full bg-white px-5 py-3 rounded-lg border border-[#EFEFEF] focus:border-primary outline-none" />
                    </div>
                    <div class="md:w-1/2 w-full">
                        <label for="phone" class="hidden">
                            Phone *
                        </label>
                        <input name="phone" placeholder="Phone *"
                            class="text-base placeholder:text-black text-black w-full bg-white px-5 py-3 rounded-lg border border-[#EFEFEF] focus:border-primary outline-none" />
                    </div>
                </div>
                <div class="flex md:flex-row flex-col gap-5">
                    <div class="md:w-1/2 w-full">
                        <label for="email" class="hidden">
                            Email *
                        </label>
                        <input name="email" placeholder="Email *"
                            class="text-base placeholder:text-black text-black w-full bg-white px-5 py-3 rounded-lg border border-[#EFEFEF] focus:border-primary outline-none" />
                    </div>
                    <div class="md:w-1/2 w-full">
                        <label for="need" class="hidden">
                            What are Your Needs? *
                        </label>
                        <input name="need" placeholder="What are Your Needs? *"
                            class="text-base placeholder:text-black text-black w-full bg-white px-5 py-3 rounded-lg border border-[#EFEFEF] focus:border-primary outline-none" />
                    </div>
                </div>
                <div class="w-full">
                    <label for="message" class="hidden">
                        Message *
                    </label>
                    <textarea name="message" placeholder="Message *" row="10"
                        class="text-base placeholder:text-black text-black w-full bg-white px-5 py-3 rounded-lg border border-[#EFEFEF] focus:border-primary outline-none"></textarea>
                </div>
                <button class="text-lg font-semibold text-white bg-secondry hover:bg-primary py-3.5 px-7 rounded-sm">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
<section class="pt-[100px] pb-[80px]">
    <div
        class="container mx-auto flex md:flex-row flex-col gap-8 items-center bg-[#F7F7F7] md:px-10 md:py-[45px] px-8 py-10 rounded-2xl">
        <div class="md:w-1/3 w-full ">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cta.jpg" alt="cta" class="rounded-2xl" />
        </div>
        <div class="md:w-2/3 w-full ">
            <h6 class="text-lg pb-5 font-normal">
                Contact Now
            </h6>
            <h2 class="text-2xl sm:!text-3xl pb-3 font-[300] font-axiformaregular">
                Schedule Your Appointment?
            </h2>
            <p class="text-base text-black">
                Your Feedback Drives Our Excellence,
            </p>
            <div
                    class="flex md:flex-row flex-col gap-6 items-center justify-start">
                    <span
                        class="map_icon icon flex items-center justify-center text-2xl text-white group-hover:text-white group-hover:bg-primary transition-all h-[56px] w-[56px] rounded-full bg-primary border border-primary">
                        <i class="fa-solid fa-headphones"></i>
                    </span>
                    <div>
                       <a href="tel:03244644208" target="_blank" class="text-2xl font-normal  text-black ">
                        0324 4644208
                    </a>
                    </div>
                </div>
        </div>
    </div>
</section>
<!-- Google Map Section -->
<section class="pb-[80px]">
    <div class="container mx-auto px-4">
        <div class="w-full h-[400px] rounded-2xl overflow-hidden">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.7013507630825!2d-80.2587344!3d26.1018792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d901d0836479ed%3A0x34578f225f8ccfb8!2s0650%20W%20State%20Rd%2084%20%23100%2C%20Davie%2C%20FL%2033324%2C%20USA!5e0!3m2!1sen!2s!4v1720456800000!5m2!1sen!2s"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>



<?php get_footer(); ?>