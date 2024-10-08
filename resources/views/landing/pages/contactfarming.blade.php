@include('landing.head')
<body>
    @include('landing.pages.navbar')
        <section class="mt-5 mx-8 px-3 mb-4">
            <div class="mt-6 p-4 flex justify-center items-center">
                <div class="grid grid-cols-2"> 
                    <div class="flex">
                        <img class="rounded-xl size-fit" src="{{ asset('image/pic1.jpg') }}" alt="">
                    </div>
                    <div class="ml-8 p-4">
                        <h1 class="text-4xl text-purple font-bold font-['Poppins']">GARDEN MARIGOLD 01</h1>
                        <p class="text-xl font-bold font-['Poppins'] mt-8">DESKRIPSI :</p>
                        <p class="text-xl font-light font-['Poppins'] mt-8 max-w-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta iure ratione tenetur labore optio, ut incidunt eum eveniet laboriosam rem tempore veniam maiores corrupti iste eius at? Omnis, eligendi cumque.</p>
                        <ul class="list-disc text-xl font-light font-['Poppins'] mt-3 ml-9 ">
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem ipsum dolor sit.</li>
                        </ul>
                        <div class="bg-[#407953] mt-8 max-w-lg py-2 rounded-lg text-xl font-bold text-white font-['Poppins'] flex justify-center">
                            <i class="fi fi-brands-whatsapp"> Contact Via WhatsApp</i>
                        </div>
                        <div class="mt-8 max-w-2xl">
                            <iframe class="rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d311.993102376204!2d107.20988961039328!3d-6.761889810336824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69abdef8752ecf%3A0xa2fd3c4aaa1a61d2!2sUG%20Techno%20Park!5e0!3m2!1sid!2sid!4v1728367303646!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @include('landing.footer')
</body>