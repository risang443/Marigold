<nav class="bg-white border-gray-200">
  <div class="max-w-screen-2xl flex items-center justify-center mx-auto p-4 border-b-2 border-b-black">
    <!-- Mobile Menu Button -->
    <button id="menu-toggle" class="lg:hidden text-black">
      <i class="fi fi-rr-menu-burger"></i>
    </button>

    <!-- Desktop Navigation Links -->
    <div class="hidden w-full lg:block lg:w-auto" id="navbar-menu">
      <ul class="flex flex-col font-medium lg:flex-row lg:space-x-6 rtl:space-x-reverse">
        <li><a href="{{ LaravelLocalization::localizeUrl('/') }}" class="block py-2 px-3 text-black text-sm lg:hover:text-blue-700">{{ __('menu.home') }}</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('shop')) }}" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">{{ __('menu.shop') }}</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('experience')) }}" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">{{ __('menu.experience') }}</a></li>

        <!-- Offering Dropdown -->
        <li class="relative">
          <button
            class="flex items-center py-2 px-3 text-sm text-gray-900 hover:text-blue-800"
            id="dropdown-offering"
          >
            {{ __('menu.offering') }}
            <i class="fi fi-rr-angle-small-down ml-1"></i>
          </button>
          <div
            id="dropdown-menu-offering"
            class="hidden absolute z-10 bg-white rounded-lg shadow w-44"
          >
            <ul class="py-2 text-sm text-gray-700">
              <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('supply')) }}" class="block px-4 py-2 hover:text-blue-800">{{ __('menu.supply') }}</a></li>
              <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('demand')) }}" class="block px-4 py-2 hover:text-blue-800">{{ __('menu.demand') }}</a></li>
              <li><a href="/contactfarming" class="block px-4 py-2 hover:text-blue-800">{{ __('routes.contactFarming') }}</a></li>
              <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('investment')) }}" class="block px-4 py-2 hover:text-blue-800">{{ __('menu.investment') }}</a></li>
            </ul>
          </div>
        </li>

        <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('partnership')) }}" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">{{ __('menu.partnership') }}</a></li>

        <!-- UG Smart Farm Monitoring Dropdown -->
        <li class="relative">
          <button
            class="flex items-center py-2 px-3 text-sm text-gray-900 hover:text-blue-800"
            id="dropdown-monitoring"
          >
            {{ __('menu.UGSmartFarmMonitoring') }}
            <i class="fi fi-rr-angle-small-down ml-1"></i>
          </button>
          <div
            id="dropdown-menu-monitoring"
            class="hidden absolute z-10 bg-white rounded-lg shadow w-56"
          >
            <ul class="py-2 text-sm text-gray-700">
              <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('plantmonitor')) }}" class="block px-4 py-2 hover:text-blue-800">{{ __('menu.plantMonitoring') }}</a></li>
              <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('weathermonitor')) }}" class="block px-4 py-2 hover:text-blue-800">{{ __('menu.weatherMonitoring') }}</a></li>
            </ul>
          </div>
        </li>

        <!-- Visit Dropdown -->
        <li class="relative">
          <button
            class="flex items-center py-2 px-3 text-sm text-gray-900 hover:text-blue-800"
            id="dropdown-visit"
          >
            {{ __('menu.visit') }}
            <i class="fi fi-rr-angle-small-down ml-1"></i>
          </button>
          <div
            id="dropdown-menu-visit"
            class="hidden absolute z-10 bg-white rounded-lg shadow w-44"
          >
            <ul class="py-2 text-sm text-gray-700">
              <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('farmfields')) }}" class="block px-4 py-2 hover:text-blue-800">{{ __('menu.marigoldFarmAndFields') }}</a></li>
              <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('giftshop')) }}" class="block px-4 py-2 hover:text-blue-800">{{ __('menu.giftShop') }}</a></li>
            </ul>
          </div>
        </li>

        <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('about')) }}" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">{{ __('menu.aboutUs') }}</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('gallery')) }}" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">{{ __('menu.gallery') }}</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('faq')) }}" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">{{ __('menu.faq') }}</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('contact')) }}" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">{{ __('menu.contact') }}</a></li>
        <li><a href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale(), route('cart')) }}" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">{{ __('menu.shoppingCart') }}</a></li>
        @auth
        <!-- Jika Sudah Login -->
        <li>
          <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">
              {{ __('menu.logout') }}
            </button>
          </form>
        </li>
        <!-- Opsional: Tampilkan Nama Pengguna -->
        <li>
          <span class="block py-2 px-3 text-sm text-gray-900">Hi, {{ Auth::user()->username }}</span>
        </li>
      @else
        <!-- Jika Belum Login -->
        <li><a href="/login" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">{{ __('menu.login') }}</a></li>
      @endauth

        <li class="relative inline-block text-left">
            <button 
                class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" 
                id="dropdownButton" 
                type="button"
                aria-expanded="true"
                aria-haspopup="true"
            >
                {{ strtoupper(LaravelLocalization::getCurrentLocale()) }}
                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 9.707a1 1 0 011.414 0L10 13.414l3.293-3.707a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>

            <div 
                class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" 
                id="dropdownMenu"
                role="menu" 
                aria-orientation="vertical" 
                aria-labelledby="dropdownButton"
            >
                <div class="py-1" role="none">
                    @foreach (LaravelLocalization::getSupportedLanguagesKeys() as $locale)
                        <a 
                            href="{{ LaravelLocalization::getLocalizedURL($locale) }}" 
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" 
                            role="menuitem"
                        >
                            {{ strtoupper($locale) }}
                        </a>
                    @endforeach
                </div>
            </div>
        </li>
      </ul>
    </div>
  </div>

  <!-- Mobile Navigation Pop-Up -->
  <div
    id="mobile-menu"
    class="fixed inset-0 bg-white z-50 hidden flex flex-col space-y-4 p-6"
  >
    <button id="close-menu" class="text-black self-end">
      <i class="fi fi-rr-cross"></i>
    </button>
    <ul class="flex flex-col space-y-2 font-medium">
      <li><a href="/" class="block py-1 px-3 text-black text-sm">Home</a></li>
      <li><a href="/shop" class="block py-1 px-3 text-gray-900 hover:text-blue-800">Shop</a></li>
      <li><a href="/experience" class="block py-1 px-3 text-gray-900 hover:text-blue-800">Experience</a></li>
      
      <!-- Offering Dropdown -->
      <li class="relative">
        <button
          class="flex items-center py-1 px-3 text-sm text-gray-900 hover:text-blue-800"
        >
          Offering
          <i class="fi fi-rr-angle-small-down ml-1"></i>
        </button>
        <ul class="py-1 text-sm text-gray-700 pl-4 space-y-2">
          <li><a href="/supply" class="block px-4 py-1 hover:text-blue-800">Supply</a></li>
          <li><a href="/demand" class="block px-4 py-1 hover:text-blue-800">Demand</a></li>
          <li><a href="/contactfarming" class="block px-4 py-1 hover:text-blue-800">Contact Farming</a></li>
          <li><a href="/investment" class="block px-4 py-1 hover:text-blue-800">Investment</a></li>
        </ul>
      </li>

      <li><a href="/partnership" class="block py-1 px-3 text-sm text-gray-900 hover:text-blue-800">Partnership</a></li>

      <!-- UG Smart Farm Monitoring Dropdown -->
      <li class="relative">
        <button
          class="flex items-center py-1 px-3 text-sm text-gray-900 hover:text-blue-800"
        >
          UG Smart Farm Monitoring
          <i class="fi fi-rr-angle-small-down ml-1"></i>
        </button>
        <ul class="py-1 text-sm text-gray-700 pl-4 space-y-2">
          <li><a href="/plantmonitoring" class="block px-4 py-1 hover:text-blue-800">Plant Monitoring</a></li>
          <li><a href="/weathermonitoring" class="block px-4 py-1 hover:text-blue-800">Weather Monitoring</a></li>
        </ul>
      </li>

      <!-- Visit Dropdown -->
      <li class="relative">
        <button
          class="flex items-center py-1 px-3 text-sm text-gray-900 hover:text-blue-800"
        >
          Visit
          <i class="fi fi-rr-angle-small-down ml-1"></i>
        </button>
        <ul class="py-1 text-sm text-gray-700 pl-4 space-y-2">
          <li><a href="/farmfields" class="block px-4 py-1 hover:text-blue-800">Marigold Farm & Fields</a></li>
          <li><a href="/giftshop" class="block px-4 py-1 hover:text-blue-800">Gift Shop</a></li>
        </ul>
      </li>

      <li><a href="/about" class="block py-1 px-3 text-sm text-gray-900 hover:text-blue-800">About Us</a></li>
      <li><a href="/gallery" class="block py-1 px-3 text-sm text-gray-900 hover:text-blue-800">Gallery</a></li>
      <li><a href="/faq" class="block py-1 px-3 text-sm text-gray-900 hover:text-blue-800">FAQ</a></li>
      <li><a href="/contact" class="block py-1 px-3 text-sm text-gray-900 hover:text-blue-800">Contact</a></li>
      <li><a href="/cart" class="block py-1 px-3 text-sm text-gray-900 hover:text-blue-800">Shopping Cart</a></li>
      @auth
      <li>
        <form action="{{ route('logout') }}" method="POST" class="inline">
          @csrf
          <button type="submit" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">
            Logout
          </button>
        </form>
      </li>
    @else
      <li><a href="/login" class="block py-2 px-3 text-sm text-gray-900 hover:text-blue-800">Login</a></li>
    @endauth
    </ul>
  </div>
</nav>


