<div class="flex justify-between items-center mx-6 my-4">
    <div class=" flex flex-col items-center">
        <img src="{{asset('images/org.png')}}" alt="">
        <p class="text-[10px]">Authentic Products</p>
    </div>
    <div class=" flex flex-col items-center">
        <img src="{{asset('images/cred.png')}}" alt="">
        <p class="text-[10px]">Secure Payment</p>
    </div>
    <div class=" flex flex-col items-center">
        <img src="{{asset('images/dist.png')}}" alt="">
        <p class="text-[10px]">Easy Return</p>
    </div>
</div>
<div class="border-t-2">
    <div class="flex justify-between items-center my-4 px-2">
        <img src="{{asset('images/visa.png')}}" alt="" class="px-1">
        <img src="{{asset('images/rupay.png')}}" alt="" class="px-1">
        <img src="{{asset('images/razor.png')}}" alt="" class="px-1">
        <img src="{{asset('images/master.png')}}" alt="" class="px-1">
        <img src="{{asset('images/pci.png')}}" alt="" class="px-1">
    </div>

</div>
<div class="flex justify-center m-2 pt-4">
    <p class="bg-black text-center font-semibold text-white py-2 px-8 text-xs sm:text-sm lg:text-base" @click="openComponent = 'component-a'">Place Order</p>
</div>