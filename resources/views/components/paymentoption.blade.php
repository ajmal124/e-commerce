<div class=" md:mx-40 lg:mx-60 xl:mx-96" x-show="openComponent === 'component-c'">
    <div class="flex  items-center mx-6 mb-2">
        <img src="{{asset('images/price-tag 1.png')}}" alt="" class="h-5 md:h-7">
        <div class="ml-1">
            <p class="text-[9px] md:text-sm">10% off on AU Bank Credit Card Transactions, up</p>
            <p class="text-[9px] md:text-sm">to ₹1,000. On orders of ₹3,000 and above</p>
        </div>
    </div>
    <div class="border pb-6">
        <p class="text-sm font-bold mx-6 my-2">Suggested for you</p>
        <div class="mx-6 flex justify-between items-center">
            <div class="flex items-center">
                <input type="radio" value="" class="w-4 h-4 text-black bg-gray-100 border-black">
                <div class="mt-3">
                    <label class="ml-2 text-sm font-medium">Phonepe UPI</label>
                    <p class="ml-3 text-xs text-gray-400">Phonepe UPI</p>
                </div>
            </div>

            <div>
                <img src="{{asset('images/download 1.png')}}" alt="">
            </div>

        </div>
    </div>

        <x-paymentoptioncheck></x-paymentoptioncheck>

        <div class="px-8 py-2 border-b-2" x-data="{ open: false }">
            <p class="text-sm my-auto font-bold mb-2" @click="open = !open">+  Gift Card</p>
            <div class="" x-show="open"  @click.away="open = false">
                <input type="number" placeholder="Card Number" 
                class=" border border-black w-full text-xs p-1 pb-6 my-2">
              </div>
        </div>
        <div class="">
            <h1 class="mx-6 py-2 pt-4 text-xs sm:text-sm lg:text-base font-bold">Price Details</h1>
            <div class=" mx-6">
            <div class="flex justify-between mx-1 my-3 text-xs sm:text-sm lg:text-base font-semibold ">
                <p>Price (1 item)</p>
                <p>₹1,999</p>
            </div>
            <div class="flex justify-between mx-1 my-6 text-xs sm:text-sm lg:text-base font-semibold">
                <p>Discount</p>
                <p>₹1,670</p>
            </div>
            <div class="flex justify-between mx-1 my-3 text-xs sm:text-sm lg:text-base font-semibold ">
                <p>Delivery Charges</p>
                <p class="text-red-500">FREE </p>
            </div>
            </div>
            <div class="border-t shadow border-b-2">
            <div class="px-6 flex justify-between mx-1 my-3 text-xs sm:text-sm lg:text-base font-bold">
                <p>Total Amount</p>
                <p>₹359</p>
            </div>
            </div>
        </div>
        
        <x-paymentbrand></x-paymentbrand>

</div>