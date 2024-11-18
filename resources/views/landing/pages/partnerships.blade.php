@include('landing.head')

<body>
    @include('landing.pages.navbar')

    <section class="bg-white mt-6 mb-10">
        <div class="max-w-screen-xl px-4 py-6 mx-auto">
            <div class="flex flex-wrap justify-center">
                <div class="w-full">
                    <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">Partner Ship</h1>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-5 gap-5 mb-6 w-full">
                    <div class="flex justify-center flex-wrap">
                        <img class="w-full h-auto object-contain" src="{{ asset('image/partner1.png') }}" alt="partner1">
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="w-full h-auto object-contain" src="{{ asset('image/partner2.png') }}" alt="partner2">
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="w-full h-auto object-contain" src="{{ asset('image/partner3.png') }}" alt="partner3">
                    </div>
                </div>
            </div>
            
            <div class="flex flex-wrap justify-center">
                <div class="w-full mb-10">
                    <h1 class="mt-10 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">Our Partners</h1>
                    <p class="text-purple font-['Poppins'] text-xl text-center font-light">Below is a list of programs that we have carried out with partners.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-5 gap-10 mb-6 w-full">
                    <div class="flex justify-center flex-wrap">
                        <img class="w-full h-auto object-scale-down" src="{{ asset('image/partner5.png') }}" alt="partner5">
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="w-full h-auto object-scale-down" src="{{ asset('image/padanan.png') }}" alt="padanan">
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="w-full h-auto object-scale-down" src="{{ asset('image/partner6.png') }}" alt="partner6">
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="w-full h-auto object-scale-down" src="{{ asset('image/tutwuri.jpg') }}" alt="tutwuri">
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="w-full h-auto object-scale-down" src="{{ asset('image/kedaireka.png') }}" alt="kedaireka">
                    </div>
                    <div class="flex justify-center flex-wrap">
                        <img class="w-full h-auto object-scale-down" src="{{ asset('image/vokasi.png') }}" alt="vokasi">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    @include('landing.footer')
</body>
