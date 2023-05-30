@props(['details'])
<div class="bg-white rounded-xl m-1 lg:m-0 px-3 pb-3 pt-5 flex flex-col items-center">
    <img src="{{$details['img']}}" alt="">
    <p class="font-semibold text-xs lg:text-base">{{$details['title']}}</p>
    <p class="lg:text-[12px] text-[8px]">{{$details['tag']}}</p>
    </div>