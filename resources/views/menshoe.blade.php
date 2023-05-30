<x-defaultlayout>

    @php
     $classes=array('form'=>"lg:justify-end justify-center", 'a'=>"hidden lg:block", 'img1'=>"hidden md:block", 'img2'=>"hidden md:block");  
    @endphp

<x-nav :classes="$classes"></x-nav>
<x-category-types></x-category-types>
<x-menshoemain></x-menshoemain>
<x-productgrid-c></x-productgrid-c>
<x-brandgrid></x-brandgrid>
<x-footer></x-footer> 
</x-defaultlayout>