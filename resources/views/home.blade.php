<x-defaultlayout>
    @php
    $classes=array('form'=>"justify-end ", 'a'=>"", 'img1'=>"", 'img2'=>"");   
   @endphp

<x-nav :classes="$classes"></x-nav>
<x-category-types></x-category-types>
<x-hero-carousel></x-hero-carousel>
<x-supportbar></x-supportbar>
<x-section-a></x-section-a>
<x-productgrid-a></x-productgrid-a>
<x-productgrid-b></x-productgrid-b>
<x-productgrid-c></x-productgrid-c>
<x-brandgrid></x-brandgrid>
<x-footer></x-footer>


</x-defaultlayout>