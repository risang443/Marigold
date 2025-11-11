@include('landing.head')

<body>
    @include('landing.pages.navbar')

    <section class="bg-white mt-6 mb-10 w-full">
        <div class="max-w-screen-xl px-4 py-6 mx-auto">
            <!-- Heading for Our Story -->
            <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold"> {{__("about.title1")}}</h1>

            <!-- Paragraph Content for Our Story -->
            <div class="flex flex-wrap justify-center items-center p-5 m-4">
                <p class="p-4 text-lg font-medium font-['Poppins'] text-center sm:text-base md:text-lg lg:text-xl">
                    {{__("about.caption1")}}
                </p>
                <p class="p-4 text-lg font-medium font-['Poppins'] text-center sm:text-base md:text-lg lg:text-xl">
                    {{__("about.caption12")}}
                </p>
                <p class="p-4 text-lg font-medium font-['Poppins'] text-center sm:text-base md:text-lg lg:text-xl">
                    {{__("about.caption13")}}
                </p>
            </div>
            
            <!-- Heading for Benefits of Marigold -->
            <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold"> {{__("about.title2")}} </h1>

            <!-- Paragraph Content for Benefits -->
            <div class="flex flex-wrap justify-center items-center p-5 m-4">
                <p class="p-4 text-lg font-medium font-['Poppins'] text-center sm:text-base md:text-lg lg:text-xl">
                    {{__("about.caption2")}}
                </p>
            </div>

            <!-- Heading for UG Store -->
            <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold"> {{__("about.title3")}} </h1>

            <!-- Paragraph Content for UG Store -->
            <div class="flex flex-wrap justify-center items-center p-5 m-4">
                <p class="p-4 text-lg font-medium font-['Poppins'] text-center sm:text-base md:text-lg lg:text-xl">
                    {{__("about.caption3")}}
                </p>
                <p class="p-4 text-lg font-medium font-['Poppins'] text-center sm:text-base md:text-lg lg:text-xl">
                    {{__("about.caption4")}}
                </p>
            </div>

            {{-- <h1 class="mt-8 p-2 text-purple font-['Poppins'] text-4xl text-center font-bold"> Introduction Video </h1>

            <!-- Paragraph Content for UG Store -->
            <div class="flex flex-wrap justify-center items-center p-5 m-4">
                
            </div> --}}
        </div>
    </section>

    @include('landing.footer')

</body>
</html>
