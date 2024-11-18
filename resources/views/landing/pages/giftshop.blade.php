@include('landing.head')
<body>
    @include('landing.pages.navbar')

    <section class="bg-white mt-8 mb-10 mx-5">
        <div class="flex w-full justify-center items-center">
            <h1 class="text-5xl font-['Poppins'] font-bold mb-7 text-purple">Gift Shop</h1>
        </div>

        <!-- Grid Layout with Responsiveness -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <!-- Google Map Embed -->
            <div class="flex justify-center">
                <div class="flex w-auto my-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15848.257425769529!2d107.2098441!3d-6.7620076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69abdef8752ecf%3A0xa2fd3c4aaa1a61d2!2sUG%20Techno%20Park!5e0!3m2!1sid!2sid!4v1729992728112!5m2!1sid!2sid" 
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-md">
                    </iframe>
                </div>
            </div>

            <!-- Address & Directions -->
            <div class="block mx-9 my-5">
                <h1 class="font-bold text-3xl font-['Poppins'] w-full my-6">Address</h1>
                <p class="text-lg font-['Poppins']">Jl. Margonda Raya Pondok Cina, Depok Phone: 7863819, 7520981, 7863788</p>
                <h1 class="font-bold text-3xl font-['Poppins'] w-full my-6">Directions</h1>
                <p class="text-lg font-['Poppins']">Jl. Margonda Raya Pondok Cina, Depok Phone: 7863819, 7520981, 7863788</p>
            </div>

            <!-- UG Techno Park Information -->
            <div class="block mx-9 my-5">
                <h1 class="font-bold text-3xl font-['Poppins'] w-full my-6">UG Techno Park</h1>
                <p class="text-lg font-['Poppins']">
                    UG Techno Park is a dynamic hub of innovation, where brilliant ideas are transformed into tangible solutions. Equipped with state-of-the-art facilities and fostering strong collaborations, we drive sustainable technological advancements for a brighter future.
                </p>
            </div>

            <!-- UG Techno Park Image -->
            <div class="flex justify-center my-8">
                <div class="flex w-auto">
                    <img src="{{ asset('image/visit.jpeg') }}" alt="UG Techno Park" class="w-full h-auto rounded-md object-cover">
                </div>
            </div>

            <!-- UG Techno Giftshop Information -->
            <div class="block mx-9 my-5">
                <h1 class="font-bold text-3xl font-['Poppins'] w-full my-6">UG Techno Giftshop</h1>
                <p class="text-lg font-['Poppins']">
                    UG Techno Giftshop is a place where you can buy a variety of quality products from the harvest of UG Marigold fields and farm. Here you can buy everything from flowers to tea made from marigold.
                </p>
            </div>

            <!-- UG Techno Giftshop Image -->
            <div class="flex justify-center my-8">
                <div class="flex w-auto">
                    <img src="{{ asset('image/visit22.png') }}" alt="UG Techno Giftshop" class="w-full h-auto rounded-md object-cover">
                </div>
            </div>

        </div>
    </section>

    @include('landing.footer')
</body>
</html>
