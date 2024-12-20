@include('landing.head')
<body class="flex flex-col min-h-screen">
    @include('landing.pages.navbar')

    <section class="bg-white mt-8 mb-10 mx-4 sm:mx-8 lg:mx-16 flex-1">
        <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-3xl sm:text-4xl text-center font-bold">Frequently Ask Question</h1>

        <div class="mx-auto mt-8 grid max-w-full gap-6 sm:gap-8 lg:gap-10 sm:grid-cols-1 lg:grid-cols-2 divide-y sm:divide-y-0 lg:divide-neutral-200">
            <!-- FAQ Item 1 -->
            <div class="py-5 sm:py-6 lg:py-8">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-base sm:text-lg lg:text-xl">
                        <span> {{ __('faq.title1') }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm sm:text-base lg:text-lg">
                        {{__('faq.caption1')}}
                    </p>
                </details>
            </div>

            <!-- FAQ Item 2 -->
            <div class="py-5 sm:py-6 lg:py-8">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-base sm:text-lg lg:text-xl">
                        <span> {{ __('faq.title2') }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm sm:text-base lg:text-lg">
                        {{__('faq.caption2')}}
                    </p>
                </details>
            </div>

            <!-- FAQ Item 3 -->
            <div class="py-5 sm:py-6 lg:py-8">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-base sm:text-lg lg:text-xl">
                        <span> {{ __('faq.title3') }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm sm:text-base lg:text-lg">
                        {{__('faq.caption3')}}
                    </p>
                </details>
            </div>

            <!-- FAQ Item 4 -->
            <div class="py-5 sm:py-6 lg:py-8">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-base sm:text-lg lg:text-xl">
                        <span> {{ __('faq.title4') }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm sm:text-base lg:text-lg">
                        {{__('faq.caption4')}}
                    </p>
                </details>
            </div>

            <!-- FAQ Item 5 -->
            <div class="py-5 sm:py-6 lg:py-8">
                <details class="group">
                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium text-base sm:text-lg lg:text-xl">
                        <span> {{ __('faq.title5') }}</span>
                        <span class="transition group-open:rotate-180">
                            <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg>
                        </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600 text-sm sm:text-base lg:text-lg">
                        {{__('faq.caption5')}}
                    </p>
                </details>
            </div>
        </div>
    </section>

    @include('landing.footer')
</body>
</html>
