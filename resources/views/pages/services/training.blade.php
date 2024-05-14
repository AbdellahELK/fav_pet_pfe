@extends('layouts.footer')
@extends('layouts.nav')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<div class="h-60 relative">
    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ asset('imgs/dogrunning.jpg') }}');">
    </div>
    <div class="absolute inset-0 bg-black opacity-65"></div> 
    <h1 class=" absolute inset-0 flex items-center uppercase text-orange-500 justify-center text-4xl ">Training</h1>
</div>
<div class="flex space-x-2 m-8">
  <div class="flex w-1/2 ">
    <div class="flex">
        <div class="bg-white">
            <div class="container mx-auto">
                <div class="flex flex-col overflow-y-scroll py-2 space-y-2 ">
                    <!-- Photo thumbnails -->
                    <button onclick="showPhoto(0)"  class="w-20 h-20 rounded-md border-2 border-gray-300">
                        <img src="{{asset('imgs/training.jpg')}}"  alt="Photo 1" class="w-full h-full object-cover rounded-md hover:bg-opacity-80">
                    </button>
                    <button onclick="showPhoto(1)" class="w-20 h-20 rounded-md border-2 border-gray-300">
                        <img src="{{asset('imgs/training1.jpg')}}" alt="Photo 2" class="w-full h-full object-cover rounded-md">
                    </button>
                    <button onclick="showPhoto(2)" class="w-20 h-20 rounded-md border-2 border-gray-300">
                        <img src="{{asset('imgs/training2.jpg')}}" alt="Photo 3" class="w-full h-full object-cover rounded-md">
                    </button>
                </div>
            </div>
        </div>
        <!-- Large photo display -->
            <div class="w-full h-96 m-8 border-2">
            <img id="largePhoto" src="{{asset('imgs/training.jpg')}}" alt="Large Photo" class="w-full h-full object-cover">
        </div>
    </div> 
    </div>
   
