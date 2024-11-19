@include('landing.head')
<body class="min-h-screen flex flex-col">
    @include('landing.pages.navbar')

    <!-- Main content section -->
    <section class="bg-white mt-6 mb-10 flex justify-center flex-wrap flex-grow">
        <div class="my-4 mx-5 flex justify-center w-full p-4">
            <div class="flex justify-center items-center max-w-6xl bg-purple p-10 rounded-lg">
                <h1 class="font-['Poppins'] font-bold text-6xl md:text-8xl text-white text-center">UG MARIGOLD LARIS</h1>
            </div>
        </div>

        <!-- Category Section with Responsive Grid -->
        <div class="mx-5 my-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Oil Category -->
            <div class="p-16 mx-5 bg-cover rounded-lg bg-[url('{{ asset('image/test1.jpg')}}')] bg-center hover:shadow-2xl transition-all">
                <a href="/shopoil" class="font-['Poppins'] font-bold text-4xl sm:text-6xl md:text-8xl text-white text-center hover:text-amber-300">Oil</a>
            </div>

            <!-- Flowers Category -->
            <div class="p-16 mx-5 bg-cover rounded-lg bg-[url('{{ asset('image/test2.jpg')}}')] bg-center hover:shadow-2xl transition-all">
                <a href="/shopflowers" class="font-['Poppins'] font-bold text-4xl sm:text-6xl md:text-8xl text-white text-center hover:text-amber-300">Flowers</a>
            </div>

            <!-- Tea Category -->
            <div class="p-16 mx-5 bg-cover rounded-lg bg-[url('{{ asset('image/test3.jpg')}}')] bg-center hover:shadow-2xl transition-all">
                <a href="/shoptea" class="font-['Poppins'] font-bold text-4xl sm:text-6xl md:text-8xl text-white text-center hover:text-amber-300">Tea</a>
            </div>
        </div>
    </section>

    @include('landing.footer')
</body>
</html>
