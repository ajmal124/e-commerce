@props(['classes'])
<div class="bg-black h-fit lg:h-[42px] flex {{$classes['form']}} w-full">


  <div x-data="{ isOpen: false }" class="lg:hidden mt-1">
    <button @click="isOpen = !isOpen" class="text-white focus:outline-none absolute left-2">
      <span class="block w-6 h-1 bg-white mb-1 rounded-lg"></span>
      <span class="block w-6 h-1 bg-white mb-1 rounded-lg"></span>
      <span class="block w-6 h-1 bg-white rounded-lg"></span>
    </button>
  
    <div x-show="isOpen" @click.away="isOpen = false" class="absolute top-5 left-0 mt-2 py-2 bg-white rounded shadow-lg z-20">
      <!-- Dropdown content -->
      <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-200">Option 1</a>
      <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-200">Option 2</a>
      <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-200">Option 3</a>
    </div>
  </div>


    <form class="flex h-full justify-end lg:mr-20">
        <div class="relative h-full">
            <input type="text" class=" lg:border-2 border-black text-black text-[8px] lg:text-sm bg-white lg:pl-5 lg:pr-[28rem] h-full px-8 lg:px-0" placeholder="Search for Products" required>
            <div class="absolute inset-y-0 right-0 flex items-center pr-1 lg:pr-3 pointer-events-none">
                <svg aria-hidden="true" class="w-3 lg:w-5 text-black" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
        </div>
        <div class="hidden bg-white lg:flex border-2 border-black px-2" x-data="{ open: false }">
            <p class="text-sm my-auto">All</p>
            <img src="{{asset('images/img-1.png')}}" alt="" class="w-5 h-5 my-auto "  @click="open = !open">
            <div class=" mt-9 absolute z-20">
                <ul x-show="open" @click.away="open = false" class="mt-2 bg-white border rounded shadow">
                  <li class="px-4 py-2">Category 1</li>
                  <li class="px-4 py-2">Category 2</li>
                  <li class="px-4 py-2">Category 3</li>
                  <!-- Add more categories as needed -->
                </ul>
              </div>
        </div>
    </form>
    <div x-data="{ isOpen: false }" @click.away="isOpen = false" class="lg:flex lg:my-auto lg:px-2 lg:-3 xl:mx-6 hidden">
        <!-- Language Selector Button -->
        <img src="{{asset('images/img-2.png')}}" @click="isOpen = !isOpen" class=" lg:h-3 lg:bg-white lg:my-auto lg:mr-1">
        <p class="lg:text-sm lg:text-white">ENG</p>
        <img src="{{asset('images/img-3.png')}}" @click="isOpen = !isOpen" class="lg:flex lg:items-center lg:h-2 lg:my-auto lg:mt-2 lg:ml-1">
        <ul x-show="isOpen" @click.away="open = false" class="lg:py-2 lg:w-32 lg:bg-white lg:rounded-md lg:shadow-lg lg:absolute lg:z-20 lg:mt-8">
          <!-- Language Options -->
          <li><a href="#" class="lg:block lg:px-4 lg:py-2 lg:text-gray-800 lg:hover:bg-gray-200">Eng</a></li>
          <li><a href="#" class="lg:block lg:px-4 lg:py-2 lg:text-gray-800 lg:hover:bg-gray-200">Esp</a></li>
          <!-- Add more language options as needed -->
        </ul>
      </div>
      <a href="#" class=" {{$classes['a']}}ml-3 lg:ml-0 lg:text-white my-auto lg:text-base font-medium lg:font-normal text-[6px] bg-white text-black lg:bg-black px-5 lg:px-0 py-1 lg:py-0">Login</a>
      <a href="#" class="hidden lg:block text-white my-auto lg:mx-4 xl:mx-10">Become a Seller</a>
      <div class="flex">
        <img src="{{asset('images/heart 1.png')}}" alt="" class=" {{$classes['img1']}} items-center lg:h-5 my-auto mx-1 lg:mx-0 mr-1 h-3 ml-6 lg:ml-0">
        <img src="{{asset('images/shopping-cart 1.png')}}" alt="" class=" {{$classes['img2']}} items-center lg:h-5 my-auto mx-1 lg:mx-3 h-3 mr-6 lg:mr-3">
        <img src="{{asset('images/user 1.png')}}" alt="" class=" hidden lg:block lg:items-center lg:h-5 lg:my-auto lg:mr-3 mr-0">
      </div>
    </div>