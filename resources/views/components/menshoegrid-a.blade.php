<div class=" lg:pb-20 pb-6 mt-3 lg:mt-0">
    @php
        $details=array('img'=>"/images/rect60.png",'title'=>"Birde",'tag'=>"Stylish comfort and lightweighted");
        $details1=array('img'=>"images/rect61.png",'title'=>"Campus",'tag'=>"HARLEY Running Shoes For Men");
        $details2=array('img'=>"images/rect62.png",'title'=>"Nobelite",'tag'=>"SM-676 Running Shoes For Men");
        $details3=array('img'=>"images/rect63.png",'title'=>"Nobelite",'tag'=>"SM-676 Running Shoes For Men");
        $details4=array('img'=>"images/rect64.png",'title'=>"Birde",'tag'=>"Stylish comfort and lightweighted");
        $details5=array('img'=>"images/rect65.png",'title'=>"Campus",'tag'=>"HARLEY Running Shoes For Men");
        $details5=array('img'=>"images/rect66.png",'title'=>"Nobelite",'tag'=>"SM-676 Running Shoes For Men");
        $details5=array('img'=>"images/rect67.png",'title'=>"Nobelite",'tag'=>"SM-676 Running Shoes For Men");
        $details5=array('img'=>"images/rect68.png",'title'=>"Birde",'tag'=>"Stylish comfort and lightweighted");
        $details5=array('img'=>"images/rect69.png",'title'=>"Campus",'tag'=>"HARLEY Running Shoes For Men");
        $details5=array('img'=>"images/rect70.png",'title'=>"Nobelite",'tag'=>"SM-676 Running Shoes For Men");
        $details5=array('img'=>"images/rect71.png",'title'=>"Nobelite",'tag'=>"SM-676 Running Shoes For Men");


    @endphp
 <div class="lg:grid-cols-4 grid grid-cols-2 mx-5">
        <x-menshoecard-a :details="$details"></x-menshoecard-a>
        <x-menshoecard-a :details="$details1"></x-menshoecard-a>
        <x-menshoecard-a :details="$details2"></x-menshoecard-a>
        <x-menshoecard-a :details="$details3"></x-menshoecard-a>
        <x-menshoecard-a :details="$details4"></x-menshoecard-a>
        <x-menshoecard-a :details="$details5"></x-menshoecard-a>
        <x-menshoecard-a :details="$details"></x-menshoecard-a>
        <x-menshoecard-a :details="$details1"></x-menshoecard-a>
        <x-menshoecard-a :details="$details2"></x-menshoecard-a>
        <x-menshoecard-a :details="$details3"></x-menshoecard-a>
        <x-menshoecard-a :details="$details4"></x-menshoecard-a>
        <x-menshoecard-a :details="$details5"></x-menshoecard-a>
</div>
</div>