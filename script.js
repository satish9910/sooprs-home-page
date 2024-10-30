// Function to set active link
function setActive(element) {
    const links = document.querySelectorAll('.link');
    links.forEach(link => {
      link.classList.remove('text-blue-500'); // Remove active class from all links
    });
    element.classList.add('text-blue-500'); // Add active class to clicked link
  }

  // Function to toggle dropdown for mobile
  function toggleDropdown() {
    const dropdown = document.getElementById('explore-dropdown-mobile');
    dropdown.classList.toggle('hidden'); // Toggle visibility
  }
  // Function to toggle dropdown for desktop
function toggleDropdownDesktop(event) {
  event.preventDefault(); // Prevent default link behavior
  const dropdown = document.getElementById('explore-dropdown');
  dropdown.classList.toggle('hidden'); // Toggle visibility

  // Close dropdown on mouse leave
  dropdown.onmouseleave = function() {
    dropdown.classList.add('hidden');
  };
}

  // Function to close mobile menu
  function closeMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.add('-translate-x-full'); // Slide out
  }

  // Function to open mobile menu
  document.getElementById('menu-toggle').onclick = function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.remove('-translate-x-full'); // Slide in
  }


  







