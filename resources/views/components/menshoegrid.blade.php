@php
$details=array('img'=>"images/Rectangle 110.png",'title'=>"");
$details1=array('img'=>"images/Rectangle 116.png",'title'=>"");
$details2=array('img'=>"images/Rectangle 117.png",'title'=>"");
$details3=array('img'=>"images/Rectangle 118.png",'title'=>"");

@endphp

<div class="flex mx-5 overflow-x-auto justify-between">
    
    <x-menshoecard :details="$details"></x-menshoecard>
    <x-menshoecard :details="$details1"></x-menshoecard>
    <x-menshoecard :details="$details2"></x-menshoecard>
    <x-menshoecard :details="$details3"></x-menshoecard>
</div>