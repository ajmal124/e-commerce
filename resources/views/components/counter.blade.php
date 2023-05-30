<!-- component -->
<div class="custom-number-input h-14 w-32">
    <div class="flex flex-row h-10 w-full relative bg-transparent mt-1">
      <button data-action="decrement" class="  text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20  cursor-pointer outline-none">
        <span class="m-auto text-2xl font-thin">−</span>
      </button>
      <input type="number" class="text-center w-full  font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="custom-input-number" value="0"></input>
    <button data-action="increment" class=" text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
      <span class="m-auto text-2xl font-thin">+</span>
    </button>
  </div>
</div>
  
  <style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  
    .custom-number-input input:focus {
      outline: none !important;
    }
  
    .custom-number-input button:focus {
      outline: none !important;
    }
  </style>
  
  <script>
    function decrement(e) {
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      if(value>0){
        value--;
      }
      
      target.value = value;
    }
  
    function increment(e) {
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      value++;
      target.value = value;
    }
  
    const decrementButtons = document.querySelectorAll(
      `button[data-action="decrement"]`
    );
  
    const incrementButtons = document.querySelectorAll(
      `button[data-action="increment"]`
    );
  
    decrementButtons.forEach(btn => {
      btn.addEventListener("click", decrement);
    });
  
    incrementButtons.forEach(btn => {
      btn.addEventListener("click", increment);
    });
  </script>