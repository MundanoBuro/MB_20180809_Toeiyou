
    <div class="wrapper">
        <img class="logo" src="images/header/gi-header-logo.png">
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
                            MISIÓN Y VISIÓN
                        </div>
                        <div class="sub-item">
                                HISTORIA
                        </div>
                        <div class="sub-item">
                                NUESTRA GENTE
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
                            DELIZ
                        </div>
                        <div class="sub-item">
                            READY MEALS
                        </div>
                        <div class="sub-item">
                            START-UPS GASTRONÓMICAS
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
                            <span>CLIENTES</span>
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
