@include('landing.head')
<body>
	@include('landing.pages.navbar')
    <section class="bg-white mt-8 mb-10 mx-5">

        <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">Frequently Ask Question</h1>

        <div class="mx-auto mt-8 grid max-w-xl divide-y divide-neutral-200 ">
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> What is UG Marigold Laris?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                        UG Marigold Laris is a unique place dedicated to celebrating the natural wellness and beauty of marigold flowers. Here, visitors can explore a range of marigold-inspired products crafted with care, from essential oils and soothing teas to vibrant dried flower collections. Committed to eco-friendly practices, UG Marigold Laris invites you to experience the calming, revitalizing essence of marigolds in a serene, sustainable environment that prioritizes both quality and nature. Discover the holistic benefits of marigolds at UG Marigold Laris—a haven for natural wellness and environmental care.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> What products do you offer?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                        At UG Marigold Laris, we offer a range of high-quality, marigold-based products designed to enhance wellness and embrace nature. Our Marigold Essential Oil is a pure, antioxidant-rich oil perfect for skincare, aromatherapy, and relaxation. We also provide a Dried Marigold Flower Collection, featuring handpicked, vibrant blooms ideal for crafts, natural décor, and homemade remedies. For a soothing beverage, try our Marigold Petal Tea—a caffeine-free infusion crafted from premium marigold petals that supports relaxation and digestive wellness. Discover the natural benefits of marigolds with our eco-friendly, quality-focused offerings.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> How can I place an order?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, nemo sit. Vel repudiandae aliquid eum voluptatum blanditiis minus ducimus nobis.
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Does UG Marigold Laris offer consultation on marigold planting?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                        Yes, UG Marigold Laris offers expert consultation on marigold planting! Our team is passionate about sharing knowledge on sustainable cultivation practices, from selecting the right soil and seeds to proper planting techniques for vibrant blooms. Whether you're a beginner or an experienced grower, our personalized guidance will help you cultivate healthy, thriving marigolds for essential oils, teas, or ornamental use. Let us support you on your journey to successful marigold planting!
                    </p>
                </details>
            </div>
            <div class="py-5">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                        <span> Does UG Marigold Laris support eco-friendly practices?</span>
                        <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                        Yes, UG Marigold Laris proudly supports eco-friendly practices throughout our entire production process. From sourcing marigold flowers grown in sustainable, pesticide-free farms to using biodegradable packaging, we are dedicated to reducing our environmental impact. We believe in delivering pure, high-quality products that not only benefit you but also support a healthier planet. With UG Marigold Laris, you can enjoy natural wellness while contributing to a more sustainable future.
                    </p>
                </details>
            </div>
            
        </div>
    </section>
    <div class="absolute bottom-0">
        @include('landing.footer')
    </div>
    
</body>