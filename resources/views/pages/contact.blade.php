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

            <main id="app" class="contact" >

                <section class="slider">
                    @include('components.slider',$state) 
                </section>

                <section class="row">
                    <div class="col map">
                        @include('components.map') 
                    </div>
                    <div class="col form">
                        @include('components.form') 
                    </div>
                </section>

            </main>
             @include('components.footer') 
        </div>


        <script src="js/main.js"></script> 

        <script>
                var map;
                function initMap() {
                  map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 4.748026, lng: -74.163055},
                    zoom: 17
                  });

                  
                var marker = new google.maps.Marker({
                    position: {lat: 4.748026, lng: -74.163055},
                    map: map,
                    title: 'GastroInnova'
                });
                }
              </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARPuQy0i2xt9IroBK09guHP1VtHK0RXhA&callback=initMap"
async defer></script>
        
    </body>
    {{-------------------------------------------------}}

</html>
{{-----------------------------------------------------}}  
