@extends('layouts.footer')
@extends('layouts.nav')

@section('content')
    <div class="h-60 relative">
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('{{ asset('media/dogrunning.jpg') }}');">
        </div>
        <div class="absolute inset-0 bg-black opacity-65"></div> 
        <h1 class=" absolute inset-0 flex items-center uppercase text-orange-500 justify-center text-4xl ">Shop Food</h1>
    </div>
    <div class="bg-white">
      <div>
        <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
          <div class="fixed inset-0 bg-black bg-opacity-25"></div>
          <div class="fixed inset-0 z-40 flex">
            <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl">
              <div class="flex items-center justify-between px-4">
                <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                <button id="closeBtn" type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400">
                  <span class="sr-only">Close menu</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
      
              <!-- Filters -->
              <form class="mt-4 border-t border-gray-200">
                <h3 class="sr-only">Categories</h3>
                <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                  <li>
                    <a href="#" class="block px-2 py-3">Dry Food</a>
                  </li>
                  <li>
                    <a href="#" class="block px-2 py-3">Wet Food</a>
                  </li>
                  <li>
                    <a href="#" class="block px-2 py-3">Travel Bags</a>
                  </li>
                  <li>
                    <a href="#" class="block px-2 py-3">Supplements</a>
                  </li>
                  <li>
                    <a href="#" class="block px-2 py-3">Toys & Accessories</a>
                  </li>
                </ul>
      

                <div class="border-t border-gray-200 px-4 py-6">
                  <h3 class="-mx-2 -my-3 flow-root">
                    <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                      <span class="font-medium text-gray-900">flavors/types</span>
                      <span class="ml-6 flex items-center">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </button>
                  </h3>
                  <div class="pt-6" id="filter-section-mobile-0">
                    <div class="space-y-6">
                      <div class="flex items-center">
                        <input id="filter-mobile-color-0" name="color[]" value="Beef" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">Beef</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-color-1" name="color[]" value="Chicken" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">Chicken</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-color-2" name="color[]" value="Fish" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">Fish</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-color-3" name="color[]" value="Lamb" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">Lamb</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-color-4" name="color[]" value="Turkey" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-mobile-color-4" class="ml-3 min-w-0 flex-1 text-gray-500">Turkey</label>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="border-t border-gray-200 px-4 py-6">
                  <h3 class="-mx-2 -my-3 flow-root">
                    <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-2" aria-expanded="false">
                      <span class="font-medium text-gray-900">Size</span>
                      <span class="ml-6 flex items-center">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </button>
                  </h3>
                  <div class="pt-6" id="filter-section-mobile-2">
                    <div class="space-y-6">
                      <div class="flex items-center">
                        <input id="filter-mobile-size-0" name="size[]" value="Small" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-mobile-size-0" class="ml-3 min-w-0 flex-1 text-gray-500">Small (100g)</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-size-1" name="size[]" value="Medium" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-mobile-size-1" class="ml-3 min-w-0 flex-1 text-gray-500">Medium (500g)</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-size-2" name="size[]" value="Large" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-mobile-size-2" class="ml-3 min-w-0 flex-1 text-gray-500">Large (1kg)</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-size-3" name="size[]" value="Extra Large" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-mobile-size-3" class="ml-3 min-w-0 flex-1 text-gray-500">Extra Large (5kg)</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-size-4" name="size[]" value="Bulk" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-mobile-size-4" class="ml-3 min-w-0 flex-1 text-gray-500">Bulk (10kg)</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>

            
            <div class="flex items-center">
                <div class="relative inline-block text-left">
                  <div>
                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                      Sort
                      <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                      </svg>
                    </button>
                  </div>
              
                  <div id="dropdown-menu" class="hidden absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                      <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
                      <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
                      <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
                      <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>
                      <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>
                    </div>
                  </div>
                </div>
              
                <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                  <span class="sr-only">View grid</span>
                  <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />
                  </svg>
                </button>
                <button type="button" id="filterButton" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                  <span class="sr-only">Filters</span>
                  <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
          </div>

          <section aria-labelledby="products-heading" class="pb-24 pt-6">
            <h2 id="products-heading" class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
              <!-- Filters -->
              <form id="filterMenu" class="hidden lg:block">
                <h3 class="sr-only">Categories</h3>
                <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                  <li>
                    <a href="#">Dry Food</a>
                  </li>
                  <li>
                    <a href="#">Wet Food</a>
                  </li>
                  <li>
                    <a href="#">Treats & Chews
                    </a>
                  </li>
                  <li>
                    <a href="#">Supplements</a>
                  </li>
                  <li>
                    <a href="#">Toys & Accessories</a>
                  </li>
                </ul>

                <div class="border-b border-gray-200 py-6">
                  <h3 class="-my-3 flow-root">
                    <!-- Expand/collapse section button -->
                    <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                      <span class="font-medium text-gray-900">flavors/types</span>
                      <span class="ml-6 flex items-center">
                        <!-- Expand icon, show/hide based on section open state. -->
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        <!-- Collapse icon, show/hide based on section open state. -->
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </button>
                  </h3>
                  <!-- Filter section, show/hide based on section state. -->
                  <div class="pt-6" id="filter-section-0">
                    <div class="space-y-4">
                      <div class="flex items-center">
                        <input id="filter-color-0" name="color[]" value="Beef" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-color-0" class="ml-3 text-sm text-gray-600">Beef</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-color-1" name="color[]" value="Chicken" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-color-1" class="ml-3 text-sm text-gray-600">Chicken</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-color-2" name="color[]" value="Fish" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-color-2" class="ml-3 text-sm text-gray-600">Fish</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-color-3" name="color[]" value="Lamb" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-color-3" class="ml-3 text-sm text-gray-600">Lamb</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-color-4" name="color[]" value="Turkey" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-color-4" class="ml-3 text-sm text-gray-600">Turkey</label>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="border-b border-gray-200 py-6">
                  <h3 class="-my-3 flow-root">
                    <!-- Expand/collapse section button -->
                    <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                      <span class="font-medium text-gray-900">Size</span>
                      <span class="ml-6 flex items-center">
                        <!-- Expand icon, show/hide based on section open state. -->
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        <!-- Collapse icon, show/hide based on section open state. -->
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </button>
                  </h3>
                  <!-- Filter section, show/hide based on section state. -->
                  <div class="pt-6" id="filter-section-2">
                    <div class="space-y-4">
                      <div class="flex items-center">
                        <input id="filter-size-0" name="size[]" value="Small" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-size-0" class="ml-3 text-sm text-gray-600">Small (100g)</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-size-1" name="size[]" value="Medium" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-size-1" class="ml-3 text-sm text-gray-600">Medium (500g)</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-size-2" name="size[]" value="Large" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-size-2" class="ml-3 text-sm text-gray-600">Large (1kg)</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-size-3" name="size[]" value="Extra Large" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-size-3" class="ml-3 text-sm text-gray-600">Extra Large (5kg)</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-size-4" name="size[]" value="Bulk" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-indigo-500">
                        <label for="filter-size-4" class="ml-3 text-sm text-gray-600">Bulk (10kg)</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <!-- Product grid -->
              <div class="lg:col-span-3">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <!-- Card 1 -->
                    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed nisi mauris.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="font-bold text-green-600">$19.99</span>
                                <button class="px-3 py-1 bg-orange-600 text-white rounded-md hover:bg-indigo-700">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Card 2 -->
                    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed nisi mauris.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="font-bold text-green-600">$24.99</span>
                                <button class="px-3 py-1 bg-orange-600 text-white rounded-md hover:bg-indigo-700">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Card 3 -->
                    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed nisi mauris.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="font-bold text-green-600">$14.99</span>
                                <button class="px-3 py-1 bg-orange-600 text-white rounded-md hover:bg-indigo-700">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Card 4 -->
                    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed nisi mauris.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="font-bold text-green-600">$29.99</span>
                                <button class="px-3 py-1 bg-orange-600 text-white rounded-md hover:bg-indigo-700">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <!-- Card 1 -->
                    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed nisi mauris.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="font-bold text-green-600">$19.99</span>
                                <button class="px-3 py-1 bg-orange-600 text-white rounded-md hover:bg-indigo-700">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Card 2 -->
                    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed nisi mauris.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="font-bold text-green-600">$24.99</span>
                                <button class="px-3 py-1 bg-orange-600 text-white rounded-md hover:bg-indigo-700">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Card 3 -->
                    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed nisi mauris.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="font-bold text-green-600">$14.99</span>
                                <button class="px-3 py-1 bg-orange-600 text-white rounded-md hover:bg-indigo-700">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                
                    <!-- Card 4 -->
                    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                        <img src="https://via.placeholder.com/300" alt="Placeholder Image" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Product Name</h3>
                            <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed nisi mauris.</p>
                            <div class="mt-4 flex items-center justify-between">
                                <span class="font-bold text-green-600">$29.99</span>
                                <button class="px-3 py-1 bg-orange-600 text-white rounded-md hover:bg-indigo-700">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                            
              </div>
            </div>
          </section>
        </main>
      </div>
