@include('landing.head')

<body>
    @include('landing.pages.navbar')

    <section class="bg-white mt-6 mb-10">
        <div class="max-w-screen-xl px-4 py-6 mx-auto">
            <div class="flex flex-wrap justify-center">
                <div class="w-screen">
                    <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">Partner Ship</h1>
                </div>
                <div class="grid grid-cols-4 mt-5 gap-5 mb-6 w-screen">
                    <div class="">
                        <img class="size-80" src="{{ asset('image/placehoder.jpg') }}" alt="images">
                    </div>
                    <div class="">
                        <img class="size-80" src="{{ asset('image/placehoder.jpg') }}" alt="images">
                    </div>
                    <div class="">
                        <img class="size-80" src="{{ asset('image/placehoder.jpg') }}" alt="images">
                    </div>
                    <div class="">
                        <img class="size-80" src="{{ asset('image/placehoder.jpg') }}" alt="images">
                    </div>
                </div>
                <a href="#" class="inline-flex items-center justify-center px-12 py-3 text-base font-medium text-center bg-yellow text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Shop Now
                </a> 
            </div>
            
            <div class="flex flex-wrap justify-center">
                <div class="w-screen">
                    <h1 class="mt-10 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">Our Partners</h1>
                    <p class="text-purple font-['Poppins'] text-xl text-center font-light">Below is a list of programs that we have carried out with partners.</p>
                </div>
                <div class="grid grid-cols-4 mt-5 gap-5 mb-6 w-screen">
                    <div class="">
                        <img class="size-80" src="{{ asset('image/placehoder.jpg') }}" alt="images">
                        <h1 class="text-purple font-['Poppins'] text-xl text-center font-bold">Lorem.</h1>
                        <p class="text-purple font-['Poppins'] text-xl text-center font-light">Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="">
                        <img class="size-80" src="{{ asset('image/placehoder.jpg') }}" alt="images">
                        <h1 class="text-purple font-['Poppins'] text-xl text-center font-bold">Lorem.</h1>
                        <p class="text-purple font-['Poppins'] text-xl text-center font-light">Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="">
                        <img class="size-80" src="{{ asset('image/placehoder.jpg') }}" alt="images">
                        <h1 class="text-purple font-['Poppins'] text-xl text-center font-bold">Lorem.</h1>
                        <p class="text-purple font-['Poppins'] text-xl text-center font-light">Lorem ipsum dolor sit.</p>
                    </div>
                    <div class="">
                        <img class="size-80" src="{{ asset('image/placehoder.jpg') }}" alt="images">
                        <h1 class="text-purple font-['Poppins'] text-xl text-center font-bold">Lorem.</h1>
                        <p class="text-purple font-['Poppins'] text-xl text-center font-light">Lorem ipsum dolor sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('landing.footer')

</body>