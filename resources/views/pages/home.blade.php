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
        <link rel="stylesheet" href="css/main.css">
    </head>
    {{-------------------------------------------------}}



    {{-------------------------------------------------}}
    {{-- HTML::Body                                  --}}
    {{-------------------------------------------------}}
    <body>
    
        <div class="preload">
            @include('components.preloader')
        </div>

        <div class="loaded">
            @include('components.header',$state)
            <main></main>
            @include('components.footer')
        </div>

        
    </body>
    {{-------------------------------------------------}}

</html>
{{-----------------------------------------------------}}  
