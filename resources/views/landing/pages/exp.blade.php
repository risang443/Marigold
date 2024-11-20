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
                    The Gunadarma team had the opportunity to conduct a survey of marigold flowers in Bali. There, we discovered vast fields filled with vibrant marigold flowers. These flowers not only enhance the natural beauty of the landscape but also hold deep significance in Balinese traditions and culture. We had the chance to observe how marigolds are cultivated and cared for, as well as to understand their important role in various ceremonial practices. This experience provided us with new insights into Bali's rich natural and cultural heritage, making it a valuable moment for the entire team.
                </p>
            </div>

            <!-- Second Experience Block -->
            <div class="flex justify-center flex-wrap p-4">
                <img class="rounded-xl max-w-full max-h-[600px]" src="{{ asset('image/exp22.jpg') }}" alt="Marigold-based Products">
                <p class="pt-2 text-['Poppins'] text-lg text-justify font-medium max-w-full sm:max-w-2xl mt-4">
                    Innovative marigold-based products are available at Smart Store, located in UG Techno Park, Cikalong, West Java. These products are the result of innovation from Universitas Gunadarma, combining the natural benefits of marigold flowers with modern technology. As a result, these products not only provide health benefits but also introduce local potential to a wider market.
                </p>
            </div>
        </div>
    </section>

    @include('landing.footer')
</body>
