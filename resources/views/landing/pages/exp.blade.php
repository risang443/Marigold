@include('landing.head')
<body>
    @include('landing.pages.navbar')

    <section class="bg-white mt-8 mb-10 mx-5">
        <div class="flex justify-center flex-wrap">
            <h1 class="text-5xl font-['Poppins'] font-bold mb-7">Experience</h1>
        </div>
        
        <div class="grid grid-cols-2">
            <div class="flex justify-center flex-wrap p-4">
                <img class="rounded-xl" src="{{ asset('image/test2.jpg') }}" alt="">
                <p class="text-['Poppins'] test-lg font-medium ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor similique nulla quos eligendi libero ipsam minima accusamus blanditiis accusantium reprehenderit, ex impedit quibusdam molestiae magni nesciunt sunt architecto labore sequi dolore distinctio laborum cumque. Expedita, soluta. Non nostrum consequuntur voluptate, iusto aperiam incidunt libero nihil dignissimos repudiandae ex nisi culpa.</p>
            </div>
            <div class="flex justify-center flex-wrap p-4">
                <img class="rounded-xl" src="{{ asset('image/test2.jpg') }}" alt="">
                <p class="text-['Poppins'] test-lg font-medium ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor similique nulla quos eligendi libero ipsam minima accusamus blanditiis accusantium reprehenderit, ex impedit quibusdam molestiae magni nesciunt sunt architecto labore sequi dolore distinctio laborum cumque. Expedita, soluta. Non nostrum consequuntur voluptate, iusto aperiam incidunt libero nihil dignissimos repudiandae ex nisi culpa.</p>
            </div>
        </div>
    </section>


    @include('landing.footer')
</body>