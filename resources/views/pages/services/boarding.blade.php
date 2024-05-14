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
    <h1 class=" absolute inset-0 flex items-center uppercase text-orange-500 justify-center text-4xl ">Boarding</h1>
</div>
<div class="flex space-x-2 m-8">
  <div class="flex w-1/2 ">
    <div class="flex">
        <div class="bg-white">
            <div class="container mx-auto">
                <div class="flex flex-col overflow-y-scroll py-2 space-y-2 ">
                    <!-- Photo thumbnails -->
                    <button onclick="showPhoto(0)"  class="w-20 h-20 rounded-md border-2 border-gray-300">
                        <img src="{{asset('imgs/boarding1.jpg')}}"  alt="Photo 1" class="w-full h-full object-cover rounded-md hover:bg-opacity-80">
                    </button>
                    <button onclick="showPhoto(1)" class="w-20 h-20 rounded-md border-2 border-gray-300">
                        <img src="{{asset('imgs/boarding2.webp')}}" alt="Photo 2" class="w-full h-full object-cover rounded-md">
                    </button>
                    <button onclick="showPhoto(2)" class="w-20 h-20 rounded-md border-2 border-gray-300">
                        <img src="{{asset('imgs/boarding3.jpg')}}" alt="Photo 3" class="w-full h-full object-cover rounded-md">
                    </button>
                </div>
            </div>
        </div>
        <!-- Large photo display -->
            <div class="w-full h-96 m-8 border-2">
            <img id="largePhoto" src="{{asset('imgs/boarding1.jpg')}}" alt="Large Photo" class="w-full h-full object-cover">
        </div>
    </div> 
    </div>
   