</div>
<script>
     // Function to handle closing the dialog
     function closeDialog() {
        const dialog = document.querySelector('[role="dialog"]');
        dialog.classList.add('hidden');

        // Show the menu back by removing the 'hidden' class from the menu container
        const filterMenu = document.querySelector('.fixed.inset-0');
        filterMenu.classList.remove('hidden');
    }

    // Add click event listener to the close button
    const closeButton = document.querySelector('.lg\\:hidden [type="button"]');
    closeButton.addEventListener('click', closeDialog);

    // Add click event listener to the menu button
    const menuButton = document.getElementById('menu-button');
    const dropdownMenu = document.getElementById('dropdown-menu');

    menuButton.addEventListener('click', function () {
        const expanded = this.getAttribute('aria-expanded') === 'true' || false;
        this.setAttribute('aria-expanded', !expanded);
        dropdownMenu.classList.toggle('hidden');
    });

  // filer dropdown btn
  const menuItems = document.querySelectorAll('[role="menuitem"]');
  menuItems.forEach(item => {
      item.addEventListener('click', function () {
          console.log('Selected:', this.textContent);
      });
  });

// toggle aside menu 
  document.addEventListener("DOMContentLoaded", function() {
    const filterButton = document.getElementById("filterButton");
    const filterMenu = document.getElementById("filterMenu");

    filterButton.addEventListener("click", function() {
        filterMenu.classList.toggle("hidden");
    });
});

</script>





    
@section('abovefooter')
@endsection
@endsection
