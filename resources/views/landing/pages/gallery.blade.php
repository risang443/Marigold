@include('landing.head')
<body>
    @include('landing.pages.navbar')
    <section class="bg-white mt-8 mb-10 mx-5">

        <div class="flex justify-center flex-wrap">
            <div class="flex w-full justify-center items-center">
                <h1 class="text-5xl font-['Poppins'] font-bold mb-7 text-purple">Gallery</h1>
            </div>
            

            <div class="grid grid-cols-4 justify-center gap-8">

                <div class="">
                    <img src="{{ asset('image/wa.jpg') }}" alt="" class="size-72 rounded-lg ">
                </div>
                <div class="">
                    <img src="{{ asset('image/IMG_0486.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/IMG_6595.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/IMG_6600.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/IMG_0558.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/wa6.jpg') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/IMG_0450.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/20240904_091739.jpg') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/IMG_6596.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/IMG_6406.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/20240903_092418.jpg') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/IMG_0558.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/WhatsApp Image 2024-09-03 at 11.16.36_06ea8ea9.png') }}" alt="" class="size-72 rounded-lg">
                </div>
            </div>

        </div>


    </section>

    @include ('landing.footer')
</body>
</html>