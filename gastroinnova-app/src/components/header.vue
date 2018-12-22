<template>
  <div class="header-component">
  <div class="desktop">
    <header>
      <div class="wrapper">
        
        <router-link to="/">
          <img class="logo" src="./../assets/header/gi-header-logo.png">
        </router-link>
        
        <ul class="pages">

          <li   v-bind:class="{ hover: MENU.about }"
                @mouseenter="setMenuHover('about',true)" 
                @mouseleave="setMenuHover('about',false)">

            <div class="link-title">
              <img src="../assets/header/gi-header-div.png">
              <router-link to="/about">NOSOTROS</router-link>
              </div>
            <div class="link-sublinks">
              <div class="link-sublink"><router-link to="/about/mission">MISIÓN Y VISIÓN</router-link></div>
              <div class="link-sublink"><router-link to="/about/history">HISTORIA</router-link></div>
              <div class="link-sublink"><router-link to="/about/ourpeople">NUESTRA GENTE</router-link></div>
            </div>
          </li>

          <li  v-bind:class="{ hover: MENU.business }"
                @mouseenter="setMenuHover('business',true)" 
                @mouseleave="setMenuHover('business',false)">
            <div class="link-title">
              <img src="../assets/header/gi-header-div.png">
              <router-link to="/business">LÍNEAS DE NEGOCIO</router-link>
              </div>
            <div class="link-sublinks">
              <div class="link-sublink">DELIZ</div>
              <div class="link-sublink">READY MEALS</div>
              <div class="link-sublink">START-UPS GASTRONÓMICAS</div>
            </div>
          </li>

          <li   v-bind:class="{ hover: MENU.info }"
                @mouseenter="setMenuHover('info',true)" 
                @mouseleave="setMenuHover('info',false)">
            <div class="link-title">
              <img src="../assets/header/gi-header-div.png">
              <router-link to="/info">INFORMACIÓN FINANCIERA</router-link>
              </div>
            <div class="link-sublinks">
              <div class="link-sublink">TAMAÑO DEL MERCADO</div>
              <div class="link-sublink">EVOLUCIÓN DEL MERCADO</div>
              <div class="link-sublink">PROYECCIONES DEL MERCADO</div>
            </div>
          </li>

          <li   v-bind:class="{ hover: MENU.clients }"
                @mouseenter="setMenuHover('clients',true)" 
                @mouseleave="setMenuHover('clients',false)">
            <div class="link-title">
              <img src="../assets/header/gi-header-div.png">
              <router-link to="/clients">CLIENTES</router-link>
              </div>
          </li>

          <li   v-bind:class="{ hover: MENU.contact }"
                @mouseenter="setMenuHover('contact',true)" 
                @mouseleave="setMenuHover('contact',false)">
            <div class="link-title">
              <img src="../assets/header/gi-header-div.png">
              <router-link to="/contact">CONTACTO</router-link>
              </div>
          </li>

        </ul>

      </div>
    </header>
  </div>

  <div class="mobile">
    <header>
      
      <router-link to="/">
        <img class="logo" src="./../assets/header/gi-header-logo.png">
      </router-link>


    </header>
  </div>

  </div>
</template>

<script>
export default {
  name: 'vHeader',
  methods:{
    setMenuHover(tag,state){
      this.MENU[tag] = state;
    }
  },
  data(){
    return{
      MENU:{
        about: false,
        business: false,
        info: false,
        clients: false,
        contact: false
      }
    }
  }
}
</script>

<style scoped lang="less">
.mobile{
  .logo{
    width: 4em;
    padding: 0.5em;
  }
}
.desktop{
    a {
          text-decoration:none !important;
      }
    header{
      display: block;
      height: 64.625px;

      z-index: 200;

      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
      justify-content: space-between;
      -webkit-align-content: center;
      -ms-flex-line-pack: center;
      align-content: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;

      border-bottom: 1px solid green;

    }
    header .wrapper{

      width: 100%;
      max-width: 1200px;
      height: 44.625px;
      margin: 0 auto;
      padding: 10px auto;

      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-flex-direction: row;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
      justify-content: space-between;
      -webkit-align-content: center;
      -ms-flex-line-pack: center;
      align-content: center;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;

      img.logo{
        width: 80px;
        padding: 10px;
      }

      ul.pages{
        display: inline-block;
        vertical-align: middle;
        margin-top: 0;
        margin-bottom: 0px;
        li{
          max-width: 10em;
          display: inline-block;
          vertical-align: middle;
        }
      }

    }
    header ul.pages {
      z-index: 100;
    }
    header ul.pages li{
      display: block;
      height: 64.625px;
      width: fit-content;
      min-width: 10em;;
      .link-title{
        position: relative;
        display: block;
        height: 64.625px;
      
        background-color: white;
        z-index: 200;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-content: center;
        -ms-flex-line-pack: center;
        align-content: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        a{
            max-width: 8em;
        }
        a{color: black;}
        img{
          width: 10px;
          box-sizing: content-box;
          padding-right:10px;
        }

      }
      .link-sublinks{
        z-index: 100;
        position: relative;
        display: block;
        top: -20em;
        left: 1em;
        .link-sublink{
          background-color: white;
          padding: 1em 0.5em;
          &:hover{
            background-color: orange;
            text-decoration: none;
            a{color: white;}
          }
          a{
            color: black;
          }
        }
      }
    }
    header ul.pages li.hover{
      .link-sublinks{
        top: 0em;
      }
    }
}

@media (min-width: 600px) {}
</style>
