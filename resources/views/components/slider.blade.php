 <!-- Swiper -->
 <style>
 .swiper-container{
     width: 100vw;
     height: 50vh;
     z-index: 0;
 }
 .info{
     width: 30%;
     height: 100%;
    
 }


 </style>
 <div class="slider">

<div class="swiper-container">
    <!-- Parallax background element -->
    <div
        class="parallax-bg"
        style="background-image:url(https://picsum.photos/200/300)"
        data-swiper-parallax="-23%">
    </div>
    <div class="swiper-wrapper">

        @php

           $photo_map = array('home' => 1,'about'  => 2, 'business' => 3, 'industry' => 4,  'news' => 5, 'contact' => 6, 'terms' => 7, 'clients' => 8);
           $photo_key = $photo_map[$current];
             
            $photo_chunk = array_slice($photo_map,$photo_key);
            shuffle($photo_chunk);
            $photo_src = $photo_chunk;
            array_unshift($photo_src ,$photo_key);

            
        @endphp

        

        @for ($i = 1; $i <= count($photo_src); $i++)
        <div class="swiper-slide">

            <div class="wrapper slide-bg" style="background-image:url('images/slider/i{{$photo_src[$i-1]}}.jpg')">
           
            </div>
        </div>
        @endfor
       
    </div>

        <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</div>



 </div>
