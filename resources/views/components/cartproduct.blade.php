@props(['cartproduct'])
<div class="my-2 border-b">
    <div class="flex justify-end">
    <img src="{{asset('images/close 1.png')}}" alt="" class=" mr-8">
    </div>
    <div class="flex ">
      <div class="flex flex-col items-center">
        <img src="{{$cartproduct['img']}}" alt="" class="h-36 object-cover">
        <x-counter></x-counter>
      </div>
      <div class="bg-white lg:m-3 px-3 pb-3 flex flex-col justify-evenly sm:justify-between">
        <div>
        <p class="font-semibold text-base mb-1">Birde</p>
        <p class="lg:text-[12px] text-[8px] text-gray-400">Size: 6 , Blue</p>
        <p class="lg:text-[12px] text-[8px] text-gray-400">Seller: KTEAM</p>
        <div class="flex">
            <p class="lg:text-base text-xs line-through">₹1,249</p>
            <p class="font-semibold text-xs mx-2 lg:text-base">₹359</p>
            <p class="text-red-600 lg:text-base text-xs">71 % Off</p>
        </div>
    </div>
        <div class="flex">
        <p class="lg:text-[12px] text-[8px] mr-1">Delivery by Tuesday may 30 |</p>
        <p class="lg:text-[12px] text-[8px] text-red-600">FREE Delivery</p>
        </div>
        </div>
    </div>
</div>