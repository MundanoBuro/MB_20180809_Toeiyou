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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" type="application/javascript"></script>



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
               

            <section class="slider">
            @include('components.slider') 
            </section>

            <section>
            <style>
            .ct-perfect-fourth {
            display: block;
            position: relative;
            height:400px;
            width: 400px;
            }    
            </style>

            <div class="row yellow">
                <div class="row-header" style="width: 100%;display:block;"> TAMAÑO DEL MERCADO</div>
                <div class="row-content">
                  <canvas id="myChart" width="400" height="400"></canvas>
                 </div>
           </div>

            <div style="width: 50%">
                <canvas id="canvas" height="450" width="600"></canvas>
                <div class="container">
                <div class="chart-container">
                <canvas id="chart-legend-normal"></canvas>
                </div>
                <div class="chart-container">
                <canvas id="chart-legend-pointstyle"></canvas>
                </div>
                </div>
            </div>

            </section>

            </main>
             @include('components.footer') 
        </div>


        <script src="js/main.js"></script> 
<script>
        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

        var barChartData = {
        labels : ["2012","2013","2014","2015","2016","2017"],
        datasets : [
          {
            fillColor : "rgba(220,220,220,0.0)",
            strokeColor : "#A2BB3C",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data : [59.085,60.855,62.323,64.107,66.316,67.867],
            backgroundColor: "#fff",
						borderColor: "#ffaabb",
						borderWidth: 1,
						pointStyle: 'rectRot',
						pointRadius: 5,
						pointBorderColor: 'rgb(0, 0, 0)'
            },
            {
            fillColor : "rgba(151,187,205,0.0)",
            strokeColor : "#9D1728",
            highlightFill : "rgba(151,187,205,0.75)",
            highlightStroke : "rgba(151,187,205,1)",
            data : [33.657,35.213,36.124,36.525,36.011,35.065]
            }
          ],
          options: {
            title: {
              display: true,
              text: 'UNITS AND VALUES SELLS IN CONSUMER FOODSERVICE 2012-2017'
            },
            animation: {
              duration: 2000,
              onProgress: function(animation) {
                progress.value = animation.currentStep / animation.numSteps;
              },
              onComplete: function() {
                window.setTimeout(function() {
                  progress.value = 0;
                }, 2000);
              }
            }
          }
        }
     
        window.onload = function(){

          var ctx = document.getElementById("canvas").getContext("2d"); 
          
          
          window.myBar = new Chart(ctx).Line(barChartData);
          console.log(window.myBar);
    }
        </script>
        
 
    </body>
    {{-------------------------------------------------}}

</html>
{{-----------------------------------------------------}}  
