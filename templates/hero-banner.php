<section class="relative overflow-hidden min-h-[500px]">


  <!-- Foreground content -->
  <div class="relative z-10 container mx-auto px-4 text-white flex items-center justify-start text-left min-h-[500px]">
    <div class="md:w-[49%] w-full">
      <div class="max-w-2xl transition-all duration-500">
        <h1 id="sliderTitle" class="text-3xl sm:!text-5xl lg:!text-6xl xl:!text-7xl font-bold leading-tight sm:leading-[1.1]">
          Excellence in Eyecare
        </h1>
        <p id="sliderDesc" class="mt-4 text-base sm:text-lg lg:text-xl">
          Pannu Laser & Vision Institute Is Proud To Have Dr. Srini Mutyala As Our Medical Director And Lasik Surgeon.
        </p>
      </div>

      <div class="bg-white mt-10 rounded-[2px] overflow-hidden transition-all duration-500">
        <div id="sliderButtons" class="grid grid-cols-1 sm:grid-cols-2 text-topBarBg">
          <!-- Buttons will be replaced dynamically -->
        </div>
      </div>
    </div>
  </div>

  <!-- Script for slider -->
  <script>
    const slides = document.querySelectorAll("#heroSlider");
    const titleEl = document.getElementById("sliderTitle");
    const descEl = document.getElementById("sliderDesc");
    const btnEl = document.getElementById("sliderButtons");

    const sliderData = [
      {
    
        title: "Excellence in Eyecare",
        desc: "Dr. Srini Mutyala leads with expertise and care.",
        buttons: [
          { text: "Find an Expert", link: "/" },
          { text: "Schedule an Appointment", link: "/" },
          { text: "Find a Location", link: "/" },
          { text: "Free LASIK Consultation", link: "/" }
        ]
      },
      {
        
        title: "Advanced LASIK Technology",
        desc: "Bringing clarity to thousands of patients.",
        buttons: [
          { text: "Meet Our Team", link: "/" },
          { text: "Explore Services", link: "/" }
        ]
      },
      {
        
        title: "Your Vision, Our Mission",
        desc: "Trusted care for your family's eyes.",
        buttons: [
          { text: "Find Nearby Clinics", link: "/" },
          { text: "Contact Us", link: "/" }
        ]
      }
    ];

    let index = 0;

    function updateSlide(i) {
      // Update image visibility
      slides.forEach((img, idx) => {
        img.classList.toggle("opacity-100", idx === i);
        img.classList.toggle("opacity-0", idx !== i);
      });

      // Update text
      titleEl.textContent = sliderData[i].title;
      descEl.textContent = sliderData[i].desc;

      // Update buttons
      btnEl.innerHTML = "";
      sliderData[i].buttons.forEach(btn => {
        const a = document.createElement("a");
        a.href = btn.link;
        a.className = "p-3 border flex items-center gap-2";
        a.innerHTML = `
          <h4 class='text-[18px] font-semibold'>${btn.text}</h4>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-skip-2840.svg" alt="">
        `;
        btnEl.appendChild(a);
      });
    }

    setInterval(() => {
      index = (index + 1) % sliderData.length;
      updateSlide(index);
    }, 5000);

    // Initial render
    updateSlide(index);
  </script>
</section>
