@include('landing.head')
<body>
    @include('landing.pages.navbar')

    <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold">{{__("monitor.UGSmartMonitoring")}}</h1>
    <h1 class="m-1 p-2 text-purple font-['Poppins'] text-3xl text-center font-semibold">{{__("monitor.WeatherMonitoring")}}</h1>

    <section class="mt-5 mx-8 px-3 mb-4">
        <!-- Grid Container with Tailwind responsive grid classes -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Each Data Card -->
            <div class="border-2 border-black flex justify-center flex-wrap p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">{{__("monitor.airtemp")}}</h1>
                <iframe width="450" height="260" src="https://thingspeak.com/channels/2774125/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">{{__("monitor.press")}}</h1>
                <iframe width="450" height="260" src="https://thingspeak.com/channels/2774125/charts/7?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">{{__("monitor.velo")}}</h1>
                <iframe width="450" height="260" src="https://thingspeak.com/channels/2774125/charts/6?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            
            <div class="border-2 border-black flex justify-center flex-wrap p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">{{__("monitor.light")}}</h1>
                <iframe width="450" height="260" src="https://thingspeak.com/channels/2774125/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">{{__("monitor.humid2")}}</h1>
                <iframe width="450" height="260" src="https://thingspeak.com/channels/2774125/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold">{{__("monitor.fall")}}</h1>
                <iframe width="450" height="260" src="https://thingspeak.com/channels/2774125/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
            <div class="border-2 border-black flex justify-center flex-wrap p-4">
                <h1 class="text-black font-['Poppins'] text-2xl text-center font-bold w-full">{{__("monitor.gas")}}</h1>
                <iframe width="450" height="260" src="https://thingspeak.com/channels/2774125/charts/5?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
        </div>
    </section>

    @include('landing.footer')
</body>
