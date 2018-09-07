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
        @include('settings.assets', $metaTags)
    </head>
    {{-------------------------------------------------}}



    {{-------------------------------------------------}}
    {{-- HTML::Body                                  --}}
    {{-------------------------------------------------}}
    <body id="app">

        <!-- ---- HEADER ---- -->
        <header>
            @include('components.header')
        </header>

        <!-- ---- MAIN ------ -->
        <main>
            
        </main>
        
        <!-- ---- FOOTER ---- -->
        <footer>
            @include('components.footer')
        </footer>        
    </body>
    {{-------------------------------------------------}}

</html>
{{-----------------------------------------------------}}  
