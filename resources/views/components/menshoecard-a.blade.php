@props(['details'])
<div class="bg-white shadow-md border-b-2 border-gray-300 m-1 lg:m-3 px-3 pb-3 pt-5 flex flex-col">
    <img src="{{$details['img']}}" alt="">
    <p class="font-semibold text-xs lg:text-base mb-1">{{$details['title']}}</p>
    <p class="lg:text-[12px] text-[8px]">{{$details['tag']}}</p>
    <div class="flex">
        <p class="font-semibold text-xs lg:text-base">₹359</p>
        <p class="lg:text-[12px] text-[8px] mx-2 line-through">₹1,249</p>
        <p class="text-red-95 lg:text-[12px] text-[8px]">71 % Off</p>
    </div>
    <p class="lg:text-[12px] text-[8px]">Size : 6,7,8,9</p>
    <p class="lg:text-[12px] text-[8px]">Free Delivery</p>
    </div>