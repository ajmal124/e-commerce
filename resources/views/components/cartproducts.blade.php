@php
$cartproduct=array('img'=>"images/rect71.png");
$cartproduct1=array('img'=>"images/rect71.png");
$cartproduct2=array('img'=>"images/rect71.png");
$cartproduct3=array('img'=>"images/rect71.png");
@endphp

<div class="mx-4 md:mx-14 md:w-[60%] shadow-lg md:mb-20">
    <h1 class="font-bold mt-2 mb-4 md:text-xl">Shopping Cart</h1>
    <div class="">
        <div>
        <x-cartproduct :cartproduct="$cartproduct"></x-cartproduct>
        <x-cartproduct :cartproduct="$cartproduct1"></x-cartproduct>
        <x-cartproduct :cartproduct="$cartproduct2"></x-cartproduct>
        <x-cartproduct :cartproduct="$cartproduct3"></x-cartproduct>
        </div>
    </div>
    <div class="hidden justify-end m-2 md:flex">
        <p class="bg-black font-semibold text-white py-2 px-4 md:px-8 md:px-8text-base">Place Order</p>
    </div>
</div>