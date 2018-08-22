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
        @include('components.meta', $metaTags)
        <!-- <link rel="stylesheet" href="css/app.css">-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="lib/swiper.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="lib/swiper.min.js"></script> 
        <script src="js/app.js"></script> 
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    </head>
    {{-------------------------------------------------}}



    {{-------------------------------------------------}}
    {{-- HTML::Body                                  --}}
    {{-------------------------------------------------}}
    <body id="app">
    
        <div class="preload">
            @include('components.preloader')
        </div>

        <div class="loaded" >
            @include('components.header',$state)
            <main>
               
<section class="banner" style="background-image:url('/images/about-banner.png')">
                    <h1>CONTACTO</h1>
                </section>


            </main>
             @include('components.footer') 
        </div>


        <script src="js/main.js"></script> 
        
    </body>
    {{-------------------------------------------------}}

</html>
{{-----------------------------------------------------}}  
