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
            <main class="about">
                <section class="banner" style="background-image:url('/images/about-banner.png')">
                    <h1>NOSOTROS</h1>
                </section>

                <section class="missionAndVision yellow">
                    <div class="block">
                        <h2>Misión y Visión</h2></div>
                    <div class="block">
                        <div class="col">
                            <img src="images/about/mission1.png">
                            <img src="images/about/mission2.png">
                            <img src="images/about/mission3.png">
                        </div>
                        <div class="col">

                            <h3>MISIÓN</h3>
                                <p>Somos una compañía enfocada en la producción, distribución y comercialización de alimentos 
                                saludables, listos para el consumo, fabricados
                                con procesos innovadores y de alta calidad.
                                </p>
                                 <p>
                                Somos una compañía en proceso de crecimiento
                                sostenible y rentable, soportado en un modelo 
                                que mejora la calidad de vida de los consumidores y el proyecto de vida
                                de nuestros  colaboradores. </p>
                            <h3>VISION</h3>
                                <p>Ser la compañía líder en el sector Gastronómico 
                                - Food Services en Colombia, con la creación
                                de  un portafolio de negocios que abarca la fabricación y venta de los productos preparados 
                                listos para consumir, la cadena más importante
                                de restaurantes de alta calidad y bajo costo
                                y el apoyo de proyectos Gastronómicos independientes. Ser la empresa líder
                                en soluciones Gastronómicas para el consumidor Colombiano. </p>

                        </div>
                        <div class="col">
                            <p>Somos una compañía
                            en proceso de crecimiento
                            sostenible y rentable,
                            soportado en un modelo 
                            que mejora la calidad de
                            vida de los consumidores.</p>
                        </div>
                    </div>
                </section>
                <section class="timeline green">
                    <div class="block">
                        <h2>Deliz</h2>
                    </div>
                    <div class="block">
                       <img src="images/timeline.png" width="100%">
                    </div>
                </section>
                <section class="us yellow">
                     <div class="block">
                        <h2>Nuestra Gente</h2>
                    </div>
                    <div class="block">
                       <img src="images/general.png" width="100%">
                    </div>
                </section>
            </main>
             @include('components.footer') 
        </div>


        <script src="js/main.js"></script> 
        
    </body>
    {{-------------------------------------------------}}

</html>
{{-----------------------------------------------------}}  
