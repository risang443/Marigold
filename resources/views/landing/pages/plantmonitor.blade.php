@include('landing.head')
<body>
    @include('landing.pages.navbar')

    <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">UG Smart Monitoring</h1>
    <h1 class="m-1 p-2 text-purple font-['Poppins'] text-3xl text-center font-semibold">Plant Monitoring</h1>

    <section class="mt-5 mx-8 px-3 mb-4">
        <!-- Grid Container with Tailwind responsive grid classes -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Each Data Card -->
            <div class="border-2 border-black flex flex-col items-center p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold mb-4">Kadar pH Tanah</h1>
                <div class="relative w-full aspect-video">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://thingspeak.com/channels/2629109/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
                        frameborder="0" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="border-2 border-black flex flex-col items-center p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold mb-4">Kadar Konduktivitas Listrik</h1>
                <div class="relative w-full aspect-video">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://thingspeak.com/channels/2629109/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
                        frameborder="0" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="border-2 border-black flex flex-col items-center p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold mb-4">Kadar Kelembapan Tanah</h1>
                <div class="relative w-full aspect-video">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://thingspeak.com/channels/2629109/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
                        frameborder="0" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="border-2 border-black flex flex-col items-center p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold mb-4">Suhu Tanah</h1>
                <div class="relative w-full aspect-video">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://thingspeak.com/channels/2629109/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
                        frameborder="0" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="border-2 border-black flex flex-col items-center p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold mb-4">Kadar Nitrogen Tanah</h1>
                <div class="relative w-full aspect-video">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://thingspeak.com/channels/2629109/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
                        frameborder="0" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="border-2 border-black flex flex-col items-center p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold mb-4">Kadar Fosfor Tanah</h1>
                <div class="relative w-full aspect-video">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://thingspeak.com/channels/2629109/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
                        frameborder="0" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="border-2 border-black flex flex-col items-center p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold mb-4">Kadar Potasium Tanah</h1>
                <div class="relative w-full aspect-video">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://thingspeak.com/channels/2629109/charts/7?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
                        frameborder="0" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="border-2 border-black flex flex-col items-center p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold mb-4">Kadar Potensial Redoks</h1>
                <div class="relative w-full aspect-video">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full"
                        src="https://thingspeak.com/channels/2629109/charts/8?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
                        frameborder="0" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    @include('landing.footer')
</body>
