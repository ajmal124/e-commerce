<div class="mx-0 lg:mx-14 bg-gray-200 lg:pb-20 pb-6 mt-3 lg:mt-0">
    <div class="flex lg:ml-2  mx-5 lg:mx-0">
        <h1 class="mt-1 ml-2 lg:mt-4 lg:ml-4 lg:text-xl text-xs font-bold w-[50%] mb-2">Most Popular</h1>
        <div class="lg:flex lg:justify-end mr-6 lg:w-[50%] lg:mb-4 hidden">
        <a href="#" class="lg:text-base text-[8px] lg:mt-4 mt-1 text-red-600">See more</a>
        <img src="{{asset('images/next 3.png')}}" alt="" class="lg:w-5 w-2 lg:mt-4 mt-1">
        </div>
    </div>

    @php
        $details=array('img'=>"/images/Rec71.png",'title'=>"Men’s Wear",'tag'=>"Mini.50% Off");
        $details1=array('img'=>"images/Rec65.png",'title'=>"Women’s wear",'tag'=>"Mini.50% Off");
        $details2=array('img'=>"images/Rec67.png",'title'=>"Kids Wear",'tag'=>"Mini.50% Off");
        $details3=array('img'=>"images/Rec68.png",'title'=>"Men’s T-shirts",'tag'=>"Mini.50% Off");
        $details4=array('img'=>"images/Rec69.png",'title'=>"Women’s T-shirt",'tag'=>"Mini.50% Off");
        $details5=array('img'=>"images/Rec70.png",'title'=>"Men’s Track Suits",'tag'=>"Mini.50% Off");

    @endphp
 <div class="lg:flex lg:flex-row grid grid-cols-2 lg:justify-between mx-5 ">
        <x-product-card :details="$details"></x-product-card>
        <x-product-card :details="$details1"></x-product-card>
        <x-product-card :details="$details2"></x-product-card>
        <x-product-card :details="$details3"></x-product-card>
        <x-product-card :details="$details4"></x-product-card>
        <x-product-card :details="$details5"></x-product-card>
        <div class="flex items-center">
        <img src="{{asset('images/next 9.png')}}" alt="" class=" w-5 h-5 hidden lg:block">
    </div>
</div>

<div class="flex justify-end lg:w-[50%] lg:hidden mt-2 mr-8">
    <a href="#" class="lg:text-base text-[8px] lg:mt-4 mt-1 text-red-600">See more</a>
    <img src="{{asset('images/next 3.png')}}" alt="" class="lg:w-5 w-2 lg:mt-4 mt-1">
    </div>
</div>