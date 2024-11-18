<footer class="bg-purple pt-8 bottom-0 w-full">
    <div class="container mx-auto px-4">
      <!-- Grid for Footer Sections -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 pb-8">
        <!-- Placeholder Section -->
        <div class="ml-4 hidden md:flex">
          <!-- Optionally add content here -->
        </div>
  
        <!-- Social Media Section -->
        <div>
          <h1 class="text-white text-lg font-semibold font-['Poppins']">Social Media</h1>
          <ul class="text-white text-sm font-semibold font-['Poppins']">
            <li>
              <a
                class="hover:underline flex items-center gap-2"
                href="https://www.instagram.com/ug_marigold/profilecard/?igsh=cGNoc3htMG00Zzhp"
                target="_blank"
                rel="noopener noreferrer"
              >
                <i class="fi fi-brands-instagram"></i>
                Instagram
              </a>
            </li>
          </ul>
        </div>
  
        <!-- Contact Us Section -->
        <div>
          <h1 class="text-white text-lg font-semibold font-['Poppins']">Contact Us</h1>
          <!-- Add contact details here -->
        </div>
  
        <!-- Product Section -->
        <div>
          <h1 class="text-white text-lg font-semibold font-['Poppins']">Product</h1>
          <ul class="text-white text-sm font-semibold font-['Poppins']">
            <li><a class="hover:underline" href="">Overview</a></li>
          </ul>
        </div>
  
        <!-- Company Section -->
        <div>
          <h1 class="text-white text-lg font-semibold font-['Poppins']">Company</h1>
          <ul class="text-white text-sm font-semibold font-['Poppins']">
            <li><a class="hover:underline" href="/about">About Us</a></li>
            <li><a class="hover:underline" href="">Blog</a></li>
            <li><a class="hover:underline" href="">Career</a></li>
            <li><a class="hover:underline" href="/faq">FAQ</a></li>
            <li><a class="hover:underline" href="">Media kit</a></li>
          </ul>
        </div>
      </div>
  
      <!-- Divider -->
      <hr class="border-t border-gray-300 opacity-50 mb-4">
  
      <!-- Footer Bottom -->
      <div class="flex flex-col sm:flex-row justify-center items-center text-center">
        <p class="text-white text-sm font-semibold font-['Poppins']">
          &copy; UG Marigold Laris
        </p>
      </div>
    </div>
  </footer>
  
{{-- Script Javascript CDN Flowbite --}}
<script src="https://cdn.flowbite.com/flowbite.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
<script>
  // Mobile menu toggle
  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");
  const closeMenu = document.getElementById("close-menu");

  // Open mobile menu
  menuToggle.addEventListener("click", () => {
    mobileMenu.classList.remove("hidden");
  });

  // Close mobile menu
  closeMenu.addEventListener("click", () => {
    mobileMenu.classList.add("hidden");
  });

  // Dropdown toggle for desktop
  const dropdownButtons = document.querySelectorAll("[id^='dropdown-']");
  dropdownButtons.forEach(button => {
    button.addEventListener("click", () => {
      const dropdownId = button.id.replace('dropdown', 'dropdown-menu');
      const dropdownMenu = document.getElementById(dropdownId);
      
      // Toggle visibility
      dropdownMenu.classList.toggle("hidden");
    });
  });
</script>