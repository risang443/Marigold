@include('landing.head')
<body>
	@include('landing.pages.navbar')
    <section class="bg-white mt-8 mb-10 mx-5">

        <div class="flex w-full justify-center items-center">
            <h1 class="text-5xl font-['Poppins'] font-bold mb-7 text-purple">Gift Shop</h1>
        </div>

        <div class="grid grid-cols-2 gap-y-8">
            <div class="flex justify-center ">
                <div class="flex w-auto my-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15848.257425769529!2d107.2098441!3d-6.7620076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69abdef8752ecf%3A0xa2fd3c4aaa1a61d2!2sUG%20Techno%20Park!5e0!3m2!1sid!2sid!4v1729992728112!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="block mx-9 my-5">
                    <h1 class="font-bold text-3xl font-['Poppins'] h-fit w-full my-6 ">Address</h1>
                    <p class="text-lg font-['Poppins'] h-fit">Jl. Margonda Raya Pondok Cina, Depok Phone : 7863819, 7520981,7863788</p>
                    <h1 class="font-bold text-3xl font-['Poppins'] h-fit w-full my-6">Directions</h1>
                    <p class="text-lg font-['Poppins'] h-fit">Jl. Margonda Raya Pondok Cina, Depok Phone : 7863819, 7520981,7863788</p>
                
            </div>


            <div class="block mx-9 my-5">
                    <h1 class="font-bold text-3xl font-['Poppins'] h-fit w-full my-6 ">Ug Techno Park</h1>
                    <p class="text-lg font-['Poppins'] h-fit">
                        UG Techno Park is a dynamic hub of innovation, where brilliant ideas are transformed into tangible solutions. Equipped with state-of-the-art facilities and fostering strong collaborations, we drive sustainable technological advancements for a brighter future.
                    </p>
            </div>
            <div class="flex justify-center my-8 ">
                <div class="flex w-auto">
                    <img src="{{ asset('image/visit.jpeg') }}" alt="" class="size-96">
                </div>
            </div>
            
            <div class="block mx-9 my-5">
                <h1 class="font-bold text-3xl font-['Poppins'] h-fit w-full my-6 ">Ug Techno Giftshop</h1>
                <p class="text-lg font-['Poppins'] h-fit">
                    UG Techno Giftshop is a place where you can buy a variety of good product from the harvest of UG Marigold fields and farm. Here you can buy every product ranging flower to tea made from marigold.
                </p>
            </div>
            <div class="flex justify-center my-8 ">
                <div class="flex w-auto">
                    <img src="{{ asset('image/visit22.png') }}" alt="" class="size-96">
                </div>
            </div>
            
        </div>

    </section>
	@include('landing.footer')
</body>
</html>