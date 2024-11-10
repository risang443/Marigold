@include('landing.head')

<body>
    @include('landing.pages.navbar')

    <section class="bg-white mt-6 mb-10">
        <div class="max-w-screen-xl px-4 py-6 mx-auto">
            <div class="flex flex-wrap justify-center">
                <div class="w-screen">
                    <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">Partner Ship</h1>
                </div>
                <div class="grid grid-cols-3 mt-5 gap-5 mb-6 w-screen">
                    <div class="flex justify-center flex-wrap">
                        <img class="size-80" src="{{ asset('image/partner1.png') }}" alt="images">
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="size-80" src="{{ asset('image/partner2.png') }}" alt="images">
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="size-80" src="{{ asset('image/partner3.png') }}" alt="images">
                    </div>
                </div>
                <a href="#" class="inline-flex items-center justify-center px-12 py-3 text-base font-medium text-center bg-yellow text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Next
                </a> 
            </div>
            
            <div class="flex flex-wrap justify-center">
                <div class="w-screen">
                    <h1 class="mt-10 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">Our Partners</h1>
                    <p class="text-purple font-['Poppins'] text-xl text-center font-light">Below is a list of programs that we have carried out with partners.</p>
                </div>
                <div class="grid grid-cols-3 mt-5 gap-5 mb-6 w-screen">
                    <div class="flex justify-center flex-wrap">
                        <img class="size-80" src="{{ asset('image/partner4.png') }}" alt="images">
                        <h1 class="w-full text-purple font-['Poppins'] text-xl text-center font-bold">Lorem.</h1>
                        <p class="text-purple font-['Poppins'] text-xl text-center font-light">Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="size-80" src="{{ asset('image/partner5.png') }}" alt="images">
                        <h1 class="w-full text-purple font-['Poppins'] text-xl text-center font-bold">Lorem.</h1>
                        <p class="text-purple font-['Poppins'] text-xl text-center font-light">Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="h-80 w-auto" src="{{ asset('image/partner6.png') }}" alt="images">
                        <h1 class="w-full text-purple font-['Poppins'] text-xl text-center font-bold">Lorem.</h1>
                        <p class="text-purple font-['Poppins'] text-xl text-center font-light">Lorem ipsum dolor sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('landing.footer')

</body>