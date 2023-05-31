<div class="mb-4 mx-0 md:mx-40 lg:mx-60 xl:mx-96" x-show="openComponent === 'component-a'">
    <form action="#" class="mx-4">
        <input type="text" placeholder="Full Name (Required)" class=" border border-black w-full text-xs p-1 pb-6">
        <input type="number" placeholder="Phone Number (Required)" class=" border border-black w-full text-xs p-1 pb-6 mt-6 mb-2">
       
        <div class="" x-data="{ open: false }">
            <p class="text-sm my-auto font-semibold mb-2" @click="open = !open">+ Add Alternate Phone Number</p>
            <div class="" x-show="open"  @click.away="open = false">
                <input type="number" placeholder="Phone Number (Optional)" 
                class=" border border-black w-full text-xs p-1 pb-6 my-2">
              </div>
        </div>
        <div class="flex w-full">
            <div class="w-[50%] m-2 ml-0">
                <input type="number" placeholder="Pincode (Required)" class=" border border-black w-full text-xs p-1 pb-6 mb-4">
                <input type="text" placeholder="State (Required)" class=" border border-black w-full text-xs p-1 pb-6">
            </div>
            <div class="w-[50%] m-4">
                <a href="#"><div class="flex bg-black py-2 justify-center">
                    <img src="{{asset('images/target 1.png')}}" alt="" class="w-4 mr-1">
                    <p class="text-white text-xs">Use my location</p>
                </div></a>
                <div class="mt-6">
                    <input type="text" placeholder="City (Required)" class=" border border-black w-full text-xs p-1 pb-6">
                </div>
            </div>
        </div>

        <input type="text" placeholder="House No., Building Name(Required)" class=" border border-black w-full text-xs p-1 pb-6 mb-4">
        <input type="text" placeholder="Road name, Area, Colony(Required)" class=" border border-black w-full text-xs p-1 pb-6 mb-2">
     
        <div class="" x-data="{ open: false }">
            <p class="text-sm my-auto font-semibold mb-2" @click="open = !open">+ Add Nearby Famous Shop/Mall/Landmark</p>
            <div class="" x-show="open"  @click.away="open = false">
                <input type="number" placeholder="Landmark" 
                class=" border border-black w-full text-xs p-1 pb-6 my-2">
              </div>
        </div>
        <input type="text" placeholder="Type of Address" class=" w-full text-xs border-0 pl-2 mb-2">
        <div class="flex ml-2 items-center">
            <div class="flex py-1 px-2 pr-8 border border-black rounded-xl mx-2 mr-8">
               <img src="{{asset('images/home.png')}}" alt="" class="h-3.5 mr-1">
               <p class="text-xs">Home</p>
            </div>
            <div class="flex py-1 px-2 pr-8 border border-black rounded-xl">
                <img src="{{asset('images/house.png')}}" alt="" class="h-3.5 mr-1">
                <p class="text-xs">Work</p>
            </div>
        </div>
        <div class="bg-black mx-8 md:mx-16 lg:mx-28 xl:mx-36 py-4 my-8">
            <p class="text-white text-xs text-center"  @click="openComponent = 'component-b'">Save Address</p>
        </div>

    </form>
</div>