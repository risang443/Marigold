<nav class="bg-white border-gray-200 dark:border-gray-700">
  <div class="max-w-screen-2xl flex items-center justify-between mx-auto p-4 border-b-2 border-b-black">
    <!-- Mobile Menu Button -->
    <button id="menu-toggle" class="lg:hidden text-black">
      <i class="fi fi-rr-menu-burger"></i>
    </button>

    <!-- Desktop Navigation Links -->
    <div class="hidden w-full lg:block lg:w-auto" id="navbar-menu">
      <ul class="flex flex-col font-medium lg:flex-row lg:space-x-8 rtl:space-x-reverse">
        <li><a href="/" class="block py-2 px-3 text-black text-md lg:hover:text-blue-700">Home</a></li>
        <li><a href="/shop" class="block py-2 px-3 text-md text-gray-900 hover:text-blue-800">Shop</a></li>
        <li><a href="/experience" class="block py-2 px-3 text-md text-gray-900 hover:text-blue-800">Experience</a></li>

        <!-- Offering Dropdown -->
        <li class="relative">
          <button
            class="flex items-center py-2 px-3 text-md text-gray-900 hover:text-blue-800"
            id="dropdown-offering"
          >
            Offering
            <i class="fi fi-rr-angle-small-down ml-1"></i>
          </button>
          <div
            id="dropdown-menu-offering"
            class="hidden absolute z-10 bg-white rounded-lg shadow w-44"
          >
            <ul class="py-2 text-sm text-gray-700">
              <li><a href="/supply" class="block px-4 py-2 hover:text-blue-800">Supply</a></li>
              <li><a href="/demand" class="block px-4 py-2 hover:text-blue-800">Demand</a></li>
              <li><a href="/contactfarming" class="block px-4 py-2 hover:text-blue-800">Contact Farming</a></li>
              <li><a href="/investment" class="block px-4 py-2 hover:text-blue-800">Investment</a></li>
            </ul>
          </div>
        </li>

        <li><a href="/partnership" class="block py-2 px-3 text-md text-gray-900 hover:text-blue-800">Partnership</a></li>

        <!-- UG Smart Farm Monitoring Dropdown -->
        <li class="relative">
          <button
            class="flex items-center py-2 px-3 text-md text-gray-900 hover:text-blue-800"
            id="dropdown-monitoring"
          >
            UG Smart Farm Monitoring
            <i class="fi fi-rr-angle-small-down ml-1"></i>
          </button>
          <div
            id="dropdown-menu-monitoring"
            class="hidden absolute z-10 bg-white rounded-lg shadow w-56"
          >
            <ul class="py-2 text-sm text-gray-700">
              <li><a href="/plantmonitoring" class="block px-4 py-2 hover:text-blue-800">Plant Monitoring</a></li>
              <li><a href="/weathermonitoring" class="block px-4 py-2 hover:text-blue-800">Weather Monitoring</a></li>
            </ul>
          </div>
        </li>

        <!-- Visit Dropdown -->
        <li class="relative">
          <button
            class="flex items-center py-2 px-3 text-md text-gray-900 hover:text-blue-800"
            id="dropdown-visit"
          >
            Visit
            <i class="fi fi-rr-angle-small-down ml-1"></i>
          </button>
          <div
            id="dropdown-menu-visit"
            class="hidden absolute z-10 bg-white rounded-lg shadow w-44"
          >
            <ul class="py-2 text-sm text-gray-700">
              <li><a href="/farmfields" class="block px-4 py-2 hover:text-blue-800">Marigold Farm & Fields</a></li>
              <li><a href="/giftshop" class="block px-4 py-2 hover:text-blue-800">Gift Shop</a></li>
            </ul>
          </div>
        </li>

        <li><a href="/about" class="block py-2 px-3 text-md text-gray-900 hover:text-blue-800">About Us</a></li>
        <li><a href="/gallery" class="block py-2 px-3 text-md text-gray-900 hover:text-blue-800">Gallery</a></li>
        <li><a href="/faq" class="block py-2 px-3 text-md text-gray-900 hover:text-blue-800">FAQ</a></li>
        <li><a href="/contact" class="block py-2 px-3 text-md text-gray-900 hover:text-blue-800">Contact</a></li>
        <li><a href="/" class="block py-2 px-3 text-md text-gray-900 hover:text-blue-800">Shopping Cart</a></li>
        <li><a href="/" class="block py-2 px-3 text-md text-gray-900 hover:text-blue-800">Login</a></li>
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
      <li><a href="/" class="block py-1 px-3 text-black text-md">Home</a></li>
      <li><a href="/shop" class="block py-1 px-3 text-gray-900 hover:text-blue-800">Shop</a></li>
      <li><a href="/experience" class="block py-1 px-3 text-gray-900 hover:text-blue-800">Experience</a></li>
      
      <!-- Offering Dropdown -->
      <li class="relative">
        <button
          class="flex items-center py-1 px-3 text-md text-gray-900 hover:text-blue-800"
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

      <li><a href="/partnership" class="block py-1 px-3 text-md text-gray-900 hover:text-blue-800">Partnership</a></li>

      <!-- UG Smart Farm Monitoring Dropdown -->
      <li class="relative">
        <button
          class="flex items-center py-1 px-3 text-md text-gray-900 hover:text-blue-800"
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
          class="flex items-center py-1 px-3 text-md text-gray-900 hover:text-blue-800"
        >
          Visit
          <i class="fi fi-rr-angle-small-down ml-1"></i>
        </button>
        <ul class="py-1 text-sm text-gray-700 pl-4 space-y-2">
          <li><a href="/farmfields" class="block px-4 py-1 hover:text-blue-800">Marigold Farm & Fields</a></li>
          <li><a href="/giftshop" class="block px-4 py-1 hover:text-blue-800">Gift Shop</a></li>
        </ul>
      </li>

      <li><a href="/about" class="block py-1 px-3 text-md text-gray-900 hover:text-blue-800">About Us</a></li>
      <li><a href="/gallery" class="block py-1 px-3 text-md text-gray-900 hover:text-blue-800">Gallery</a></li>
      <li><a href="/faq" class="block py-1 px-3 text-md text-gray-900 hover:text-blue-800">FAQ</a></li>
      <li><a href="/contact" class="block py-1 px-3 text-md text-gray-900 hover:text-blue-800">Contact</a></li>
      <li><a href="/" class="block py-1 px-3 text-md text-gray-900 hover:text-blue-800">Shopping Cart</a></li>
      <li><a href="/login" class="block py-1 px-3 text-md text-gray-900 hover:text-blue-800">Login</a></li>
    </ul>
  </div>
</nav>


