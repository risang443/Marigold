@include('landing.head')
<body>
	@include('landing.pages.navbar')
    <section class="bg-white mt-8 mb-10 mx-5">

        <div class="flex w-full justify-center items-center">
            <h1 class="text-5xl font-['Poppins'] font-bold mb-7 text-purple">Farm and Fields</h1>
        </div>

        <div class="grid grid-cols-2 gap-y-8">
            <div class="flex justify-center ">
                <div class="flex w-auto my-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15848.257425769529!2d107.2098441!3d-6.7620076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69abdef8752ecf%3A0xa2fd3c4aaa1a61d2!2sUG%20Techno%20Park!5e0!3m2!1sid!2sid!4v1729992728112!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-md"></iframe>
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
                        {{__("visit.caption1farm")}}
                    </p>
            </div>
            <div class="flex justify-center my-8 ">
                <div class="flex w-auto">
                    <img src="{{ asset('image/visit.jpeg') }}" alt="" class="size-96 rounded-md object-fill ">
                </div>
            </div>
            
            <div class="block mx-9 my-5">
                <h1 class="font-bold text-3xl font-['Poppins'] h-fit w-full my-6 ">Ug Techno Farm</h1>
                <p class="text-lg font-['Poppins'] h-fit">
                    {{__("visit.caption2farm")}}
                </p>
            </div>
            <div class="flex justify-center my-8 ">
                <div class="flex w-auto">
                    <img src="{{ asset('image/visit.png') }}" alt="" class="size-96 rounded-md object-fill">
                </div>
            </div>
            
        </div>

    </section>
	@include('landing.footer')
</body>
</html>