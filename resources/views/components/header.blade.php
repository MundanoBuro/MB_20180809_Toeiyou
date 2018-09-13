
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
                            <a href="/about">
                            MISIÓN Y VISIÓN
                            </a>
                        </div>
                        <div class="sub-item">
                             <a href="/about">
                                HISTORIA
                                </a>
                        </div>
                        <div class="sub-item">
                             <a href="/about">
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
                            <span>LÍNEAS DE NEGOCIO</span>
                        </div>
                    </div>
                    <div class="item-content">
                        
                        <div class="sub-item">
                             <a href="/business">
                            DELIZ
                             </a>
                        </div>
                        <div class="sub-item">
                             <a href="/business">
                            READY MEALS
                             </a>
                        </div>
                        <div class="sub-item">
                             <a href="/business">
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
                            <span>INFORMACIÓN FINANCIERA</span>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="sub-item">
                            <a href="/industry">
                            TAMAÑO DEL MERCADO
                            </a>
                        </div>
                        <div class="sub-item">
                            <a href="/industry">
                            EVOLUCIÓN DEL MERCADO
                            </a>
                        </div>
                        <div class="sub-item">
                            <a href="/industry">
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
