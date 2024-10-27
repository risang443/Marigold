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
                    <img src="{{ asset('image/wa2.jpg') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/IMG_6595.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/IMG_6600.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/wa5.jpg') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/wa6.jpg') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/wa3.png') }}" alt="" class="size-72 rounded-lg">
                </div>
                <div class="">
                    <img src="{{ asset('image/wa4.png') }}" alt="" class="size-72 rounded-lg">
                </div>

            </div>

        </div>


    </section>

    @include ('landing.footer')
</body>
</html>