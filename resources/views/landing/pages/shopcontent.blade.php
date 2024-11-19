@include('landing.head')
<body class="min-h-screen flex flex-col">
    @include('landing.pages.navbar')

    <section class="bg-white mt-8 mb-10 flex-1">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 px-4">
            <div class="flex justify-center items-center">
                <img src="{{ asset('image/test1.jpg') }}" alt="test1" class="rounded-lg w-full sm:w-3/4 md:w-full">
            </div>
            <div class="flex flex-wrap justify-normal p-4 sm:p-12">
                <div class="items-baseline w-full">
                    <h1 class="font-['Poppins'] font-medium text-4xl">Gold Oil</h1>
                    <p class="font-['Poppins'] font-bold text-3xl mt-4">$5000.00</p>
                </div>

                <div class="w-full">
                    <div class="flex flex-wrap">
                        <a class="flex justify-between w-full sm:w-auto" href="">
                            <div class="bg-yellow text-white px-10 py-2 rounded-lg text-xl font-['Poppins'] items-center flex justify-center">Add to cart</div>
                        </a>
                        <div class="flex justify-between items-center mx-8 mt-4">
                            <button><i class="fi fi-rr-square-plus text-3xl hover:text-yellow"></i></button>
                            <div class="flex"><p class="text-xl m-2 p-2">1</p></div>
                            <button><i class="fi fi-rr-square-minus text-3xl hover:text-yellow"></i></button>
                        </div>
                        <div class="mt-8">
                            <h1 class="text-3xl font-['Poppins'] font-bold">Product Information</h1>
                            <p class="text-md font-['Poppins'] mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nulla voluptatibus sed voluptatem dolores porro vel aliquam cumque mollitia? Dolorem at recusandae culpa magnam ea assumenda molestiae vero omnis. Doloribus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('landing.footer')
</body>
