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
<script src="https://unpkg.com/scrollreveal"></script>

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

            <main class="clients">

                <section class="slider">
                @include('components.slider') 
                </section>

                <section class="clients-logos">
                    <div class="wrapper">                  <img class="client-logo" src="images/clients/client1.png" style="display:none;">
                    <img class="client-logo" src="images/clients/client2.png" style="display:none;">
                    <img class="client-logo" src="images/clients/client3.png" style="display:none;">
                    <img class="client-logo" src="images/clients/client4.png" style="display:none;">
                    <img class="client-logo" src="images/clients/client5.png" style="display:none;">
                    <img class="client-logo" src="images/clients/client6.png" style="display:none;">
                    <img class="client-logo" src="images/clients/client7.png" style="display:none;">
                </div>
                </section>

            </main>
             @include('components.footer') 
        </div>


        <script src="js/main.js"></script> 
        <script>
            $(document).ready(function(){
                setTimeout(function(){ $($(".client-logo")[0]).fadeIn(750)},500);
                setTimeout(function(){ $($(".client-logo")[1]).fadeIn(750)},1000);
                setTimeout(function(){ $($(".client-logo")[2]).fadeIn(750)},1500);
                setTimeout(function(){ $($(".client-logo")[3]).fadeIn(750)},2000);
                setTimeout(function(){ $($(".client-logo")[4]).fadeIn(750)},2500);
                setTimeout(function(){ $($(".client-logo")[6]).fadeIn(750)},3000);
            });
        </script>
        
    </body>
    {{-------------------------------------------------}}

</html>
{{-----------------------------------------------------}}  
