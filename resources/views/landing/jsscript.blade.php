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