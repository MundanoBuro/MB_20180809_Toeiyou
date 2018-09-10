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
                    <swiper-slide>I'm Slide 1</swiper-slide>
                    <swiper-slide>I'm Slide 2</swiper-slide>
                    <swiper-slide>I'm Slide 3</swiper-slide>
                    <swiper-slide>I'm Slide 4</swiper-slide>
                    <swiper-slide>I'm Slide 5</swiper-slide>
                    <swiper-slide>I'm Slide 6</swiper-slide>
                    <swiper-slide>I'm Slide 7</swiper-slide>
                    <!-- Optional controls -->
                    <div class="swiper-pagination"  slot="pagination"></div>
                    <div class="swiper-button-prev" slot="button-prev"></div>
                    <div class="swiper-button-next" slot="button-next"></div>
                </swiper>

            </section>
            <section class="news">
                <div class="cover">
                    <img src="images/cover/cover1.jpg">
                    <h2>
                        <img src="images/header/gi-header-div.png">
                        <span>DELIZ</span>
                    </h2>
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
                        <li class="new-feed"></li>
                        <li class="new-feed"></li>
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
