
<div class="bg-purple-300 ...">
    <img src="{{asset('images/Rect 8.png')}}" alt="" class="object-cover h-48 sm:h-56 lg:h-72 xl:h-80 w-full">
  </div>
  <div class="lg:flex hidden justify-between mt-2">
    <p>1-48 of over 30,000 results for "shoes"</p>
    <div class="lg:flex border-2 border-black px-2" x-data="{ open: false }">
        <p class="text-sm my-auto">Sorted by : Features</p>
        <img src="{{asset('images/img-1.png')}}" alt="" class="w-5 h-5 my-auto "  @click="open = !open">
        <div class=" mt-4 absolute z-20">
            <ul x-show="open" @click.away="open = false" class="mt-2 bg-white border rounded shadow">
              <li class="px-4 py-2">Category 1</li>
              <li class="px-4 py-2">Category 2</li>
              <li class="px-4 py-2">Category 3</li>
              <!-- Add more categories as needed -->
            </ul>
          </div>
    </div>
  </div>