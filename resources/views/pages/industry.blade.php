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
                <img class="banner" src="images/industry/banner.png" width="100%">
                
                <div class="plots">
                    <div class="plot green">
                        <line-chart :height="300"></line-chart>
                        <h2>TAMAÑO DEL MERCADO</h2>
                    </div>
               
                    <div class="plot yellow">
                        <table id="sizeOfMarket">

                        <tr>
                            <th> </th>
                            <th>2016/17</th>
                            <th>2012/17 CAGR</th>
                            <th class="strong">2012/17 TOTAL</th>
                        </tr>
                       
                        <tr>
                            <td>ESTABLECIMIENTOS/OUTLETS</td>
                            <td>2.5</td>
                            <td>2.2</td>
                            <td>11.6</td>
                        </tr>

                           <tr>
                            <td>TRANSACCIONES</td>
                            <td>1.9</td>
                            <td>1.9</td>
                            <td>10.1</td>
                        </tr>

                         <tr>
                            <td>VENTAS TOTALES (Miles de MM)</td>
                            <td>2.8</td>
                            <td>2.5</td>
                            <td>13.3</td>
                        </tr>

                         <tr>
                            <td>VALUE CONSTANT PRICES</td>
                            <td>-2.6</td>
                            <td>0.8</td>
                            <td>4.2</td>
                        </tr>


                        </table>
                        <h2>PROYECCIÓN DEL MERCADO</h2>
                    </div>
               
                    <div class="plot yellow">
                         <table id="sizeOfMarket">

                        <tr>
                            <th> </th>
                            <th>2016/17</th>
                            <th>2012/17 CAGR</th>
                            <th class="strong">2012/17 TOTAL</th>
                        </tr>
                       
                        <tr>
                            <td>ESTABLECIMIENTOS/OUTLETS</td>
                            <td>2.3</td>
                            <td>2.8</td>
                            <td>14.9</td>
                        </tr>

                           <tr>
                            <td>TRANSACCIONES</td>
                            <td>1</td>
                            <td>3.4</td>
                            <td>18.2</td>
                        </tr>

                         <tr>
                            <td>VENTAS TOTALES (Miles de MM)</td>
                            <td>1.5</td>
                            <td>5.2</td>
                            <td>28.7</td>
                        </tr>

                         <tr>
                            <td>VALUE CONSTANT PRICES</td>
                            <td>-2.6</td>
                            <td>0.8</td>
                            <td>4.2</td>
                        </tr>


                        </table>
                        <h2>EVOLUCIÓN DEL MERCADO</h2>
                    </div>
                </div>
 
                
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
    
    <style>
    #line-chart{
        width: 500px;
        margin: 0 auto;
    }
    </style>

     <script>
        var data = {
            labels: ["2012","2013","2014","2015","2016","2017"],
            datasets: [ 
                    {
                        label: 'ESTABLECIMIENTOS / OUTLETS',
                        backgroundColor:"rgba(0,0,0,0)",
                        borderColor: "#A2BB3C",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderWidth: 5,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "#A2BB3C",
                        pointBackgroundColor: "#A2BB3C",
                        pointBorderWidth: 1,
                        pointHoverRadius: 15,
                        pointHoverBackgroundColor: "#A2BB3C",
                        pointHoverBorderColor: "#A2BB3C",
                        pointHoverBorderWidth: 1,
                        pointRadius: 10,
                        pointHitRadius: 15,
                        data: [59.085,60.855,62.323,64.107,66.316,67.867]
                    },
                    {
                        label: 'VENTAS TOTALES (Miles de MM)',
                        borderColor: "#9D1728",
                        backgroundColor:"rgba(0,0,0,0)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderWidth: 5,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "#9D1728",
                        pointBackgroundColor: "#9D1728",
                        pointBorderWidth: 1,
                        pointHoverRadius: 15,
                        pointHoverBackgroundColor: "#9D1728",
                        pointHoverBorderColor: "#9D1728",
                        pointHoverBorderWidth: 1,
                        pointRadius: 10,
                        pointHitRadius: 15,
                        data: [33.657,35.213,36.124,36.525,36.011,35.065]
                    }
            ]
        };

        Vue.component('line-chart', {
        extends: VueChartJs.Line,
        mounted () {
            this.renderChart(data,
            { 
                responsive: true, 
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        ticks: {
                            fontSize: 20
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            fontSize: 20
                        }
                    }]
                }
            }
            )}
       });


     </script>
    </body>
    {{-------------------------------------------------}}

</html>
{{-----------------------------------------------------}}  
