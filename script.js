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

  //highlight every 2 seconds

  const features = document.querySelectorAll('.feature-item');
  let currentIndex = 0;

  function highlightFeature() {
    // Remove highlight from all features
    features.forEach((feature) => feature.classList.remove('highlight'));

    // Add highlight to the current feature
    features[currentIndex].classList.add('highlight');

    // Move to the next feature, looping back to the start
    currentIndex = (currentIndex + 1) % features.length;
  }

  // Run highlightFeature every 2 seconds
  setInterval(highlightFeature, 2000);