<div class="w-1/2" >
    <div class="bg-white shadow-md rounded-lg p-8">
        <h2 class="text-black font-bold text-2xl mb-4">training</h2>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
            <span class="font-bold text-lg">1950 Dh - 5650 Dh</span> 
        </div>
        <div class="mb-4">
            <label for="select1" class="block text-gray-700 font-bold mb-2">Training Option :</label>
            <select name="select1" id="select1" class="appearance-none border rounded w-full py-2 px-3 mb-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <!-- Options for select input -->
            </select>
        </div>
        <div class="mb-8 ">
            <label for="select1" class="block text-gray-700 font-bold mb-2">Date :</label>
            <input id="datepicker" class="appearance-none border rounded px-3 py-2 w-full leading-tight focus:outline-none focus:shadow-outline" type="text"
        placeholder="Select a date">
            </div>
            <div class="mb-5 flex items-center">
                <span class="cursor-pointer" onclick="decrement()">
        </span>
        <input type="number" id="quantity" name="quantity" min="0" class="appearance-none border mt-4 rounded w-16 text-center py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <span class="cursor-pointer" onclick="increment()">
        </span>
                    <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-md text-black px-32 mt-4 py-2 ml-5 w-30 font-bold rounded focus:outline-none focus:shadow-outline">Make a resrvation</button>
                    
                        <svg  class="ml-2 mt-2" height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#231F20" d="M23.024,39.274c0.189,0.212,0.461,0.333,0.745,0.333h0.001c0.284,0,0.556-0.122,0.745-0.334l13.184-14.771 c1.327-1.62,2.058-3.655,2.058-5.732c0-5.053-4.193-9.163-9.348-9.163c-2.538,0-4.904,0.98-6.652,2.725 c-1.748-1.744-4.114-2.725-6.652-2.725c-5.154,0-9.348,4.11-9.348,9.163c0,2.078,0.731,4.115,2.094,5.777 C9.979,24.703,19.967,35.859,23.024,39.274z M17.104,11.607c2.321,0,4.458,1.038,5.862,2.846c0.379,0.488,1.201,0.488,1.58,0 c1.404-1.809,3.541-2.846,5.862-2.846c4.052,0,7.348,3.213,7.348,7.163c0,1.64-0.555,3.184-1.577,4.433L23.769,37.107 c-4.576-5.111-12.165-13.59-12.405-13.869c-1.051-1.283-1.606-2.828-1.606-4.468C9.757,14.821,13.053,11.607,17.104,11.607z"></path> </g></svg>
    
                </div>
    </div>
    <div class="w-full mt-3 mb-8  shadow-md">
        <ul class="border rounded-lg divide-y divide-gray-300">
            <li>
                <button class="flex items-center justify-between w-full p-4  focus:outline-none" type="button"
                    onclick="toggleAccordion(event)">
                    <span class="text-lg font-bold">Details</span>
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M10 13.535l4.95-4.95 1.414 1.414-6.364 6.364-6.364-6.364 1.414-1.414z" />
                    </svg>
                </button>
                <div class="accordion-content hidden p-4">
                    <p class=" text-gray-600">Whether you have a new puppy or your old friend has picked up some bad habits, we’re here to help. Our training team has over 1,000 hours of experience, is GADT certified, ABC certified, CGC Evaluator certified, and specializes in a full range of positive reinforcement training – including puppy basics, advanced obedience and adolescent behavior modification.</p>
                </div>
            </li>
            <li>
                <button class="flex items-center justify-between w-full p-4 focus:outline-none" type="button"
                    onclick="toggleAccordion(event)">
                    <span class="text-lg font-bold">Requirements</span>
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M10 13.535l4.95-4.95 1.414 1.414-6.364 6.364-6.364-6.364 1.414-1.414z" />
                    </svg>
                </button>
                <div class="accordion-content hidden p-4 flex-wrap">
                    <h5 class="text-orange-500 font-bold">Health:</h5>
                    <p class="text-gray-600">All dogs must be free from parasites, ticks/fleas, and communicable diseases. Any dog that poses a risk to the health of the other dogs in our care will not be accepted at check-in. If our staff finds reason for concern while your dog is in Throw Me A Bone’s care, he/she will be separated from the group and we will contact you about picking them up and/or seeing a veterinarian. We will gladly welcome your dog back once they are healthy again and no longer pose a risk of infection.</p>
                      <h5 class="text-orange-500 font-bold">Vaccinations</h5>
                    <p class=" text-gray-600">We want all dogs to be safe and healthy. As such, and in compliance with the New York City Department of Health (NYCDOH) and the recommendation of the American Veterinary Medical Association, we require proof of the following vaccinations from your veterinarian prior to using any of our services.</p>
                </div>
            </li>
        </ul>
    </div>
    
