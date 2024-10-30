<?php include "header.php"; ?>
<section class="h-full w-full pt-[60px]">
    <div class="relative w-full">
        <img src="images/browse-top.png" alt="" class="w-full h-[140px] object-cover filter brightness-50 contrast-200 ">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-5xl">
                Browse Project
            </h1>
        </div>
    </div>
</section>
<section class="relative grid grid-cols-3 gap-4 ">
    <!-- Drawer Trigger Button for small screens -->
    <button id="open-drawer-btn" class="lg:hidden absolute top-4 left-4 z-50 bg-blue-500 text-white rounded-full p-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>
    <div id="drawer" class="w-full hidden h-full px-4 py-10 bg-[rgba(242,247,255)] rounded-lg flex flex-col justify-start items-center gap-5 lg:relative lg:flex transition-transform duration-300 transform lg:translate-x-0 z-40">        <!-- Close Button for Drawer on Small Screens -->
        <button id="close-drawer-btn" class="lg:hidden absolute top-4 right-4 bg-red-500 text-white rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="flex mt-10 items-center bg-blue-50 rounded-lg px-4 py-2 shadow-sm w-full max-w-md">
            <img src="images/searchicon.svg" alt="">
            <input type="text" placeholder="Search Project" class="bg-transparent text-gray-400 w-full focus:outline-none">
        </div>

        <!-- By Category Section -->
        <div class="w-full flex justify-between items-center">
            <div class="text-lg font-semibold text-[#111111] font-poppins capitalize leading-9">Category</div>
        </div>

        <!-- Category Buttons -->
        <div class="flex flex-col justify-start items-start gap-4 overflow-hidden">
            <div class="flex flex-wrap gap-4">
                <div class=" px-8  bg-[#0068FF] rounded-full flex justify-center items-center">
                    <div class="text-white text-sm font-medium font-poppins capitalize leading-9">Al</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Web Development</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">SEO</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Internet of Things</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Digital Marketing</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Graphic Designing</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">App Development</div>
                </div>
            </div>
        </div>


        <!-- <div class="w-full flex justify-between items-center cursor-pointer">
            <div class="text-lg font-semibold text-[#111111] font-poppins capitalize leading-9">Skills</div>
        </div>

        <div class="flex flex-col justify-start items-start gap-4">
            <div class="flex flex-wrap gap-4">
                <div class="px-7 bg-[#0068FF] rounded-full flex justify-center items-center">
                    <div class="text-white text-sm font-medium font-poppins capitalize leading-9">Python</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">CSS</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">HTML</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Django</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Figma</div>
                </div>
            </div>
        </div> -->



        <!-- <div class="w-full flex justify-between items-center cursor-pointer">
            <div class="text-lg font-semibold text-[#111111] font-poppins capitalize leading-9">Language</div>
        </div> -->

        <!-- <div class="flex flex-col justify-start items-start gap-4">
            <div class="flex flex-wrap gap-4">
                <div class="px-7 bg-[#0068FF] rounded-full flex justify-center items-center">
                    <div class="text-white text-sm font-medium font-poppins capitalize leading-9">English</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Hindi</div>
                </div>
                <div class="px-7 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Bengali</div>
                </div>
            </div>
        </div> -->


        <div class="w-full flex justify-between items-center cursor-pointer">
            <div class="text-lg font-semibold text-[#111111] font-poppins capitalize leading-9">Bid Budget</div>
        </div>

        <div id="bidSection" class="slider-container px-6">
            <input type="range" id="slider" min="0" max="100" value="50" class="slider">
            <div class="slider-buttons">
                <div id="minBtn" class="px-8 py-1 border border-[#0068FF] text-gray-400 rounded-md flex items-center cursor-pointer">
                    <div class="text-xs font-medium font-inter capitalize">Min</div>
                </div>
                <div id="maxBtn" class="px-8 py-1 border border-[#0068FF] text-gray-400 rounded-md flex items-center cursor-pointer">
                    <div class="text-xs font-medium font-inter capitalize">Max</div>
                </div>
            </div>
        </div>
    </div>

    <div id="result" class="col-span-2 grid h-full gap-10 p-10">
        <p class="text-gray-600 -mb-6">Showing: <span class="font-semibold text-gray-900" id="search-results-count">0</span> Search results</p>
        <div id="leads-container"></div>
        <button id="show-more" class="text-blue block mt-4">Show more</button>
    </div>
</section>

