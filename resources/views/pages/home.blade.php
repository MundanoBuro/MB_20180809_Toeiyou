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
           @include('components.slider')
        </main>
        
        <!-- ---- FOOTER ---- -->
        <footer v-bind:class="UI.LOADER.class">
            @include('components.footer')
        </footer>     

    </div>
     @include('settings.assets_footer')
    </body>
    {{-------------------------------------------------}}


</html>
{{-----------------------------------------------------}}  
