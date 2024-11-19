<section class="bg-white mt-8">
    <div class="max-w-screen-2xl px-4 py-10 mx-auto">
      <div class="mb-10">
        <h1 class="text-4xl md:text-5xl tracking-tight leading-none font-['Poppins'] font-bold text-purple mb-10">
          UG Smart Farm Monitoring
        </h1>
      </div>
      
      <!-- Responsive Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <!-- Plant Monitoring -->
        <div class="">
          <a
            href="/plantmonitoring"
            class="flex flex-col sm:flex-row items-center bg-purple border border-gray-200 rounded-lg hover:bg-yellow hover:shadow-2xl"
          >
            <img
              class="object-cover w-full rounded-t-lg h-56 sm:h-auto sm:w-48 sm:rounded-none sm:rounded-l-lg"
              src="{{ asset('image/bg1.jpg') }}"
              alt="Plant Monitoring"
            />
            <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-white">
                Plant Monitoring
              </h5>
            </div>
          </a>
        </div>
  
        <!-- Weather Monitoring -->
        <div class="">
          <a
            href="/weathermonitoring"
            class="flex flex-col sm:flex-row items-center bg-purple border border-gray-200 rounded-lg hover:bg-yellow hover:shadow-2xl"
          >
            <img
              class="object-cover w-full rounded-t-lg h-56 sm:h-auto sm:w-48 sm:rounded-none sm:rounded-l-lg"
              src="{{ asset('image/bg2.jpg') }}"
              alt="Weather Monitoring"
            />
            <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-xl md:text-2xl font-bold tracking-tight text-white">
                Weather Monitoring
              </h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  