<section id="image-carousel" class="splide" aria-label="Beautiful Images">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <img src="{{ asset('images/slider1.png') }}" alt="">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/slider2.png') }}" alt="">
            </li>
        </ul>
    </div>
    <div class="splide__arrows splide__arrows--ltr my-3">
        <button
            class="splide__arrow splide__arrow--prev"
            type="button"
            aria-label="Previous slide"
            aria-controls="splide01-track"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

        </button>
        <button
            class="splide__arrow splide__arrow--next"
            type="button"
            aria-label="Next slide"
            aria-controls="splide01-track"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
    </div>
</section>
