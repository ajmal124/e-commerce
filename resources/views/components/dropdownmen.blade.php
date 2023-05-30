@props(['dropdown'])
<div class="border" x-data="{ open: false }">
    <div class="lg:flex px-2 justify-between py-2"  @click="open = !open">
        <p class="text-sm font-semibold my-auto">{{$dropdown['tag']}}</p>
        <img src="{{asset('images/img-1.png')}}" alt="" class="w-5 h-5 my-auto " >
    </div>
    <div class=" my-1 mx-8">
        <ul x-show="open" @click.away="open = false" class=" text-xs bg-white" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2">
          <li class="px-1">abc</li>
          <li class="px-1">def</li>
          <li class="px-1">hij</li>
          <!-- Add more categories as needed -->
        </ul>
      </div>
</div>