<div class="w-1/2" >
    <div class="bg-white shadow-md rounded-lg p-8">
        <h2 class="text-black font-bold text-2xl mb-4">Boarding</h2>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
            <span class="font-bold text-lg">1000 Dh - 5000 Dh</span> 
        </div>
        <div class="mb-4">
            <label for="select1" class="block text-gray-700 font-bold mb-2">Boarding Option :</label>
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
                    <p class=" text-gray-600">Our extended stay service offers a convenient solution for more active dogs. Each 24 hour stay is fully supervised by our staff and includes daycare, relief walks & all feeding. Live stream available during operating hours to see how your pet is doing. For the pup who is more of a homebody, we offer the convenience and personalized attention of in-home overnight stays.</p>
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
    <div class="border-2 border-orange-400 rounded-lg hover:shadow-lg px-6 py-6 flex flex-col items-center">
        <svg fill="#000000" height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
        viewBox="0 0 511.999 511.999" xml:space="preserve">
            <g>
                <g>
                    <circle cx="92.996" cy="86.548" r="39.909"/>
                </g>
            </g>
            <g>
                <g>
                    <path d="M511.64,365.692c-0.803-1.667-2.83-2.653-5.028-1.594c-8.582,4.121-17.939,6.362-26.779,6.851
                        c-9.371,0.315-17.462-0.98-26.541-6.147c-0.875-4.685-2.828-9.151-5.778-13.015l-49.881-65.327c0,0,1.002-7.345,2.09-15.636
                        c-3.675,0.588-7.571,0.977-11.012,0.977c-9.303,0-15.437-2.865-18.233-8.517c-4.958-10.02,4.747-20.518,7.937-23.968
                        c2.602-2.815,6.13-6.119,9.263-8.594l-0.207-0.124c-3.825-2.286-8.12-3.427-12.415-3.427c-4.419,0-8.836,1.208-12.736,3.621
                        l-11.379-2.573c-2.029-0.459-4.209-0.047-5.961,1.225c-1.718,1.246-2.816,3.173-3.013,5.287l-0.876,9.403
                        c-0.715,7.672,3.68,14.907,10.82,17.806c3.074,1.248,5.49,3.723,6.682,6.82c1.19,3.096,1.05,6.547-0.391,9.534
                        c-4.438,9.197-10.542,22.378-14.806,33.691c-14.038-11.349-11.825-9.559-34.272-27.705c-4.278-3.461-10.558-2.797-14.018,1.486
                        c-3.461,4.281-2.796,10.558,1.486,14.019c50.848,41.104,78.688,61.514,96.03,74.522c2.334-5.624,5.841-11.037,10.495-15.819
                        c2.063-2.12,5.453-2.165,7.571-0.104c2.119,2.062,2.166,5.452,0.102,7.571c-5.364,5.511-8.344,12.109-10.479,18.667
                        c-2.808,8.625-3.553,28.346-0.05,39.95l-8.906,24.615c-1.872,5.177,0.806,10.892,5.982,12.765
                        c5.182,1.874,10.893-0.808,12.766-5.982l10.06-27.805c22.892-9.376,31.265-31.07,33.058-44.507
                        c10.211,2.197,18.656,1.871,28.44-0.28c10.017-2.392,20.177-6.847,28.86-13.199C511.9,369.171,512.41,367.289,511.64,365.692z"/>
                </g>
            </g>
            <g>
                <g>
                    <path d="M409.032,244.212c-2.582-5.219-7.232-8.392-10.578-8.392c-0.675,0-1.297,0.129-1.84,0.398
                        c-3.225,1.596-20.6,16.521-17.497,22.795c1.163,2.351,5.036,3.153,9.595,3.153c7.608,0,17.124-2.234,19.14-3.232
                        C411.077,257.338,412.135,250.485,409.032,244.212z"/>
                </g>
            </g>
            <g>
                <g>
                    <path d="M306.193,8.077c-52.418,0-95.064,42.645-95.064,95.064c0,14.424,3.245,28.099,9.018,40.358l-34.338,19.021l-47.476-12.89
                        c-4.875-6.715-12.771-11.099-21.705-11.139l-37.49-0.169c-7.206-0.032-14.125,2.821-19.213,7.924
                        c-4.942,4.957-7.748,11.636-7.857,18.618l0.004,1.519L4.821,224.027c-4.011,5.031-5.253,11.75-3.274,17.901
                        c4.575,14.237,17.89,55.68,24.006,74.713c3.231,10.048,14.035,15.711,24.228,12.433c10.096-3.249,15.698-14.078,12.433-24.228
                        l-20.4-63.408l45.652-57.268l-25.893,58.321l18.24,56.693c6.354,19.746-4.513,41.099-24.369,47.488
                        c-3.587,1.154-7.302,1.747-11.048,1.798l-4.863,30.419L1.702,472.121c-4.799,11.825,0.899,25.302,12.724,30.1
                        s25.302-0.899,30.1-12.724l38.821-95.671c0.658-1.621,1.129-3.313,1.406-5.041l12.472-78.033l20.287,78.937l1.91,91.601
                        c0.265,12.728,10.786,22.882,23.584,22.62c12.76-0.266,22.888-10.825,22.62-23.584l-1.965-94.278
                        c-0.037-1.778-0.28-3.548-0.723-5.271l-20.03-77.935l0.454-111.943l39.894,10.832c4.724,1.283,9.893,0.745,14.376-1.739
                        l45.919-25.437c16.742,14.702,38.659,23.645,62.638,23.645c52.418,0,95.063-42.645,95.063-95.063
                        C401.254,50.722,358.61,8.077,306.193,8.077z M306.193,175.367c-16.184,0-31.141-5.35-43.196-14.374
                        c3.558-5.735,3.999-13.17,0.497-19.493c-4.615-8.333-14.493-11.879-23.191-8.831c-4.059-9.022-6.339-19.012-6.339-29.53
                        c0-39.827,32.401-72.228,72.228-72.228c39.825,0,72.227,32.401,72.227,72.228S346.018,175.367,306.193,175.367z"/>
                </g>
            </g>
            </svg>
                       <div class="card-body mt-3 ">
            <h4 class="card-title">Training</h4>
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
        const photoUrls = ['{{asset('imgs/boarding1.jpg')}}', '{{asset('imgs/boarding2.webp')}}', '{{asset('imgs/boarding3.jpg')}}'];

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
