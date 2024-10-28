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
  $(document).ready(function () {
    $('.slider').slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      centerMode: true,
      prevArrow: '<button class="slick-prev bg-blue-500 w-10 h-10 rounded-full flex items-center justify-center text-white" type="button"><</button>',
      nextArrow: '<button class="slick-next bg-blue-500 w-10 h-10 rounded-full flex items-center justify-center text-white" type="button">></button>',
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  
    // Function to toggle arrow visibility
    function updateArrowVisibility(slick) {
      const $prevArrow = $('.slick-prev');
      const $nextArrow = $('.slick-next');
      const currentSlide = slick.currentSlide;
      const slidesToShow = slick.options.slidesToShow;
      const slideCount = slick.slideCount;
      const lastFullyVisibleSlide = slideCount - slidesToShow;
  
      // Hide the prevArrow only if we are at the very first slide
      $prevArrow.toggleClass('hidden', currentSlide === 0);
  
      // Hide the nextArrow only if we've reached the last fully visible slide
      $nextArrow.toggleClass('hidden', currentSlide >= lastFullyVisibleSlide);
    }
  
    // Trigger arrow visibility check on slider initialization
    $('.slider').on('init', function(event, slick) {
      updateArrowVisibility(slick);
    });
  
    // Trigger arrow visibility check after each slide change
    $('.slider').on('afterChange', function(event, slick) {
      updateArrowVisibility(slick);
    });
  
    // Initialize Slick to trigger the 'init' event
    $('.slider').slick('slickGoTo', 0, true);
  });
  

  

