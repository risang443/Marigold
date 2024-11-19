@include('landing.head')
<body>
    @include('landing.pages.navbar')
    <section class="mt-8 mb-10 mx-5">
        
        <!-- Responsive grid layout for form and contact info -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
            
            <!-- Contact form -->
            <div class="md:border-r-2 md:border-r-black">
                <form action="" class="max-w-md mx-auto">
                    <div>
                        <label for="floating_name" class="text-black text-md font-['Poppins']">Name</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_name" id="floating_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    </div>
                    <div>
                        <label for="floating_email" class="text-black text-md font-['Poppins']">Email</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    </div>
                    <div>
                        <label for="floating_pn" class="text-black text-md font-['Poppins']">Phone Number</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_pn" id="floating_pn" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="message" class="block mb-2 text-md text-black font-['Poppins'] ">Message</label>
                        <textarea id="message" rows="10" class="block p-2.5 w-full text-sm" placeholder="Leave a comment..."></textarea>
                    </div>
                    <button type="submit" class="text-white bg-purple focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
                </form>
            </div>

            <!-- Contact information -->
            <div class="flex justify-center items-center my-7">
                <div class="bg-purple p-4 my-8 rounded-md">
                    <div class="m-5 p-5 max-w-lg">
                        <h1 class="text-xl text-white font-bold font-['Poppins'] mb-2">Contact Information</h1>
                        <p class="text-md text-white font-light font-['Poppins']">
                            If you have any questions, would like to explore collaboration opportunities, or require further information about our products, please feel free to reach out to us through the available channels. We are more than happy to assist you in answering your inquiries and providing the necessary information to help you gain a deeper understanding of the products we offer.
                        </p>
                        <div class="mt-3 flex flex-wrap">
                            <i class="fi fi-rr-envelope text-white font-['Poppins'] w-full mb-5"> ugmarigoldlaris@gmail.com</i>
                            <i class="fi fi-rr-phone-flip text-white font-['Poppins'] w-full mb-5"> +62 0000 0000 0000</i>
                            <i class="fi fi-rr-clock-two text-white font-['Poppins'] w-full mb-5"> 08:00 - 17:00</i>
                            <i class="fi fi-rr-building text-white font-['Poppins'] w-full mb-5"> Jl. Margonda Raya Pondok Cina, Depok Phone : 7863819, 7520981,7863788</i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    @include('landing.footer')
</body>
