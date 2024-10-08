@include('landing.head')
<body>
    @include('landing.pages.navbar')

    <section class="mt-5 mx-8 px-3 mb-4">
        <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">Offering Form</h1>
        <div class="mt-6 p-4 flex justify-center items-center">
            <div class="grid grid-cols-3 gap-5">
                {{-- cards --}}
                <div class="flex flex-wrap max-w-[320px] ">
                    <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    <div class="mt-2 p-3">
                        <h1 class="text-md text-purple font-bold font-['Poppins']">Marigold Garden</h1>
                        <p class="font-['Poppins'] font-light">Jamali, Kec. Mande, Kabupaten Cianjur, Jawa Barat 43292</p>
                        <div class="rounded-b-xl bg-[#E6BA31] p-3 flex flex-wrap justify-between items-center ">
                            <div class="text-md font-medium text-white">120m<sup>2</sup> <span class="text-2xl text-white">|</span> 50$/m<sup>2</sup></div>
                            <div class="text-xl font-bold text-white">$6000</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap max-w-[320px] ">
                    <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    <div class="mt-2 p-3">
                        <h1 class="text-md text-purple font-bold font-['Poppins']">Marigold Garden</h1>
                        <p class="font-['Poppins'] font-light">Jamali, Kec. Mande, Kabupaten Cianjur, Jawa Barat 43292</p>
                        <div class="rounded-b-xl bg-[#E6BA31] p-3 flex flex-wrap justify-between items-center ">
                            <div class="text-md font-medium text-white">120m<sup>2</sup> <span class="text-2xl text-white">|</span> 50$/m<sup>2</sup></div>
                            <div class="text-xl font-bold text-white">$6000</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap max-w-[320px] ">
                    <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    <div class="mt-2 p-3">
                        <h1 class="text-md text-purple font-bold font-['Poppins']">Marigold Garden</h1>
                        <p class="font-['Poppins'] font-light">Jamali, Kec. Mande, Kabupaten Cianjur, Jawa Barat 43292</p>
                        <div class="rounded-b-xl bg-[#E6BA31] p-3 flex flex-wrap justify-between items-center ">
                            <div class="text-md font-medium text-white">120m<sup>2</sup> <span class="text-2xl text-white">|</span> 50$/m<sup>2</sup></div>
                            <div class="text-xl font-bold text-white">$6000</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap max-w-[320px] ">
                    <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    <div class="mt-2 p-3">
                        <h1 class="text-md text-purple font-bold font-['Poppins']">Marigold Garden</h1>
                        <p class="font-['Poppins'] font-light">Jamali, Kec. Mande, Kabupaten Cianjur, Jawa Barat 43292</p>
                        <div class="rounded-b-xl bg-[#E6BA31] p-3 flex flex-wrap justify-between items-center ">
                            <div class="text-md font-medium text-white">120m<sup>2</sup> <span class="text-2xl text-white">|</span> 50$/m<sup>2</sup></div>
                            <div class="text-xl font-bold text-white">$6000</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap max-w-[320px] ">
                    <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    <div class="mt-2 p-3">
                        <h1 class="text-md text-purple font-bold font-['Poppins']">Marigold Garden</h1>
                        <p class="font-['Poppins'] font-light">Jamali, Kec. Mande, Kabupaten Cianjur, Jawa Barat 43292</p>
                        <div class="rounded-b-xl bg-[#E6BA31] p-3 flex flex-wrap justify-between items-center ">
                            <div class="text-md font-medium text-white">120m<sup>2</sup> <span class="text-2xl text-white">|</span> 50$/m<sup>2</sup></div>
                            <div class="text-xl font-bold text-white">$6000</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap max-w-[320px] ">
                    <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    <div class="mt-2 p-3">
                        <h1 class="text-md text-purple font-bold font-['Poppins']">Marigold Garden</h1>
                        <p class="font-['Poppins'] font-light">Jamali, Kec. Mande, Kabupaten Cianjur, Jawa Barat 43292</p>
                        <div class="rounded-b-xl bg-[#E6BA31] p-3 flex flex-wrap justify-between items-center ">
                            <div class="text-md font-medium text-white">120m<sup>2</sup> <span class="text-2xl text-white">|</span> 50$/m<sup>2</sup></div>
                            <div class="text-xl font-bold text-white">$6000</div>
                        </div>
                    </div>
                </div>
                {{-- cards --}}
                
            </div>
        </div>
    </section>

    @include('landing.footer')
</body>