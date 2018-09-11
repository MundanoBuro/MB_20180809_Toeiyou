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
        <main v-bind:class="UI.LOADER.class"  class="business">
           
            <div class="sections">
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

















