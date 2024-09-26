@include('landing.head')
<body>
    @include('landing.pages.navbar')
    <section class=" bg-white mt-6 mb-10 flex justify-center flex-wrap">
        <div class="my-4 mx-5 flex justify-center w-screen p-4 ">
            <div class="flex justify-center items-center max-w-6xl bg-purple p-10 rounded-lg ">
                <h1 class="font-['Poppins'] font-bold text-8xl text-white text-center">UG MARIGOLD LARIS</h1>
            </div>
        </div>
        <div class="mx-5 my-4 flex ">
            <div class="p-16 mx-5 bg-cover rounded-lg bg-[url('{{ asset('image/test1.jpg')}}')] hover:shadow-2xl ">
                <a href="/shopoil" class="font-['Poppins'] font-bold text-8xl hover:text-amber-300 text-white text-center">Oil</a>
            </div>
            <div class="p-16 mx-5 bg-cover rounded-lg bg-[url('{{ asset('image/test2.jpg')}}')] hover:shadow-2xl ">
                <a href="/shopflowers" class="font-['Poppins'] font-bold text-8xl hover:text-amber-300 text-white text-center">Flowers</a>
            </div>
            <div class="p-16 mx-5 bg-contain rounded-lg bg-[url('{{ asset('image/test3.jpg')}}')] hover:shadow-2xl ">
                <a href="/shoptea" class="font-['Poppins'] font-bold text-8xl hover:text-amber-300 text-white text-center">Tea</a>
            </div>
        </div>
    </section>

    <div class="absolute bottom-0">
        @include('landing.footer')
    </div>
    
</body>