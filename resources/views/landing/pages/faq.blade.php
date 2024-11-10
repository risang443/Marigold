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
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae repudiandae dolore aliquam at esse debitis repellat ducimus nobis assumenda soluta!
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto animi eveniet, molestiae quis atque labore cumque optio deleniti eum reiciendis, ipsum quia eius in iste non aliquid quo quibusdam repellendus?
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quod nostrum hic nulla beatae dolor accusantium ab impedit maxime commodi.
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga totam quas inventore error. Nemo eaque suscipit, modi, placeat delectus repellendus dolor, velit eos beatae architecto facilis. Fugit, dolore quibusdam? Aliquam error ullam quam quo.
                    </p>
                </details>
            </div>
            
        </div>
    </section>
    <div class="absolute bottom-0">
        @include('landing.footer')
    </div>
    
</body>