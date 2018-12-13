


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
        <main v-bind:class="UI.LOADER.class"  class="contact">
           
            <div class="sections">

             <img class="banner" src="images/contact/banner.png" width="100%">

                <section class="row">
                    <div class="col map">
                        @include('components.map') 
                        <div class="contact-info">

                            <div class="col-22">
                                <h2>
                                    DIRECCIÓN
                                </h2>
                                <p>
                                    Km 1 vía Siberia - Funza. Intexzona,
Bodega 28A. Cota, Cundinamarca,
Colombia.
                                </p>
                            </div>
                            <div class="col-22">
                                <h2>TELÉFONO</h2>
                                <p>
                                    (1) 8759282
                                </p>
                            </div>
                            <div class="col-22">
                                <h2>E-MAIL</h2>
                                <p>
                                    info@gastroinnova.co
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col form">
                        @include('components.form') 
                    </div>

                </section>
                </section>
                </div>
            
        </main>
        
        <!-- ---- FOOTER ---- -->
        <footer v-bind:class="UI.LOADER.class">
            @include('components.footer')
        </footer>     

    </div>
    <script>
        window["currentPage"] = "about";


    </script>
     @include('settings.assets_footer')


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
     <script>
         
     </script>
    </body>
    {{-------------------------------------------------}}

</html>
{{-----------------------------------------------------}}  








