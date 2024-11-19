@include('landing.head')
<body>
    @include('landing.pages.navbar')

    <section class="bg-white mt-6 mb-10 flex justify-center flex-wrap">
        <!-- Header -->
        <div class="w-full text-center my-8">
            <h1 class="p-2 text-purple font-['Poppins'] text-4xl font-bold">Flowers</h1>
        </div>

        <!-- Product Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            {{-- Card 1 --}}
            <div class="max-w-sm bg-white border border-gray-800 rounded-lg shadow">
                <a href="#"><img class="rounded-t-lg" src="{{ asset('image/test1.jpg') }}" alt="" /></a>
                <div class="p-5">
                    <a href="/shopcontent" class="flex flex-wrap">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple w-full">Gold Oil</h5>
                        <div class="flex justify-between text-xl text-yellow items-center flex-grow">
                            <p class="text-['Poppins'] font-bold text-yellow">$5000</p>
                            <i class="fi fi-rr-square-plus"></i>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="max-w-sm bg-white border border-gray-800 rounded-lg shadow">
                <a href="#"><img class="rounded-t-lg" src="{{ asset('image/test1.jpg') }}" alt="" /></a>
                <div class="p-5">
                    <a href="/shopcontent" class="flex flex-wrap">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple w-full">Gold Oil</h5>
                        <div class="flex justify-between text-xl text-yellow items-center flex-grow">
                            <p class="text-['Poppins'] font-bold text-yellow">$5000</p>
                            <i class="fi fi-rr-square-plus"></i>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="max-w-sm bg-white border border-gray-800 rounded-lg shadow">
                <a href="#"><img class="rounded-t-lg" src="{{ asset('image/test1.jpg') }}" alt="" /></a>
                <div class="p-5">
                    <a href="/shopcontent" class="flex flex-wrap">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple w-full">Gold Oil</h5>
                        <div class="flex justify-between text-xl text-yellow items-center flex-grow">
                            <p class="text-['Poppins'] font-bold text-yellow">$5000</p>
                            <i class="fi fi-rr-square-plus"></i>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="max-w-sm bg-white border border-gray-800 rounded-lg shadow">
                <a href="#"><img class="rounded-t-lg" src="{{ asset('image/test1.jpg') }}" alt="" /></a>
                <div class="p-5">
                    <a href="/shopcontent" class="flex flex-wrap">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple w-full">Gold Oil</h5>
                        <div class="flex justify-between text-xl text-yellow items-center flex-grow">
                            <p class="text-['Poppins'] font-bold text-yellow">$5000</p>
                            <i class="fi fi-rr-square-plus"></i>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Card 5 --}}
            <div class="max-w-sm bg-white border border-gray-800 rounded-lg shadow">
                <a href="#"><img class="rounded-t-lg" src="{{ asset('image/test1.jpg') }}" alt="" /></a>
                <div class="p-5">
                    <a href="/shopcontent" class="flex flex-wrap">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple w-full">Gold Oil</h5>
                        <div class="flex justify-between text-xl text-yellow items-center flex-grow">
                            <p class="text-['Poppins'] font-bold text-yellow">$5000</p>
                            <i class="fi fi-rr-square-plus"></i>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Card 6 --}}
            <div class="max-w-sm bg-white border border-gray-800 rounded-lg shadow">
                <a href="#"><img class="rounded-t-lg" src="{{ asset('image/test1.jpg') }}" alt="" /></a>
                <div class="p-5">
                    <a href="/shopcontent" class="flex flex-wrap">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple w-full">Gold Oil</h5>
                        <div class="flex justify-between text-xl text-yellow items-center flex-grow">
                            <p class="text-['Poppins'] font-bold text-yellow">$5000</p>
                            <i class="fi fi-rr-square-plus"></i>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Card 7 --}}
            <div class="max-w-sm bg-white border border-gray-800 rounded-lg shadow">
                <a href="#"><img class="rounded-t-lg" src="{{ asset('image/test1.jpg') }}" alt="" /></a>
                <div class="p-5">
                    <a href="/shopcontent" class="flex flex-wrap">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple w-full">Gold Oil</h5>
                        <div class="flex justify-between text-xl text-yellow items-center flex-grow">
                            <p class="text-['Poppins'] font-bold text-yellow">$5000</p>
                            <i class="fi fi-rr-square-plus"></i>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Card 8 --}}
            <div class="max-w-sm bg-white border border-gray-800 rounded-lg shadow">
                <a href="#"><img class="rounded-t-lg" src="{{ asset('image/test1.jpg') }}" alt="" /></a>
                <div class="p-5">
                    <a href="/shopcontent" class="flex flex-wrap">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-purple w-full">Gold Oil</h5>
                        <div class="flex justify-between text-xl text-yellow items-center flex-grow">
                            <p class="text-['Poppins'] font-bold text-yellow">$5000</p>
                            <i class="fi fi-rr-square-plus"></i>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>

    @include('landing.footer')
</body>
