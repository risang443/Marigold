@include('landing.head')
<body>
    @include('landing.pages.navbar')

    <section class="bg-white mt-8 mb-10">
        <div class="grid grid-cols-2">
            <div class="flex justify-center items-center">
                <img src="{{ asset('image/test1.jpg') }}" alt="test1" class="rounded-lg">
            </div>
            <div class="flex flex-wrap justify-normal p-12 ">
                <div class="items-baseline w-full">
                    <h1 class="font-['Poppins'] font-medium text-4xl ">Gold Oil</h1>
                    <p class="font-['Poppins'] font-bold text-3xl mt-4">$5000.00</p>
                </div>

                <div class="w-full">
                    <div class="flex flex-wrap ">
                        <a class="flex justify-between" href="">
                            <div class="bg-yellow text-white px-40 py-2 rounded-lg text-xl font-['Poppins'] items-center flex"> Add to cart</div>
                        </a>
                        <div class="flex justify-between items-center mx-8 ">
                            <button><i class="fi fi-rr-square-plus text-3xl hover:text-yellow"></i></button>
                            <div class="flex"><p class="text-xl m-2 p-2">1</p></div>
                            <button><i class="fi fi-rr-square-minus text-3xl hover:text-yellow"></i></button>
                        </div>
                        <div class="mt-8">
                            <h1 class="text-3xl font-['Poppins'] font-bold">Product Information</h1>
                            <p class="text-md font['Poppins']">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nulla voluptatibus sed voluptatem dolores porro vel aliquam cumque mollitia? Dolorem at recusandae culpa magnam ea assumenda molestiae vero omnis. Doloribus.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <div class="absolute bottom-0">
        @include('landing.footer')
    </div>
    
</body>