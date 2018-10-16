<div class="desktop">
<div class="wrapper">
        <a href="/">
        <img class="logo" src="images/header/gi-header-logo.png">
        </a>
        <ul class="menu">


            
            <li class="item" 
                v-on:mouseover="UI.MENU.ABOUT.uClass = 'hover' "
                v-on:mouseleave=" UI.MENU.ABOUT.uClass = 'default' "
                v-bind:class="UI.MENU.ABOUT.uClass">

                <div class="wrapper">
                    <div class="item-header">
                        <div class="wrapper">
                            <img src="images/header/gi-header-div.png" style="width: 0.5rem;">
                            <span>NOSOTROS</span>
                        </div>
                    </div>
                    <div class="item-content" >
                        
                        <div class="sub-item">
                            <a href="/about#missionAndVision">
                            MISIÓN Y VISIÓN
                            </a>
                        </div>
                        <div class="sub-item">
                             <a href="/about#history">
                                HISTORIA
                                </a>
                        </div>
                        <div class="sub-item">
                             <a href="/about#ourpeople">
                                NUESTRA GENTE
                                </a>
                        </div>
                    </div>
                </div>
                
            </li>






            <li class="item" 
                v-on:mouseover="UI.MENU.BUSINESS.uClass = 'hover' "
                v-on:mouseleave=" UI.MENU.BUSINESS.uClass = 'default' "
                v-bind:class="UI.MENU.BUSINESS.uClass">
                <div class="wrapper">
                    <div class="item-header">
                        <div class="wrapper">
                            <img src="images/header/gi-header-div.png" style="width: 0.5rem;">
                            <span style="max-width: 5em">LÍNEAS DE NEGOCIO</span>
                        </div>
                    </div>
                    <div class="item-content">
                        
                        <div class="sub-item">
                             <a href="/business#deliz">
                            DELIZ
                             </a>
                        </div>
                        <div class="sub-item">
                             <a href="/business#ready">
                            READY MEALS
                             </a>
                        </div>
                        <div class="sub-item">
                             <a href="/business#startups">
                            START-UPS GASTRONÓMICAS
                             </a>
                        </div>
                    </div>
                </div>
            </li>












            

            <li class="item" 
                v-on:mouseover="UI.MENU.INDUSTRY.uClass = 'hover' "
               v-on:mouseleave=" UI.MENU.INDUSTRY.uClass = 'default' "
               v-bind:class="UI.MENU.INDUSTRY.uClass">
                    <div class="wrapper">
                    <div class="item-header">
                        <div class="wrapper">
                            <img src="images/header/gi-header-div.png" style="width: 0.5rem;">
                            <span style="max-width: 5em">INFORMACIÓN FINANCIERA</span>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="sub-item">
                            <a href="/industry#size">
                            TAMAÑO DEL MERCADO
                            </a>
                        </div>
                        <div class="sub-item">
                            <a href="/industry#evolution">
                            EVOLUCIÓN DEL MERCADO
                            </a>
                        </div>
                        <div class="sub-item">
                            <a href="/industry#proyection">
                            PROYECCIONES DEL MERCADO
                            </a>
                        </div>
                    </div>
                    </div>
            </li>





            

            <li class="item" 
                v-bind:class="UI.MENU.CLIENTS.uClass">

                <div class="wrapper">
                     <div class="item-header">
                        <div class="wrapper"> 
                            <img src="images/header/gi-header-div.png" style="width: 0.5rem;">
                                <a href="/clients">
                            <span>CLIENTES</span>
                                </a>
                        </div>
                    </div>
                </div>

            </li>

            <li class="item" 
                v-bind:class="UI.MENU.CONTACT.uClass">

                <div class="wrapper">
                     <div class="item-header">
                        <div class="wrapper">
                            <img src="images/header/gi-header-div.png" style="width: 0.5rem;">
                            <a href="/contact">
                            <span>CONTACTO</span>
                            </a>
                        </div>
                    </div>
                </div>

            </li>


        </ul>
    </div>
</div>



<div class="mobile">
    <div class="wrapper" >
            <a href="/">
                <img class="logo" src="images/header/gi-header-logo.png">
            </a>
            <a v-on:click="toogleMenuMobile()" style="height:auto">
                    <button 
                    class="hamburger" 
                    type="button" 
                    style="float: right;margin: 0.5em;" 
                    v-bind:class="UI.MENU.MOBILE.uClass"
                    >
                            <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                            </span>
                          </button>
            </a>
            <ul class="menu" v-if="this.UI.MENU.MOBILE != ''" v-bind:style="[this.UI.MENU.MOBILE != '' ? {'display': 'block'} : {'display': 'none'}]" style="width:100vw">
                    <li class="item"><a href="/about">NOSOTROS</a></li>
                    <li class="item"><a href="/business">LINEAS DE NEGOCIOS</a></li>
                    <li class="item"><a href="/industry">INFORMACIÒN FINANCIERA</a></li>
                    <li class="item"><a href="/clients">CLIENTES</a></li>
                    <li class="item"><a href="/contact">CONTACTO</a></li>
            </ul>
        </div>
</div>
    
