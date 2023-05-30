<div class="lg:mx-14 mx-5">
    <div class="flex lg:ml-2 w-full mx-2 lg:mx-0">
        <h1 class="mt-1 lg:mt-0 lg:text-xl text-xs font-bold w-[50%]">Today’s Deals</h1>
        <div class="hidden lg:flex justify-end w-[50%] mb-4 lg:mr-10 ">
        <a href="#" class="lg:text-base text-red-95 text-[8px] lg:mt-4 mt-1">See more</a>
        <img src="{{asset('images/next 3.png')}}" alt="" class="lg:w-5 w-2 lg:mt-4 mt-1">
        </div>
    </div>
    <div class="flex justify-between w-full overflow-x-auto">
    
        <div class="bg-gray-200 relative pb-2">
            <div class="w-[120px] sm:w-[200px] md:w-[300px] lg:w-64">
            <div class="hidden lg:block absolute lg:text-xl bottom-[17%] left-[9%] font-extrabold text-center">
                <h1>Upto</h1>
                <h1>20% off</h1>
            </div>
            <img src="{{asset('images/Rectangle 67.png')}}" alt="" class="px-2 pt-4  w-full mx-auto">
            <a href="" class="text-red-95 ml-3 text-[6px] sm:text-[12px] md-[16px] lg:text-base">Shop Now</a>
        </div>
    </div>
    
        <div class="bg-gray-200 relative pb-2 ml-1 md:ml-0">
            <div class="w-[120px] sm:w-[200px] md:w-[300px] lg:w-64">
            <div class="absolute text-[6px] mt-2 ml-1 lg:mt-0 lg:ml-0 lg:text-xl top-[9%] left-[23%] font-extrabold text-center text-white ">
                <h1>Upto</h1>
                <h1>20% off</h1>
            </div>
            <img src="{{asset('images/Rectangle 63.png')}}" alt="" class="px-2 pt-4 mx-auto">
            <a href="" class="text-red-95 ml-3 text-[6px] sm:text-[12px] md-[16px] lg:text-base">Shop Now</a>
        </div>
        </div>
    
        <div class="bg-gray-200 relative pb-2 mx-1 md:mx-0">
            <div class="w-[120px] sm:w-[200px] md:w-[300px] lg:w-64">
                <div class="absolute lg:text-xl bottom-[20%] right-[8%] font-extrabold text-center text-black hidden lg:block">
                <h1>Upto</h1>
                <h1>20% off</h1>
            </div>
            <img src="{{asset('images/Rectangle 66.png')}}" alt="" class="px-2 pt-4 mx-auto">
            <a href="" class="text-red-95 ml-3 text-[6px] sm:text-[12px] md-[16px] lg:text-base">Shop Now</a>
        </div>
        </div>
    
        <x-productgrid></x-productgrid>
    </div>
    <div class="flex justify-end lg:w-[50%] lg:hidden mt-2 mr-2">
        <a href="#" class="lg:text-base text-[8px] lg:mt-4 mt-1 text-red-600">See more</a>
        <img src="{{asset('images/next 3.png')}}" alt="" class="lg:w-5 w-2 lg:mt-4 mt-1">
        </div>

</div>