</div>
</div>
<div class="m-8 mb-20">
    <h1 class="text-center font-bold text-4xl">Related services</h1>
    <div class="grid grid-cols-1 md:grid-cols-5 sm:grid-cols-3 gap-8 items-center justify-evenly mt-10">
        <div class="border-2 border-orange-400 hover:shadow-lg rounded-lg  px-6 py-6 flex flex-col items-center">
            <svg width="60px" height="60px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <defs>
                <style>.cls-1{fill:#283d23;}</style>
                </defs>
                <title/>
                <g>
                <polygon points="17 12 15 12 15 14.5 12.5 14.5 12.5 16.5 15 16.5 15 19 17 19 17 16.5 19.5 16.5 19.5 14.5 17 14.5 17 12"/> 
                <path d="M28,7.39A7.08,7.08,0,0,0,22.73,4a7.35,7.35,0,0,0-2.58.28,11.44,11.44,0,0,0-3.82,2.05L16,6.62l-.12-.1A13.4,13.4,0,0,0,14,5.23,8.29,8.29,0,0,0,9.27,4a6.16,6.16,0,0,0-1.42.28A6.86,6.86,0,0,0,5.11,6.07,10.49,10.49,0,0,0,4,7.39C.2,12.86,7.91,21.14,12.48,25.3c.56.52,1.08,1,1.52,1.34.65.56,1.14.95,1.38,1.14h1.24C18.31,26.45,33,14.53,28,7.39ZM16,25.71l-.48-.41c-.47-.39-1-.84-1.52-1.33C9.33,19.71,2.91,12.46,5.66,8.54a6.34,6.34,0,0,1,2.26-2.1A4,4,0,0,1,9.43,6,2.3,2.3,0,0,1,9.8,6a5.57,5.57,0,0,1,1.86.34l.46.18A10.34,10.34,0,0,1,14,7.6a10.69,10.69,0,0,1,1.29,1.06h1.43a10.9,10.9,0,0,1,3.36-2.22A5.51,5.51,0,0,1,22.56,6a1.77,1.77,0,0,1,.32,0,5.32,5.32,0,0,1,3.46,2.48C29.51,13.07,20.47,22,16,25.71Z"/>
                <path class="cls-1" d="M16,25.71l-.48-.41C20.09,21.14,27.8,12.86,24,7.39a10.66,10.66,0,0,0-1.1-1.33,5.32,5.32,0,0,1,3.46,2.48C29.51,13.07,20.47,22,16,25.71Z"/>
                </g>
                </svg>
            <div class="card-body mt-3 ">
                <h4 class="card-title">Day Care</h4>
            </div>
        </div>
        <div class="border-2 border-orange-400 hover:shadow-lg rounded-lg  px-6 py-6 flex flex-col items-center">
            <svg height="60px" width="60px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            viewBox="0 0 496.863 496.863" xml:space="preserve">
            <g>
                <g>
                    <path style="fill:#010002;" d="M397.225,376.505l8.765-8.764c-34.032-29.585-77.706-78.667-115.202-115.058
                        c4.627-9.247,1.835-20.696-7.007-26.578c-40.439-26.865-55.751-46.149-73.473-68.485c-7.938-10.007-16.158-20.356-27.052-32.173
                        c-1.001-1.09-2.092-2.036-3.245-2.854c-4.2-3.903-8.872-7.21-13.695-9.539c0,0-5.17-2.837-11.057-3.961
                        c-5.634-1.073-12.173-1.113-12.173-1.113h-0.154c-0.637,0.018-1.288,0.137-1.92,0.175c-0.472,0.021-0.929-0.039-1.402,0
                        c-0.771,0.084-1.553,0.246-2.325,0.355c-0.823,0.104-1.622,0.211-2.444,0.357c-40.544,6.36-83.214,37.981-130.265,96.637
                        c-7.187,8.959-5.752,22.042,3.206,29.225c3.838,3.076,8.435,4.572,13,4.572c6.086,0,12.117-2.661,16.225-7.78
                        c20.211-25.188,37.911-42.843,53.247-55.232l-17.072,79.668c-2.448,11.457,0.751,22.018,7.12,30.606l-5.375,82.018l-34.183,88.35
                        c-5.265,13.627,1.513,28.963,15.133,34.223c3.143,1.208,6.373,1.788,9.548,1.788c10.607,0,20.623-6.429,24.683-16.918
                        l35.633-92.14c0.965-2.503,1.546-5.134,1.725-7.804l3.131-47.737l31.441,49.67l26.036,95.287
                        c3.154,11.824,13.854,19.641,25.547,19.641c2.256,0,4.548-0.285,6.83-0.906c14.116-3.751,22.509-18.243,18.751-32.371
                        l-27.076-99.188c-0.683-2.591-1.772-5.067-3.206-7.327l-42.865-67.723c1.367-2.725,2.524-5.617,3.223-8.882l17.529-81.793
                        c16.409,20.108,35.285,40.285,73.989,65.986c3.536,2.35,7.525,3.479,11.484,3.479c4.021,0,7.931-1.295,11.348-3.544
                        C318.306,294.335,361.936,345.765,397.225,376.505z"/>
                    <circle style="fill:#010002;" cx="179.169" cy="57.468" r="53.546"/>
                    <path style="fill:#010002;" d="M342.466,382.65l-18.499-14.859c-4.182-3.357-10.297-2.695-13.659,1.489
                        c-3.36,4.185-2.693,10.299,1.489,13.66l18.878,15.163v41.222c0,0.228,0.029,0.447,0.065,0.663l-16.618,31.936
                        c-2.477,4.76-0.627,10.627,4.134,13.104c1.434,0.745,2.966,1.099,4.478,1.099c3.507,0,6.895-1.905,8.626-5.231l16.72-32.13
                        l18.709,32.492c1.798,3.122,5.066,4.869,8.43,4.869c1.645,0,3.312-0.418,4.838-1.298c4.65-2.678,6.25-8.618,3.572-13.268
                        l-16.325-28.349h60.462v33.196c0,5.365,4.351,9.716,9.717,9.716c5.365,0,9.716-4.351,9.716-9.716v-36.382
                        c0.04-0.229,0.069-0.462,0.069-0.702v-30.726l-45.255-25.949L342.466,382.65L342.466,382.65z"/>
                    <path style="fill:#010002;" d="M472.414,362.901c-6.006-5.659-8.02-12.281-14.763-17.081c-1.174-0.835-2.361-1.682-3.615-2.391
                        c-0.751-0.422-0.995-0.912-0.909-1.729c0.287-2.784,0.57-5.572,0.793-8.362c0.397-4.997-1.043-9.546-5.056-12.493
                        c-1.612-1.184-9.561-5.033-13.021,8.138c-0.756,2.867-1.774,5.717-3.136,8.331c-5.001,9.604-11.342,18.375-17.416,27.313
                        c-2.771,4.078-5.537,8.149-8.299,12.215l42.489,24.198c0,0,8.189-8.955,9.339-8.452c1.596,0.704,3.201,1.394,4.798,2.089
                        c4.679,2.034,9.557,2.978,14.668,2.677c8.687-0.505,17.731-5.118,18.559-15.531C497.608,372.267,474.444,364.813,472.414,362.901z
                        "/>
                </g>
            </g>
            </svg>                    
            <div class="card-body mt-3 ">
                <h4 class="card-title">Dog walking</h4>
            </div>
        </div>
        <div class="border-2 border-orange-400 hover:shadow-lg rounded-lg  px-6 py-6 flex flex-col items-center">
            <svg height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
            viewBox="0 0 511.999 511.999" xml:space="preserve">
            <path style="fill:#000000;" d="M502.19,418.095c-11.272-48.664-18.019-98.266-18.019-148.218V66.689c0-24.853-20.147-45-45-45
                h-113.18v262.796H440.16c-1.17,39.707-7.641,89.696-17.81,133.613c-1.205,5.204-1.854,10.735-1.854,16.469
                c0,20.068,7.95,37.651,19.874,47.468v0.392h0.484c6.264,5.002,13.587,7.882,21.418,7.882c7.83,0,15.154-2.882,21.418-7.882h0.484
                v-0.392c11.923-9.816,19.874-27.401,19.874-47.468C504.045,428.832,503.396,423.3,502.19,418.095z"/>
            <path style="fill:#dad6d6;" d="M502.19,418.095c-11.272-48.664-18.019-98.266-18.019-148.218v-94.068V66.689
                c0-24.853-20.147-45-45-45h-23.996c24.853,0,45,20.147,45,45v109.12v94.068c0,49.952,6.746,99.554,18.019,148.218
                c1.206,5.206,1.855,10.739,1.855,16.473c0,20.068-7.95,37.651-19.874,47.468v0.392h-0.484c-2.926,2.337-6.087,4.203-9.419,5.537
                c3.8,1.521,7.826,2.346,11.999,2.346c7.83,0,15.154-2.882,21.418-7.882h0.484v-0.392c11.923-9.816,19.874-27.401,19.874-47.468
                C504.045,428.832,503.396,423.3,502.19,418.095z"/>
            <path style="fill:#000000;" d="M7.997,423.759c-1.359,38.948,29.812,70.95,68.457,70.95c31.812,0,58.552-21.687,66.258-51.082
                l0.021,0.12l27.847-118.506l32.567-12.375l47.586-260.844c2.352-12.894-2.227-26.076-12.066-34.735l0,0l-98.949,319.681l0,0
                c-10.185,10.836-23.66,18.009-38.336,20.407l-10.884,1.778l0.005,0.004c-6.185-1.29-12.674-1.755-19.352-1.246
                C37.138,360.508,9.186,389.666,7.997,423.759z M37.439,426.209c0-21.548,17.468-39.015,39.016-39.015s39.015,17.468,39.015,39.015
                c0,21.547-17.468,39.015-39.015,39.015S37.439,447.758,37.439,426.209z"/>
            <g>
                <path style="fill:#000000;" d="M65.713,359.159l-0.005-0.004l8.581-1.402c-1.042,0.033-2.086,0.08-3.137,0.16
                    c-2.38,0.181-4.727,0.507-7.04,0.941C64.647,358.952,65.183,359.048,65.713,359.159z"/>
                <path style="fill:#ffffff;" d="M238.669,17.289L223.11,67.557l-44.752,245.31l-32.567,12.375l-27.847,118.506l-0.021-0.12
                    c-6.679,25.472-27.654,45.146-53.834,49.946c4.013,0.732,8.142,1.136,12.367,1.136c31.812,0,58.552-21.687,66.258-51.082
                    l0.021,0.12l27.847-118.506l32.567-12.375l47.586-260.844C253.086,39.129,248.508,25.947,238.669,17.289z"/>
            </g>
            <path style="fill:#000000;" d="M279.386,357.913c-6.678-0.509-13.166-0.043-19.352,1.246l0.005-0.004l-10.884-1.778
                c-14.677-2.397-28.152-9.571-38.337-20.407l0,0L111.871,17.289l0,0c-9.839,8.659-14.419,21.841-12.066,34.735l47.586,260.844
                l32.567,12.375l27.847,118.506l0.021-0.12c7.706,29.395,34.447,51.082,66.258,51.082c38.645,0,69.815-32.002,68.456-70.95
                C341.353,389.666,313.401,360.508,279.386,357.913z M274.085,465.226c-21.548,0-39.015-17.468-39.015-39.015
                c0-21.547,17.468-39.015,39.015-39.015c21.547,0,39.016,17.468,39.016,39.015C313.102,447.758,295.632,465.226,274.085,465.226z"/>
            <g>
           <path style="fill:#000000;" d="M103.082,69.99l82.637,266.979l0,0c10.185,10.836,23.66,18.009,38.336,20.407l10.884,1.778
               l-0.005,0.004c5.324-1.11,10.873-1.606,16.574-1.398l-2.352-0.384c-14.677-2.397-28.152-9.571-38.337-20.407l0,0l-98.949-319.68
               c-9.839,8.659-14.419,21.841-12.066,34.735L103.082,69.99z"/>
           <path style="fill:#000000;" d="M342.542,423.759c-1.189-34.092-29.141-63.251-63.156-65.846c-6.162-0.47-12.16-0.101-17.909,0.971
               c30.679,5.834,54.861,33.221,55.965,64.876c1.208,34.634-23.313,63.754-55.931,69.784c4.078,0.757,8.278,1.166,12.574,1.166
               C312.729,494.709,343.9,462.708,342.542,423.759z"/>
            </g>
            <path d="M509.94,416.303c-2.261-9.763-4.333-19.559-6.159-29.117c-0.824-4.316-4.992-7.142-9.306-6.321
                c-4.316,0.824-7.145,4.991-6.32,9.306c1.865,9.759,3.979,19.759,6.286,29.72c1.095,4.726,1.649,9.663,1.649,14.676
                c0,16.871-6.505,32.707-16.975,41.327c-0.065,0.054-0.129,0.108-0.192,0.162c-0.067,0.051-0.134,0.103-0.199,0.155
                c-5.034,4.02-10.724,6.144-16.454,6.144c-5.73,0-11.421-2.124-16.454-6.144c-0.066-0.052-0.133-0.104-0.199-0.155
                c-0.063-0.055-0.127-0.109-0.192-0.162c-10.47-8.621-16.975-24.456-16.975-41.327c0-5.012,0.555-9.949,1.649-14.674
                c10.837-46.801,16.897-92.29,18.012-135.203c0.055-2.143-0.757-4.22-2.255-5.758c-1.498-1.536-3.552-2.403-5.698-2.403H333.946
                v-21.591h95.879c4.393,0,7.955-3.56,7.955-7.955c0-4.394-3.562-7.954-7.955-7.954h-95.879v-22.812h95.879
                c4.393,0,7.955-3.56,7.955-7.955c0-4.394-3.562-7.954-7.955-7.954h-95.879v-22.812h95.879c4.393,0,7.955-3.56,7.955-7.955
                s-3.562-7.955-7.955-7.955h-95.879v-22.812h95.879c4.393,0,7.955-3.56,7.955-7.955c0-4.394-3.562-7.955-7.955-7.955h-95.879v-22.81
                h95.879c4.393,0,7.955-3.56,7.955-7.955c0-4.394-3.562-7.955-7.955-7.955h-95.879V61.332h43.978c4.393,0,7.954-3.56,7.954-7.955
                s-3.561-7.955-7.954-7.955h-43.978v-15.78H439.17c20.427,0,37.046,16.619,37.046,37.046v203.188c0,30.218,2.488,61.811,7.394,93.901
                c0.664,4.342,4.723,7.321,9.066,6.661c4.342-0.664,7.325-4.723,6.661-9.066c-4.785-31.297-7.211-62.08-7.211-91.497V66.688
                c0-29.199-23.755-52.955-52.955-52.955h-113.18c-4.393,0-7.954,3.56-7.954,7.955v262.796c0,4.394,3.561,7.954,7.954,7.954h105.943
                c-1.602,39.442-7.425,81.068-17.336,123.866c-1.366,5.9-2.059,12.044-2.059,18.264c0,21.014,7.889,40.372,21.2,52.26
                c0.889,1.337,2.171,2.388,3.681,2.991c7.522,5.532,16.074,8.446,24.848,8.446c8.773,0,17.326-2.913,24.848-8.446
                c1.51-0.602,2.791-1.655,3.681-2.991c13.311-11.888,21.2-31.246,21.2-52.26C511.999,428.349,511.306,422.205,509.94,416.303z"/>
            <path d="M403.981,45.423c-4.393,0-7.955,3.56-7.955,7.955s3.562,7.955,7.955,7.955h25.844c4.393,0,7.955-3.56,7.955-7.955
                s-3.562-7.955-7.955-7.955H403.981z"/>
            <path d="M279.991,349.981c-6.734-0.511-13.479-0.145-20.075,1.094l-9.478-1.548c-12.289-2.008-23.792-7.924-32.583-16.724
                l-6.455-20.854l47.159-258.499c2.836-15.547-2.772-31.692-14.637-42.133c-2.025-1.782-4.812-2.418-7.411-1.684
                c-2.596,0.73-4.644,2.727-5.442,5.304l-55.8,180.278L119.47,14.937c-0.798-2.577-2.847-4.574-5.442-5.304
                c-2.596-0.733-5.386-0.098-7.411,1.684C94.751,21.759,89.143,37.902,91.979,53.45l17.419,95.485
                c0.789,4.322,4.932,7.185,9.254,6.398c4.322-0.788,7.186-4.931,6.398-9.253l-17.42-95.485c-0.963-5.276-0.426-10.66,1.406-15.563
                l58.634,189.435c0,0,0,0,0,0.001l27.956,90.323c0,0.001,0.001,0.002,0.001,0.003l7.592,24.527c0.357,1.155,0.974,2.213,1.802,3.095
                c11.319,12.044,26.537,20.145,42.85,22.811l10.561,1.725c1.039,0.212,2.134,0.222,3.224-0.006
                c5.606-1.171,11.366-1.543,17.122-1.102c29.734,2.269,54.771,28.374,55.811,58.193c0.579,16.602-5.441,32.309-16.951,44.227
                c-11.516,11.924-26.985,18.492-43.557,18.492c-27.512,0-51.594-18.565-58.564-45.145c-0.057-0.218-0.124-0.434-0.198-0.644
                l-27.621-117.543c-0.605-2.573-2.448-4.677-4.918-5.616l-4.679-1.779c-0.003-0.001-0.006-0.003-0.01-0.004l-23.684-9l-24.602-134.87
                c-0.789-4.322-4.933-7.188-9.254-6.398c-4.322,0.788-7.186,4.931-6.398,9.253l24.982,136.94l-6.455,20.854
                c-8.79,8.8-20.292,14.716-32.581,16.724l-9.479,1.548c-6.585-1.236-13.355-1.606-20.076-1.093
                c-38.196,2.915-69.163,35.2-70.499,73.502c-0.731,20.954,6.872,40.782,21.406,55.834c14.541,15.056,34.074,23.349,55.001,23.349
                c34.38,0,64.52-22.962,73.671-55.976c0.143-0.36,0.261-0.733,0.352-1.12l24.792-105.503l24.792,105.503
                c0.091,0.386,0.209,0.76,0.352,1.12c9.153,33.014,39.292,55.976,73.671,55.976c20.927,0,40.459-8.292,55-23.349
                c14.536-15.05,22.138-34.88,21.407-55.834C349.156,385.181,318.188,352.895,279.991,349.981z M241.504,35.034
                c1.833,4.902,2.368,10.285,1.406,15.562l-41.683,228.48l-17.63-56.961L241.504,35.034z M135.217,440.967
                c-0.074,0.21-0.141,0.425-0.198,0.644c-6.969,26.581-31.051,45.145-58.564,45.145c-16.572,0-32.041-6.566-43.557-18.492
                c-11.51-11.918-17.53-27.625-16.949-44.227c1.039-29.819,26.076-55.924,55.809-58.193c1.56-0.119,3.139-0.179,4.694-0.179
                c4.172,0,8.353,0.431,12.429,1.281c1.081,0.224,2.168,0.218,3.202,0.01l10.585-1.728c16.313-2.666,31.531-10.766,42.849-22.811
                c0.828-0.88,1.445-1.94,1.802-3.095l4.977-16.082l9.717,3.693L135.217,440.967z"/>
            <path d="M274.085,473.18c25.9,0,46.971-21.07,46.971-46.97c0-25.9-21.071-46.971-46.971-46.971s-46.971,21.071-46.971,46.971
                C227.114,452.11,248.185,473.18,274.085,473.18z M274.085,395.149c17.128,0,31.062,13.934,31.062,31.062
                c0,17.127-13.934,31.061-31.062,31.061c-17.128,0-31.062-13.934-31.062-31.061C243.023,409.082,256.958,395.149,274.085,395.149z"/>
            <path d="M76.454,379.24c-25.899,0-46.97,21.071-46.97,46.971c0,25.9,21.071,46.97,46.97,46.97c25.9,0,46.971-21.07,46.971-46.97
                C123.425,400.311,102.354,379.24,76.454,379.24z M76.454,457.271c-17.127,0-31.061-13.934-31.061-31.061
                c0-17.128,13.934-31.062,31.061-31.062c17.128,0,31.062,13.934,31.062,31.062C107.516,443.337,93.582,457.271,76.454,457.271z"/>
            </svg>
            <div class="card-body mt-3 ">
                <h4 class="card-title">Grooming</h4>
            </div>
        </div>
        <div class="border-2 border-orange-400 rounded-lg hover:shadow-lg px-6 py-6 flex flex-col items-center">
            <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    width="60px" height="60px" viewBox="0 0 467.332 467.332"
                    xml:space="preserve">
            <g>
                <path d="M467.332,287.18l-19.429,16.28L229.705,43.112L19.726,303.277L0,287.353L216.241,19.431
                    c3.288-4.075,8.092-6.432,13.177-6.487c5.05-0.015,9.938,2.237,13.304,6.249L467.332,287.18z M226.513,66.857L62.688,269.844
                    l32.375,184.544h57.8l-15.706-108.558c-4.258-29.396,16.374-53.232,46.087-53.232h98.351c29.706,0,49.77,23.745,44.818,53.029
                    L308,454.377h47.977l47.647-184.539L233.415,66.796C231.485,64.491,228.405,64.521,226.513,66.857z M218.95,368.824
                    c8.831-4.605,10.707-18.469,4.189-30.96c-6.515-12.492-18.956-18.886-27.789-14.279c-8.831,4.605-10.705,18.468-4.189,30.96
                    C197.678,367.037,210.119,373.429,218.95,368.824z M195.015,370.834c-6.515-12.486-18.956-18.88-27.787-14.269
                    c-8.831,4.605-10.707,18.463-4.192,30.955c6.515,12.486,18.956,18.875,27.789,14.264
                    C199.656,397.179,201.532,383.322,195.015,370.834z M272.398,354.535c6.521-12.487,4.642-26.35-4.189-30.956
                    c-8.83-4.61-21.271,1.782-27.786,14.274c-6.518,12.492-4.642,26.354,4.189,30.961C253.442,373.419,265.883,367.031,272.398,354.535
                    z M296.356,356.585c-8.831-4.605-21.271,1.783-27.787,14.27c-6.52,12.486-4.641,26.35,4.189,30.955
                    c8.831,4.611,21.271-1.782,27.787-14.269C307.06,375.054,305.186,361.197,296.356,356.585z M264.212,407.975
                    c0.3-1.63,0.487-3.311,0.487-5.032c0-15.062-15.731-30.793-30.793-30.793c-15.061-0.01-30.785,15.722-30.785,30.782
                    c0,1.682,0.17,3.326,0.47,4.937c-9.76,0.497-14.022,12.014-14.022,21.896c0,10.207,8.267,18.469,18.471,18.469
                    c9.229,0,23.207-6.281,25.327-6.819c10.96,5.718,16.191,6.819,25.327,6.819c10.206,0,18.474-8.262,18.474-18.469
                    C277.171,420.244,273.459,408.986,264.212,407.975z"/>
            </g>
            </svg>                    
            <div class="card-body mt-3 ">
                <h4 class="card-title">Boarding</h4>
            </div>
        </div>
        <div class="border-2 border-orange-400 rounded-lg hover:shadow-lg  px-6 py-6 flex flex-col items-center">
            <svg  fill="#000000" width="60px" height="60px" viewBox="0 0 50 50" version="1.2" baseProfile="tiny" xmlns="http://www.w3.org/2000/svg" overflow="inherit"><path d="M18.48 18.875c2.33-.396 4.058-2.518 4.321-5.053.267-2.578.869-12.938-3.02-12.279-10.088 1.711-9.38 18.702-1.301 17.332zm13.273 0c8.077 1.37 8.785-15.621-1.303-17.333-3.888-.659-3.287 9.701-3.021 12.279.264 2.536 1.994 4.658 4.324 5.054zm-17.417 8.005c0-1.348-.481-2.57-1.256-3.459-1.275-1.666-5.328-5.035-6.323-4.172-2.077 1.806-2.01 6.251-.759 9.481.643 1.796 2.196 3.059 4.011 3.059 2.389 0 4.327-2.198 4.327-4.909zm29.137-7.631c-.993-.863-5.046 2.506-6.321 4.172-.775.889-1.257 2.111-1.257 3.459 0 2.711 1.94 4.909 4.327 4.909 1.816 0 3.37-1.263 4.013-3.059 1.248-3.23 1.317-7.675-.762-9.481zm-8.136 15.277c-3.676-1.833-3.562-5.363-4.398-8.584-.665-2.569-3.02-4.469-5.823-4.469-2.743 0-5.057 1.821-5.779 4.312-.895 3.082-.356 6.67-4.363 8.717-3.255 1.061-4.573 2.609-4.573 6.27 0 2.974 2.553 6.158 5.848 6.554 3.676.554 6.544-.17 8.867-1.494 2.323 1.324 5.189 2.047 8.871 1.494 3.293-.396 5.847-3.568 5.847-6.554-.001-3.741-1.235-5.135-4.497-6.246zm-4.337 4.474h-3.811l.005 4h-4.156l.006-4h-4.044v-4h4.045l-.006-4h4.156l-.005 4h3.81v4z"/></svg>                    
            <div class="card-body mt-3 ">
                <h4 class="card-title">Veterinary Care</h4>
            </div>
        </div>
        </div>
    </div>
<script>
    function toggleAccordion(event) {
        const button = event.target;
        const content = button.nextElementSibling;
        button.classList.toggle('active');
        content.classList.toggle('hidden');
        content.classList.toggle('flex');
    }
</script>
<script>
    function showPhoto(index) {
        const largePhoto = document.getElementById('largePhoto');
        const photoUrls = ['{{asset('imgs/training.jpg')}}', '{{asset('imgs/training1.jpg')}}', '{{asset('imgs/training2.jpg')}}'];

        largePhoto.src = photoUrls[index];
    }
</script>
<script>
    // JavaScript for the carousel
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;
  
    function showSlide(n) {
      slides.forEach(slide => slide.classList.add('hidden'));
      slides[n].classList.remove('hidden');
    }
  
    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }
  
    function prevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }
  
    document.getElementById('prevBtn').addEventListener('click', prevSlide);
    document.getElementById('nextBtn').addEventListener('click', nextSlide);
  
    // Show the first slide initially
    showSlide(currentSlide);
  </script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@3.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#datepicker", {
        // Configuration options for Flatpickr
        // You can customize the appearance and behavior here
    });
</script>
<script>
    function increment() {
        var input = document.getElementById('quantity');
        input.value = parseInt(input.value) + 1;
    }

    function decrement() {
        var input = document.getElementById('quantity');
        var value = parseInt(input.value) - 1;
        input.value = value < 0 ? 0 : value;
    }
</script>
@section('abovefooter')
@endsection
@endsection