<style>
    .transition-max-height {
        transition: max-height 0.5s ease-in-out;
    }

    .max-h-0 {
        max-height: 0;
        /* Collapsed state */
    }

    .max-h-full {
        max-height: 500px;
        /* Expanded state - set to a value larger than the content height */
    }

    .slider-container {
        display: grid;
        align-items: center;
        gap: 10px;
    }

    .slider {
        /* -webkit-appearance: none; */
        width: 300px;
        height: 6px;
        background: #e5e5e5;
        border-radius: 5px;
        outline: none;
    }

    @media (max-width: 900px) {
        .slider {
            width: 200px;
        }
        #drawer{
            display: block;
            width: 100vw;
        }
        #result{
            grid-column: span 3;
        }
    }

    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 20px;
        height: 20px;
        background-color: #007bff;
        border-radius: 50%;
        cursor: pointer;
    }

    .slider-buttons {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
    }

    button {
        border: 1px solid #007bff;
        background-color: transparent;
        color: #007bff;
        border-radius: 10px;
        padding: 5px 10px;
        cursor: pointer;
    }

    button:hover {
        background-color: #f0f0f0;
    }

    
</style>

<script>
    let offset = 0;
    const limit = 10; // Set the limit for each fetch

    function fetchLeads() {
        const formData = new URLSearchParams();
        formData.append('offset', offset);
        formData.append('limit', limit);

        fetch('https://sooprs.com/api2/public/index.php/get_all_leads', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: formData.toString()
            })
            .then(response => response.json())
            .then(data => {
                const leadsContainer = document.getElementById('leads-container');
                const searchResultsCount = document.getElementById('search-results-count');

                // Update the search results count
                searchResultsCount.textContent = parseInt(searchResultsCount.textContent) + data.msg.length;

                // Map through the leads and display them
                data.msg.forEach(lead => {
                    const leadElement = document.createElement('div');
                    leadElement.className = "relative w-full h-[max-content] bg-white shadow-sm border border-gray-200 rounded-lg overflow-hidden p-5 my-4";

                    leadElement.innerHTML = `
                        <div class="flex justify-between">
                            <div class="text-gray-700 text-lg font-medium font-poppins">
                                ${lead.project_title || "No title available"}
                            </div>
                            <div class="text-gray-700 text-sm font-medium font-poppins">
                                ${lead.createdDate}
                            </div>
                        </div>
                        <div class="mt-4 text-gray-900 text-sm font-inter font-normal">
                            ${lead.description || "No description available"}
                        </div>
                        <div class="mt-6 flex gap-2">
                            <span class="bg-gray-100 text-gray-900 text-xs font-poppins font-normal py-2 px-4 rounded">
                                ${lead.service_name}
                            </span>
                        </div>
                        <div class="mt-4 flex justify-end">
                            <div class="text-right">
                                <div class="text-gray-400 text-sm font-medium font-poppins">
                                    ${lead.num_leads} bids placed
                                </div>
                                <div class="text-gray-700 text-[20px] font-medium font-poppins flex items-center gap-1">
                                  <img src="images/wallet.png">  <span>  $${lead.min_budget} - ${lead.max_budget_amount} USD </span>
                                </div>
                            </div>
                        </div>
                    `;

                    // Append each lead to the container
                    leadsContainer.appendChild(leadElement);
                });

                // Increment the offset for the next fetch
                offset += 1;
            })
            .catch(error => {
                console.error(error);
            });
    }

    // Fetch initial leads on page load
    window.addEventListener('DOMContentLoaded', fetchLeads);

    // Fetch more leads on button click
    document.getElementById('show-more').addEventListener('click', fetchLeads);
</script>


<script>
    const drawer = document.getElementById('drawer');
    const openDrawerBtn = document.getElementById('open-drawer-btn');
    const closeDrawerBtn = document.getElementById('close-drawer-btn');

    openDrawerBtn.addEventListener('click', () => {
        drawer.classList.remove('-translate-x-full');
    });

    closeDrawerBtn.addEventListener('click', () => {
        drawer.classList.add('-translate-x-full');
    });


    const slider = document.getElementById("slider");
    const minBtn = document.getElementById("minBtn");
    const maxBtn = document.getElementById("maxBtn");

    minBtn.addEventListener("click", () => {
        slider.value = slider.min;
    });

    maxBtn.addEventListener("click", () => {
        slider.value = slider.max;
    });
</script>