<x-defaultlayout>
    @php
    $classes=array('form'=>"justify-end ", 'a'=>"", 'img1'=>"", 'img2'=>"");   
   @endphp
   <x-nav :classes="$classes"></x-nav>
   <x-category-types></x-category-types>
   <x-mycartmain></x-mycartmain>

   <x-footer></x-footer>
</x-defaultlayout>