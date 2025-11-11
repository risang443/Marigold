<section class="bg-purple mt-8">
    <div class="max-w-screen-2xl px-4 py-10 mx-auto">
      <!-- Header -->
      <div class="flex justify-between items-center">
        <h1 class="text-5xl tracking-tight leading-none font-['Poppins'] font-bold text-white">
          {{ __('home.product') }}
        </h1>
        <a
          href="/shop"
          class="text-md tracking-tight leading-none font-['Poppins'] text-white hover:underline"
        >
          {{ __('home.viewAll') }}
        </a>
      </div>
  
      <!-- Product Display -->
      <div class="mt-8">
        <!-- Mobile List -->
        <div class="block lg:hidden space-y-6">
          <!-- Item 1 -->
          <div class="p-4 bg-white rounded-lg shadow-md">
            <div class="flex justify-center">
              <img
                class="rounded-lg object-cover"
                src="{{ asset('image/test1.jpg') }}"
                alt="Marigold Essential Oil"
              />
            </div>
            <div class="p-4">
              <h1 class="text-lg font-bold tracking-tight leading-loose font-['Poppins'] text-black">
                {{ __('home.essentialOil') }}
              </h1>
              <p class="text-md tracking-tight leading-loose font-['Poppins'] text-gray-700">
                {{ __('home.discover') }}
              </p>
            </div>
          </div>
  
          <!-- Item 2 -->
          <div class="p-4 bg-white rounded-lg shadow-md">
            <div class="flex justify-center">
              <img
                class="rounded-lg object-cover"
                src="{{ asset('image/test2.jpg') }}"
                alt="Marigold Flower Collection"
              />
            </div>
            <div class="p-4">
              <h1 class="text-lg font-bold tracking-tight leading-loose font-['Poppins'] text-black">
                {{ __('home.flowerCollection') }}
              </h1>
              <p class="text-md tracking-tight leading-loose font-['Poppins'] text-gray-700">
                {{ __('home.experience') }}
              </p>
            </div>
          </div>
  
          <!-- Item 3 -->
          <div class="p-4 bg-white rounded-lg shadow-md">
            <div class="flex justify-center">
              <img
                class="rounded-lg object-cover"
                src="{{ asset('image/test3.jpg') }}"
                alt="Marigold Petal Tea"
              />
            </div>
            <div class="p-4">
              <h1 class="text-lg font-bold tracking-tight leading-loose font-['Poppins'] text-black">
                {{ __('home.petalTea') }}
              </h1>
              <p class="text-md tracking-tight leading-loose font-['Poppins'] text-gray-700">
                {{ __('home.indulge') }}
              </p>
            </div>
          </div>
        </div>
  
        <!-- Desktop Grid -->
        <div class="hidden lg:grid grid-cols-3 gap-10">
          <!-- Card 1 -->
          <div class="p-4">
            <div class="flex justify-center">
              <img
                class="rounded-lg object-cover"
                src="{{ asset('image/test1.jpg') }}"
                alt="Marigold Essential Oil"
              />
            </div>
            <div class="p-4">
              <h1 class="text-lg text-white font-bold tracking-tight leading-loose font-['Poppins']">
                {{ __('home.essentialOil') }}
              </h1>
              <p class="text-md text-white tracking-tight leading-loose font-['Poppins']">
                {{ __('home.discover') }}
              </p>
            </div>
          </div>
  
          <!-- Card 2 -->
          <div class="p-4">
            <div class="flex justify-center">
              <img
                class="rounded-lg object-cover"
                src="{{ asset('image/test2.jpg') }}"
                alt="Marigold Flower Collection"
              />
            </div>
            <div class="p-4">
              <h1 class="text-lg text-white font-bold tracking-tight leading-loose font-['Poppins']">
                {{ __('home.flowerCollection') }}
              </h1>
              <p class="text-md text-white tracking-tight leading-loose font-['Poppins']">
                {{ __('home.experience') }}
              </p>
            </div>
          </div>
  
          <!-- Card 3 -->
          <div class="p-4">
            <div class="flex justify-center">
              <img
                class="rounded-lg object-cover size-96"
                src="{{ asset('image/test3.jpg') }}"
                alt="Marigold Petal Tea"
              />
            </div>
            <div class="p-4">
              <h1 class="text-lg text-white font-bold tracking-tight leading-loose font-['Poppins']">
                {{ __('home.petalTea') }}
              </h1>
              <p class="text-md text-white tracking-tight leading-loose font-['Poppins']">
                {{ __('home.indulge') }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  