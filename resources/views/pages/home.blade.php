<!doctype html>
{{-----------------------------------------------------}}  
{{--       Block :: View Blade                       --}}      
{{-----------------------------------------------------}}  
@php
$metaTags = [
    'title' => $title, 
    'keywords' => $keywords,
    'author' => $author,
    'description' => $description
];
$state = ['current' => $current];
@endphp
{{-----------------------------------------------------}}  


{{-----------------------------------------------------}}  
{{--       Block :: View Blade                       --}}    
{{-----------------------------------------------------}}
<html lang="{{ app()->getLocale() }}">


    {{-------------------------------------------------}}
    {{-- HTML::Head                                  --}}
    {{-------------------------------------------------}}  
    <head>
            @include('settings.metas', $metaTags)
            @include('settings.assets_header', $metaTags)

                     <style>
                .swiper-bg{
                    width: 100vw;
                    height:100%;
                    min-height: 10em;
                    display: block;
                    background-size: cover;
                    background-position: center;
                }  
       
                 .swiper-bg.sd1{background-image: url("images/slider/slide1-min.jpg");}
                 .swiper-bg.sd2{background-image: url("images/slider/slide2-min.jpg");}
                 .swiper-bg.sd3{background-image: url("images/slider/slide3-min.jpg");}
                 .swiper-bg.sd4{background-image: url("images/slider/slide4-min.jpg");}
                 .swiper-bg.sd5{background-image: url("images/slider/slide5-min.jpg");}
                 .swiper-bg.sd6{background-image: url("images/slider/slide6-min.jpg");}
                 .swiper-bg.sd7{background-image: url("images/slider/slide7-min.jpg");}
                 .swiper-bg.sd8{background-image: url("images/slider/slide8-min.jpg");}
                 .swiper-bg.sd9{background-image: url("images/slider/slide4-min.jpg");}

                </style>


    </head>
    {{-------------------------------------------------}}


    {{-------------------------------------------------}}
    {{-- HTML::Body                                  --}}
    {{-------------------------------------------------}}
    <body>
        <div class="v-app" id="app">

        <!-- ---- LOADER ---- -->
        <div class="loader dis-col-mid" v-if="UI.LOADER.state" v-bind:class="UI.LOADER.class">
            <img src="images/loader/loader.gif">
        </div>
        
        <!-- ---- HEADER ---- -->
        <header v-bind:class="UI.LOADER.class">
             @include('components.header') 
        </header>

        <!-- ---- MAIN ------ -->
        <main v-bind:class="UI.LOADER.class">
            
            <section class="slider">

       

                <swiper ref="awesomeSwiperA" :options="swiperOptionA" @set-translate="onSetTranslate">
                    <!-- slides -->
                    <swiper-slide> <div class="swiper-bg sd1"></div> </swiper-slide>
                    <swiper-slide> <div class="swiper-bg sd2"></div> </swiper-slide>
                    <swiper-slide> <div class="swiper-bg sd3"></div> </swiper-slide>
                    <swiper-slide> <div class="swiper-bg sd4"></div> </swiper-slide>
                    <swiper-slide> <div class="swiper-bg sd5"></div> </swiper-slide>
                    <swiper-slide> <div class="swiper-bg sd6"></div> </swiper-slide>
                    <swiper-slide> <div class="swiper-bg sd7"></div> </swiper-slide>
                    <swiper-slide> <div class="swiper-bg sd8"></div> </swiper-slide>
                    <swiper-slide> <div class="swiper-bg sd9"></div> </swiper-slide>
                    <!-- Optional controls -->
                    <div class="swiper-pagination"  slot="pagination"></div>
                    <div class="swiper-button-prev" slot="button-prev"></div>
                    <div class="swiper-button-next" slot="button-next"></div>
                </swiper>

            </section>
            <section class="news">

                @php
                    $rand_num = rand(1,3);

                    $cover1_display = "none";
                    $cover2_display = "none";
                    $cover3_display = "none";

                    if($rand_num == 1){
                        $cover1_display = "inline-block";
                    }

                     if($rand_num == 2){
$cover2_display = "inline-block";
                    }

                     if($rand_num == 3){
$cover3_display = "inline-block";
                    }

                    
                    
                @endphp


                <div class="cover" style="display : {{$cover1_display}}">
                    <a href="/business">
                    <img src="images/cover/cover1.jpg">
                    <h2>
                        
                        <img src="images/header/gi-header-div.png">
                        <span>DELIZ</span>
                        
                    </h2>
                    </a>
                </div>
                <div class="cover" style="display : {{$cover2_display}}">
                    <a href="/business">
                    <img src="images/cover/cover2.jpg">
                    <h2>
                        
                        <img src="images/header/gi-header-div.png">
                        <span>READY MEALS</span>
                        
                    </h2>
                    </a>
                </div>
                <div class="cover" style="display : {{$cover3_display}}">
                    <a href="/business">
                    <img src="images/cover/cover3.jpg">
                    <h2>
                        
                        <img src="images/header/gi-header-div.png">
                        <span>START UPS GASTRONOMICAS</span>
                        
                    </h2>
                    </a>
                </div>

                <div class="news">
                    <div class="news-title">NEWS FEED</div>
                    <ul class="news-feed">
                        <li class="new-feed" v-for="index in 4" :key="index">

                            <div class="new-timestamp">
                                <div class="date">2018/07/28</div>
                                <div class="time">19:20</div>
                            </div>
                            <div class="new-content">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                            </div>

                        </li>
                        
                    </ul>
                </div>
            </section>

        </main>
        
        <!-- ---- FOOTER ---- -->
        <footer v-bind:class="UI.LOADER.class">
            @include('components.footer')
        </footer>     

    </div>
    <script>
        window["currentPage"] = "home";
    </script>
     @include('settings.assets_footer')
    </body>
    {{-------------------------------------------------}}


</html>
{{-----------------------------------------------------}}  
