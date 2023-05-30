<div class="mt-5 font-semibold">
    <p class="font-semibold border pl-1">Filters</p>
    <div class="border" x-data="{ open: false }">
        <p class=" pl-2 pt-4 text-xs ">CATEGORIES</p>
        <div class="lg:flex px-2"  @click="open = !open">
            <img src="{{asset('images/img-1.png')}}" alt="" class="w-5 h-5 my-auto " >
            <p class="text-xs my-2">Foot Wear</p>
        </div>
        <div class=" my-1 mx-8">
            <ul x-show="open" @click.away="open = false" class=" text-xs bg-white" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2">
              <li class="px-1">Women’s Footwear</li>
              <li class="px-1">Kid’s & Infant Footwear</li>
              <li class="px-1">Men’s Footwear</li>
              <!-- Add more categories as needed -->
            </ul>
          </div>
    </div>
    <div class="border" x-data="{ open: false }">
        <div class="lg:flex px-2 justify-between py-2"  @click="open = !open">
            <p class="text-sm my-auto">Gender</p>
            <img src="{{asset('images/img-1.png')}}" alt="" class="w-5 h-5 my-auto " >
        </div>
        <div class=" my-1 mx-8">
            <ul x-show="open" @click.away="open = false" class=" text-xs bg-white" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2">
              <li class="px-1">Male</li>
              <li class="px-1">Female</li>
              <li class="px-1">Others</li>
              <!-- Add more categories as needed -->
            </ul>
          </div>
    </div>
    <div class="border">
        <p class="text-xs py-2 pl-2">Price</p>

{{-- Rangeslider --}}
        <x-rangeslider></x-rangeslider>
{{-- Rangeslider --}}

        <div class="flex justify-between items-center">
            <div class="border mx-2 my-2" x-data="{ open: false }">
                <div class="lg:flex px-2 justify-between"  @click="open = !open">
                    <p class="text-xs my-auto">min</p>
                    <img src="{{asset('images/img-1.png')}}" alt="" class="w-5 h-5 my-auto " >
                </div>
                <div class=" my-1 mx-8">
                    <ul x-show="open" @click.away="open = false" class=" text-xs bg-white" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2">
                      <li class="px-1">10</li>
                      <li class="px-1">20</li>
                      <li class="px-1">40</li>
                      <!-- Add more categories as needed -->
                    </ul>
                  </div>
            </div>
            <p>to</p>
            <div class="border mx-2 my-2" x-data="{ open: false }">
                <div class="lg:flex px-2 justify-between"  @click="open = !open">
                    <p class="text-xs my-auto">max</p>
                    <img src="{{asset('images/img-1.png')}}" alt="" class="w-5 h-5 my-auto " >
                </div>
                <div class=" my-1 mx-8">
                    <ul x-show="open" @click.away="open = false" class=" text-xs bg-white" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2">
                      <li class="px-1">100</li>
                      <li class="px-1">200</li>
                      <li class="px-1">400</li>
                      <!-- Add more categories as needed -->
                    </ul>
                  </div>
            </div>
        </div>
    </div>
</div>
@php
$dropdown=array('tag'=>"BRAND");
$dropdown1=array('tag'=>"CUSTOMER RATINGS");
$dropdown2=array('tag'=>"COLOR");
$dropdown3=array('tag'=>"DISCOUNT");
$dropdown4=array('tag'=>"OFFERS");
$dropdown5=array('tag'=>"AVAILABILITY");
@endphp
<div>
<x-dropdownmen :dropdown="$dropdown"></x-dropdownmen>
<x-dropdownmen :dropdown="$dropdown1"></x-dropdownmen>
<x-dropdownmen :dropdown="$dropdown2"></x-dropdownmen>
<x-dropdownmen :dropdown="$dropdown3"></x-dropdownmen>
<x-dropdownmen :dropdown="$dropdown4"></x-dropdownmen>
<x-dropdownmen :dropdown="$dropdown5"></x-dropdownmen>
</div>