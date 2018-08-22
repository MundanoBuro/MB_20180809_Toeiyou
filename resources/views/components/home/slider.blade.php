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

        @for ($i = 1; $i <= 10; $i++)
        <div class="swiper-slide">

        
        <div class="wrapper slide-bg" style="background-image:url('images/slider/i{{rand(1,10)}}.png')">

            {{-- <div class="text" data-swiper-parallax="-600" data-swiper-parallax-duration="1000">
                <p>Lorem ipsum dolor sit amet {{$i}}, ...</p>
                </div> --}}


            </div>
        

        </div>
        @endfor
       
    </div>

        <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

 </div>
<script>

  </script>