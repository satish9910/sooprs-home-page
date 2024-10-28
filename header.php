<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero Section with Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }

  </script>
  <style>
.fade-enter {
  opacity: 0;
  transform: translateY(10px);
}
.fade-enter-active {
  opacity: 1;
  transform: translateY(0);
  transition: opacity 0.3s ease, transform 0.3s ease;
}

/* Progress fill animation */
.progress-bar {
  width: 4px;
  height: 100%;
  background-color: #d1d5db; /* Light gray */
  position: relative;
  margin-bottom: 10px;
}
.progress-fill {
  width: 100%;
  background-color: #0068ff;
  transition: height 0.3s ease;
}

/* Active circle */
.progress-circle {
  width: 10px;
  height: 10px;
  background-color: #d1d5db; /* Light gray */
  border-radius: 50%;
  margin: 8px 0;
  transition: background-color 0.3s ease;
}
.progress-circle.active {
  background-color: #0068ff;
}

/* Active text animation */
.active-text {
  color: #0068ff !important;
  font-size: 1.25rem;
  transition: color 0.3s ease, font-size 0.3s ease;
}
  </style>

</head>
<body class="bg-gray-50">
<nav class="bg-white p-2 px-[60px] fixed   w-full z-10">
  <div class="container mx-auto flex items-center justify-between lg:justify-between">
    <!-- Hamburger Menu for Mobile -->
    <button id="menu-toggle" class="lg:hidden text-gray-800 focus:outline-none mr-4">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>

    <!-- Logo - Centered in Mobile -->
    <div class="flex items-center  gap-8">
      <img src="images/sooprs_logo.png" alt="Sooprs Logo" class="h-8 lg:h-12 mx-auto lg:mx-0">

      <!-- Desktop Links -->
      <div class="hidden lg:flex items-center space-x-6">
        <div class="relative group">
        <a href="#" class="text-lg font-[400] text-gray-800 hover:text-blue-500 link" onclick="setActive(this); toggleDropdownDesktop(event)">Explore</a>
          <div class="absolute left-0 hidden group-hover:block bg-white shadow-lg mt-2 py-2 rounded-md w-40" id="explore-dropdown">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 1</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 2</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 3</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 4</a>
          </div>
        </div>
        <a href="#" class="text-lg font-[400] text-gray-800 hover:text-blue-500 link" onclick="setActive(this)">Projects</a>
        <a href="#" class="text-lg font-[400] text-gray-800 hover:text-blue-500 link" onclick="setActive(this)">Why Sooprs?</a>
      </div>
    </div>
    
    <!-- Right Side - Desktop Buttons -->
    <div class="hidden lg:flex items-center space-x-4">
      <a href="#" class="text-lg font-[400] text-gray-800 hover:text-blue-500 link" onclick="setActive(this)">Post a Project</a>
      <button class="border-2 border-blue-500 px-4 py-1 rounded-full text-blue-500 hover:bg-blue-500 hover:text-white transition">Join Now</button>
    </div>
  </div>
</nav>

<!-- Fullscreen Mobile Menu (Slide-in from Left) -->
<div id="mobile-menu" class="fixed inset-0 bg-white z-20 transform -translate-x-full transition-transform duration-300 lg:hidden">
  <div class="flex justify-between items-center p-4 border-b">
    <!-- Close Button -->
    <button id="close-menu" class="text-gray-800 focus:outline-none" onclick="closeMenu()">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
  </div>

  <!-- Mobile Menu Links -->
  <div class="flex flex-col items-center space-y-4 mt-8 text-lg font-semibold">
    <div class="relative group">
      <a href="#" class="text-gray-800 hover:text-blue-500 link" onclick="toggleDropdown()">Explore</a>
      <div class="mt-2 bg-white shadow-lg rounded-md py-2 space-y-2 w-40 hidden" id="explore-dropdown-mobile">
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 1</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 2</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 3</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Option 4</a>
      </div>
    </div>
    <a href="#" class="text-gray-800 hover:text-blue-500 link" onclick="setActive(this)">Projects</a>
    <a href="#" class="text-gray-800 hover:text-blue-500 link" onclick="setActive(this)">Why Sooprs?</a>
    <a href="#" class="text-gray-800 hover:text-blue-500 link" onclick="setActive(this)">Post a Project</a>
    <button class="w-full text-center border-2 border-blue-500 px-4 py-2 text-blue-500 hover:bg-blue-500 hover:text-white transition">Join Now</button>
  </div>
</div>
