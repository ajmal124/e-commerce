<div class="mx-6 md:mx-40 lg:mx-60 xl:mx-96" x-show="openComponent === 'component-b'">
    <div class="flex justify-between items-center">
        <p class="text-xs font-semibold">Deliver to :</p>
        <a href="#">
            <p class="text-xs border px-3 py-1 font-semibold">Change</p>
        </a>
    </div>
    <p class="text-xs font-semibold mb-1">Lorem Ipsum</p>
    <p class="text-xs mr-3 mb-2">Lorem Ipsum has been the industry's standard
        dummy text ever since the 1500s, when an printer
        took a</p>
     <p class="text-xs mr-3 mb-6">1234567890</p>
     
     <x-summaryproduct></x-summaryproduct>

     <div class="flex justify-between pb-2 mb-4 border-b-2 shadow px-2">
        <div class="flex">
        <img src="{{asset('images/invoice 1.png')}}" alt="">
        <p class="text-[10px]">Invoice</p>
        </div>
        <p class="text-[10px]">Add Email</p>
     </div>
     <x-paymentprice></x-paymentprice>

</div>