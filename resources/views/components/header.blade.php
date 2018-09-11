
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
                            <img src="images/header/gi-header-div.png">
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
                            <img src="images/header/gi-header-div.png">
                            <span>LINEAS DE NEGOCIO</span>
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
                            <img src="images/header/gi-header-div.png">
                            <span>INFORMACIÓN FINENCIERA</span>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="sub-item">
                            TAMAÑO DEL MERCADO
                        </div>
                        <div class="sub-item">
                            EVOLUCIÓN DEL MERCADO
                        </div>
                        <div class="sub-item">
                            PROYECCIONES DEL MERCADO
                        </div>
                    </div>
                    </div>
            </li>

            <li class="item" 
                v-on:mouseover="UI.MENU.CLIENTS.uClass = 'hover' "
                v-on:mouseleaver="UI.MENU.CLIENTS.uClass = 'default' "
                v-bind:class="UI.MENU.CLIENTS.uClass">

                <div class="wrapper">
                     <div class="item-header">
                        <div class="wrapper">
                            <img src="images/header/gi-header-div.png">
                                <a href="/clients">
                            <span>CLIENTES</span>
                                </a>
                        </div>
                    </div>
                </div>

            </li>

            <li class="item" 
               v-on:mouseover="UI.MENU.CONTACT.uClass = 'hover' "
                v-on:mouseleave="UI.MENU.CONTACT.uClass = 'default' "
                v-bind:class="UI.MENU.CONTACT.uClass">

                <div class="wrapper">
                     <div class="item-header">
                        <div class="wrapper">
                            <img src="images/header/gi-header-div.png">
                            <span>CONTACTO</span>
                        </div>
                    </div>
                </div>

            </li>


        </ul>
    </div>
