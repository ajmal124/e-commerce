<div class=" lg:my-3 my-1.5 relative lg:mx-14">

    <swiper-container id="container" class="   mx-auto slider-container relative" init="false">
        {{-- <div class=" absolute top-0 w-full bg-white h-[25px] lg:h-[65px] rounded-b-[50%]"> --}}
        <swiper-slide class=" w-full">
            <div class="absolute right-[12%] top-[25%] lg:top-[30%] text-center">
            <h1 class="text-white text-sm sm:text-2xl md:text-3xl lg:text-5xl font-bold lg:mb-2 mb-1">GET START</h1>
            <h1 class="text-white text-sm sm:text-2xl md:text-3xl lg:text-5xl font-bold ">YOUR FAVOURITE SHOPPING</h1>
        </div>
        <a href="#" class="text-[8px] md:text-base font-extrabold bg-white py-1 px-2 lg:px-4 lg:py-2 lg:rounded-lg rounded-md absolute right-[33%] bottom-[10%] sm:bottom-[27%] sm:right-[33%] md:right-[34%] md:bottom-[20%] lg:bottom-[16%] xl:bottom-[30%] xl:right-[31%]">Buy Now</a>
            <img class=" w-full" src="{{asset('images/Rectangle 8.png')}}" alt="" class=" w-full relative -z-10">
           
        </swiper-slide>


        <swiper-slide class=" w-full">
            <div class="absolute right-[12%] top-[25%] lg:top-[30%] text-center">
            <h1 class="text-white text-sm sm:text-2xl md:text-3xl lg:text-5xl font-bold lg:mb-2 mb-1">GET START</h1>
            <h1 class="text-white text-sm sm:text-2xl md:text-3xl lg:text-5xl font-bold ">YOUR FAVOURITE SHOPPING</h1>
        </div>
        <a href="#" class="text-[8px] md:text-base font-extrabold bg-white py-1 px-2 lg:px-4 lg:py-2 lg:rounded-lg rounded-md absolute right-[33%] bottom-[10%] sm:bottom-[27%] sm:right-[33%] md:right-[34%] md:bottom-[20%] lg:bottom-[16%] xl:bottom-[30%] xl:right-[31%]">Buy Now</a>
            <img class=" w-full" src="{{asset('images/Rectangle 8.png')}}" alt="" class=" w-full relative -z-10">
           
        </swiper-slide>

        <swiper-slide class=" w-full">
            <div class="absolute right-[12%] top-[25%] lg:top-[30%] text-center">
            <h1 class="text-white text-sm sm:text-2xl md:text-3xl lg:text-5xl font-bold mb-1 lg:mb-2">GET START</h1>
            <h1 class="text-white text-sm sm:text-2xl md:text-3xl lg:text-5xl font-bold ">YOUR FAVOURITE SHOPPING</h1>
        </div>
        <a href="#" class="text-[8px] md:text-base font-extrabold bg-white py-1 px-2 lg:px-4 lg:py-2 lg:rounded-lg rounded-md absolute right-[33%] bottom-[10%] sm:bottom-[27%] sm:right-[33%] md:right-[34%] md:bottom-[20%] lg:bottom-[16%] xl:bottom-[30%] xl:right-[31%]">Buy Now</a>
            <img class=" w-full" src="{{asset('images/Rectangle 8.png')}}" alt="" class=" w-full relative -z-10">
           
        </swiper-slide>


          </swiper-container>

          
          <div id="prev" class="absolute top-[40%] lg:top-[33%] left-4 z-30">
            <img src="{{asset('images/back.png')}}" alt="" class="w-5 lg:w-14">
          </div>
          <div id="next" class=" absolute top-[40%] lg:top-[33%] right-4 z-30">
            <img src="{{asset('images/next.png')}}" alt="" class="w-5 lg:w-14">
          </div>
         


    </div>
    <script>
        const swiperE20 = document.getElementById('container');


const swiperParams20 = {
    loop:true,
    // centeredSlides: true,
    // spaceBetween:15,
  slidesPerView: 1,
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
delay: 4500,
disableOnInteraction: false
},
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 1,
      spaceBetween: 0,
      panoramaEffect: {
            rotate: 30,
            depth: 200
        }
    },
  },
  on: {
    init() {

    },
  },
};

const buttonEl3 = document.getElementById('next');

  buttonEl3.addEventListener('click', () => {
    swiperE20.swiper.slideNext();
  });

  const buttonE4 = document.getElementById('prev');

  buttonE4.addEventListener('click', () => {
    swiperE20.swiper.slidePrev();
  });


Object.assign(swiperE20, swiperParams20);


swiperE20.initialize();
    </script>
