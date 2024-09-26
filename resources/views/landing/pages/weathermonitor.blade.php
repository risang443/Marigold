@include('landing.head')
<body>
    @include('landing.pages.navbar')

    <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">UG Smart Monitoring</h1>
    <h1 class="m-1 p-2 text-purple font-['Poppins'] text-3xl text-center font-semibold">Weather Monitoring</h1>

    <section class="mt-5 mx-8 px-3 mb-4">
        <div class="grid grid-cols-3 justify-evenly gap-4">
            <div class="border-2 border-black flex justify-center flex-wrap">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">Suhu Udara</h1>
                <iframe width="450" height="260"  #cccccc;" src="https://thingspeak.com/channels/2629109/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">Tekanan Udara</h1>
                <iframe width="450" height="260"  #cccccc;" src="https://thingspeak.com/channels/2629109/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">Kecepatan Angin</h1>
                <iframe width="450" height="260"  #cccccc;" src="https://thingspeak.com/channels/2629109/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">Arah Angin</h1>
                <iframe width="450" height="260"  #cccccc;" src="https://thingspeak.com/channels/2629109/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">Intesitasi Cahaya</h1>
                <iframe width="450" height="260"  #cccccc;" src="https://thingspeak.com/channels/2629109/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">Kelembapan</h1>
                <iframe width="450" height="260"  #cccccc;" src="https://thingspeak.com/channels/2629109/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">Curah Hujan</h1>
                <iframe width="450" height="260"  #cccccc;" src="https://thingspeak.com/channels/2629109/charts/7?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold w-full">Gas</h1>
                <iframe width="450" height="260"  #cccccc;" src="https://thingspeak.com/channels/2629109/charts/8?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
        </div>

    </section>

    @include('landing.footer')
</body>