@include('landing.head')
<body>
    @include('landing.pages.navbar')

    <section class="mt-5 mx-8 px-3 mb-4">
        <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">Offering Form</h1>
        <div class="mt-6 p-4 flex justify-center items-center">
            <div class="grid grid-cols-3 gap-4">
                {{-- cards --}}
                <div class="flex flex-wrap max-w-[320px]">
                    <div class="relative">
                        <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    </div>
                    <div class="mt-3 p-3">
                        <h1 class="text-purple text-xl font-bold font-['Poppins']"> Marigold 01</h1>
                        <p class="font-light text-base">Mande &#9679; Cianjur</p>
                        <p class="font-light text-base">Jawa Barat</p>
                        <button class="bg-transparent text-purple text-sm border-purple border-2 rounded-lg px-8 py-0.5 hover:bg-purple hover:text-white">Garden</button>
                        <button class="bg-[#407953] text-white text-sm rounded-lg px-8 py-0.5 ">Ready</button>
                    </div>
                </div>
                <div class="flex flex-wrap max-w-[320px]">
                    <div class="relative">
                        <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    </div>
                    <div class="mt-3 p-3">
                        <h1 class="text-purple text-xl font-bold font-['Poppins']"> Marigold 01</h1>
                        <p class="font-light text-base">Mande &#9679; Cianjur</p>
                        <p class="font-light text-base">Jawa Barat</p>
                        <button class="bg-transparent text-purple text-sm border-purple border-2 rounded-lg px-8 py-0.5 hover:bg-purple hover:text-white">Garden</button>
                        <button class="bg-[#407953] text-white text-sm rounded-lg px-8 py-0.5 ">Ready</button>
                    </div>
                </div>
                <div class="flex flex-wrap max-w-[320px]">
                    <div class="relative">
                        <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    </div>
                    <div class="mt-3 p-3">
                        <h1 class="text-purple text-xl font-bold font-['Poppins']"> Marigold 01</h1>
                        <p class="font-light text-base">Mande &#9679; Cianjur</p>
                        <p class="font-light text-base">Jawa Barat</p>
                        <button class="bg-transparent text-purple text-sm border-purple border-2 rounded-lg px-8 py-0.5 hover:bg-purple hover:text-white">Garden</button>
                        <button class="bg-[#407953] text-white text-sm rounded-lg px-8 py-0.5 ">Ready</button>
                    </div>
                </div>
                <div class="flex flex-wrap max-w-[320px]">
                    <div class="relative">
                        <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    </div>
                    <div class="mt-3 p-3">
                        <h1 class="text-purple text-xl font-bold font-['Poppins']"> Marigold 01</h1>
                        <p class="font-light text-base">Mande &#9679; Cianjur</p>
                        <p class="font-light text-base">Jawa Barat</p>
                        <button class="bg-transparent text-purple text-sm border-purple border-2 rounded-lg px-8 py-0.5 hover:bg-purple hover:text-white">Garden</button>
                        <button class="bg-[#407953] text-white text-sm rounded-lg px-8 py-0.5 ">Ready</button>
                    </div>
                </div>
                <div class="flex flex-wrap max-w-[320px]">
                    <div class="relative">
                        <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    </div>
                    <div class="mt-3 p-3">
                        <h1 class="text-purple text-xl font-bold font-['Poppins']"> Marigold 01</h1>
                        <p class="font-light text-base">Mande &#9679; Cianjur</p>
                        <p class="font-light text-base">Jawa Barat</p>
                        <button class="bg-transparent text-purple text-sm border-purple border-2 rounded-lg px-8 py-0.5 hover:bg-purple hover:text-white">Garden</button>
                        <button class="bg-[#407953] text-white text-sm rounded-lg px-8 py-0.5 ">Ready</button>
                    </div>
                </div>
                <div class="flex flex-wrap max-w-[320px]">
                    <div class="relative">
                        <img class="size-80 rounded-t-xl" src="{{ asset('image/pic1.jpg') }}" alt="">
                    </div>
                    <div class="mt-3 p-3">
                        <h1 class="text-purple text-xl font-bold font-['Poppins']"> Marigold 01</h1>
                        <p class="font-light text-base">Mande &#9679; Cianjur</p>
                        <p class="font-light text-base">Jawa Barat</p>
                        <button class="bg-transparent text-purple text-sm border-purple border-2 rounded-lg px-8 py-0.5 hover:bg-purple hover:text-white">Garden</button>
                        <button class="bg-[#407953] text-white text-sm rounded-lg px-8 py-0.5 ">Ready</button>
                    </div>
                </div>  
                
                {{-- cards --}}
            </div>
        </div>
    </section>
    @include('landing.footer')
</body>