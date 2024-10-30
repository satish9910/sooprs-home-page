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
<section class="grid grid-cols-3 gap-4 px-6 py-8">
    <div class="w-full h-full p-4 ml-8 bg-[rgba(242,247,255,0.40)] rounded-lg flex flex-col justify-start items-center gap-5">
        <!-- By Category Section -->
        <div class="w-full flex justify-between items-center cursor-pointer">
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

        <!-- <div class="flex justify-center items-center gap-52">
            <div class="text-lg font-semibold text-[#111111] font-poppins capitalize leading-9">Skills</div>
            <div class="w-3 h-1.5 border-2 border-[#111111]"></div>
        </div>

        <div class="flex flex-col justify-start items-start gap-4">
            <div class="flex flex-wrap gap-4">
                <div class="px-8 py-1 bg-[#0068FF] rounded-full flex justify-center items-center">
                    <div class="text-white text-sm font-medium font-poppins capitalize leading-9">Python</div>
                </div>
                <div class="px-8 py-1 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">CSS</div>
                </div>
                <div class="px-8 py-1 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">HTML</div>
                </div>
                <div class="px-8 py-1 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Django</div>
                </div>
                <div class="px-8 py-1 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Figma</div>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center gap-52">
            <div class="text-lg font-semibold text-[#111111] font-poppins capitalize leading-9">Language</div>
            <div class="w-3 h-1.5 border-2 border-[#111111]"></div>
        </div>

        <div class="flex flex-col justify-start items-start gap-4">
            <div class="flex flex-wrap gap-4">
                <div class="px-8 py-1 bg-[#0068FF] rounded-full flex justify-center items-center">
                    <div class="text-white text-sm font-medium font-poppins capitalize leading-9">English</div>
                </div>
                <div class="px-8 py-1 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Hindi</div>
                </div>
                <div class="px-8 py-1 bg-[#F5F5F5] rounded-full flex justify-center items-center">
                    <div class="text-[#444444] text-sm font-medium font-poppins capitalize leading-9">Bengali</div>
                </div>
            </div>
        </div>
         -->

        <div class="w-full flex justify-between items-center cursor-pointer">
            <div class="text-lg font-semibold text-[#111111] font-poppins capitalize leading-9">Bid Budget</div>
        </div>

        <div id="bidSection" class="slider-container">
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

    <div class="col-span-2 grid h-full gap-10">
        <p class="text-gray-600 -mb-6">Showing: <span class="font-semibold text-gray-900">1100</span> Search results</p>
        <!-- 1 -->
        <div class="relative w-full h-[max-content] bg-white shadow-sm border border-gray-200 rounded-lg overflow-hidden p-8">
            <div class="flex justify-between">
                <div class="text-gray-700 text-lg font-medium font-poppins">
                    *URGENT* C++ Assignment
                </div>
                <div class="text-gray-700 text-sm font-medium font-poppins">
                    12 Oct 2024
                </div>
            </div>
            <div class="mt-4 text-gray-900 text-sm font-inter font-normal">
                I need someone who can do a barber management system that needs to be done in an hour or two. It needs
                to be connected to a MyPHPadmin database and all data will be read from there. Will send functions
                needed, but it's pretty straightforward, just the...
            </div>
            <div class="mt-6 flex gap-2">
                <span class="bg-gray-100 text-gray-900 text-xs font-poppins font-normal py-2 px-4 rounded">
                    Web development
                </span>
                <span class="bg-gray-100 text-gray-900 text-xs font-poppins font-normal py-2 px-4 rounded">
                    Web
                </span>
                <span class="bg-gray-100 text-gray-900 text-xs font-poppins font-normal py-2 px-4 rounded">
                    Coding
                </span>
            </div>
            <div class="mt-4 flex justify-end">
                <div class="text-right">
                    <div class="text-gray-400 text-sm font-medium font-poppins">
                        15 bids placed
                    </div>
                    <div class="text-gray-700 text-lg font-medium font-poppins">
                        $10 - 30 USD
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="relative w-full h-[max-content] bg-white shadow-sm border border-gray-200 rounded-lg overflow-hidden p-8">
            <div class="flex justify-between">
                <div class="text-gray-700 text-lg font-medium font-poppins">
                    *URGENT* C++ Assignment
                </div>
                <div class="text-gray-700 text-sm font-medium font-poppins">
                    12 Oct 2024
                </div>
            </div>
            <div class="mt-4 text-gray-900 text-sm font-inter font-normal">
                I need someone who can do a barber management system that needs to be done in an hour or two. It needs
                to be connected to a MyPHPadmin database and all data will be read from there. Will send functions
                needed, but it's pretty straightforward, just the...
            </div>
            <div class="mt-6 flex gap-2">
                <span class="bg-gray-100 text-gray-900 text-xs font-poppins font-normal py-2 px-4 rounded">
                    Web development
                </span>
                <span class="bg-gray-100 text-gray-900 text-xs font-poppins font-normal py-2 px-4 rounded">
                    Web
                </span>
                <span class="bg-gray-100 text-gray-900 text-xs font-poppins font-normal py-2 px-4 rounded">
                    Coding
                </span>
            </div>
            <div class="mt-4 flex justify-end">
                <div class="text-right">
                    <div class="text-gray-400 text-sm font-medium font-poppins">
                        15 bids placed
                    </div>
                    <div class="text-gray-700 text-lg font-medium font-poppins">
                        $10 - 30 USD
                    </div>
                </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="relative w-full h-[max-content] bg-white shadow-sm border border-gray-200 rounded-lg overflow-hidden p-8">
            <div class="flex justify-between">
                <div class="text-gray-700 text-lg font-medium font-poppins">
                    *URGENT* C++ Assignment
                </div>
                <div class="text-gray-700 text-sm font-medium font-poppins">
                    12 Oct 2024
                </div>
            </div>
            <div class="mt-4 text-gray-900 text-sm font-inter font-normal">
                I need someone who can do a barber management system that needs to be done in an hour or two. It needs
                to be connected to a MyPHPadmin database and all data will be read from there. Will send functions
                needed, but it's pretty straightforward, just the...
            </div>
            <div class="mt-6 flex gap-2">
                <span class="bg-gray-100 text-gray-900 text-xs font-poppins font-normal py-2 px-4 rounded">
                    Web development
                </span>
                <span class="bg-gray-100 text-gray-900 text-xs font-poppins font-normal py-2 px-4 rounded">
                    Web
                </span>
                <span class="bg-gray-100 text-gray-900 text-xs font-poppins font-normal py-2 px-4 rounded">
                    Coding
                </span>
            </div>
            <div class="mt-4 flex justify-end">
                <div class="text-right">
                    <div class="text-gray-400 text-sm font-medium font-poppins">
                        15 bids placed
                    </div>
                    <div class="text-gray-700 text-lg font-medium font-poppins">
                        $10 - 30 USD
                    </div>
                </div>
            </div>
        </div>

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
    window.addEventListener('DOMContentLoaded', (event) => {
        fetch('https://sooprs.com/api2/public/index.php/get_all_leads', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error(error);
            });
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