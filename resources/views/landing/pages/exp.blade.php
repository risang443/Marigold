@include('landing.head')
<body>
    @include('landing.pages.navbar')

    <section class="bg-white mt-8 mb-10 mx-5">
        <!-- Title Section -->
        <div class="flex justify-center flex-wrap">
            <h1 class="text-5xl font-['Poppins'] font-bold mb-7">Experience</h1>
        </div>
        
        <!-- Grid Section with Responsive Layout -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <!-- First Experience Block -->
            <div class="flex justify-center flex-wrap p-4">
                <img class="rounded-xl max-w-full max-h-[600px]" src="{{ asset('image/tamanmari.jpg') }}" alt="Marigold Flowers in Bali">
                <p class="pt-2 text-['Poppins'] text-lg text-justify font-medium max-w-full sm:max-w-2xl mt-4">
                    {{ __('exp.caption1') }}
                </p>
            </div>

            <!-- Second Experience Block -->
            <div class="flex justify-center flex-wrap p-4">
                <img class="rounded-xl max-w-full max-h-[600px]" src="{{ asset('image/exp22.jpg') }}" alt="Marigold-based Products">
                <p class="pt-2 text-['Poppins'] text-lg text-justify font-medium max-w-full sm:max-w-2xl mt-4">
                    {{ __('exp.caption2') }}
                </p>
            </div>
        </div>
    </section>

    @include('landing.footer')
</body>
