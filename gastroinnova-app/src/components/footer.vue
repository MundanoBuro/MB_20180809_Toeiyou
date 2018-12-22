<template>
  <footer>
      <div class="row">
        <div class="wrapper">
          <router-link to="/terms">TERMINOS</router-link>
          <router-link to="/policy">POLÍTICAS DE DATOS</router-link>
        </div>
      </div>
      <div class="row">
        <div class="wrapper">
        © {{ year }} Gastroinnova.Todos los derechos reservados. Desarrollado por www.mundanoburo.com
      </div>
      </div>
  </footer>
</template>

<script>
export default {
  name: 'vFooter',
  data(){
    return{
      year : (new Date()).getFullYear()
    }
  }
}
</script>

<style scoped lang="less">
footer{
  color: white;
  a{
    color: white;
  }
}
.row{
  margin: 0px;
  padding: 0px;
        background-color: #343a40;

.wrapper{
  width: 70%;
margin: 0 auto;
padding: 1em 0px;
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
}
    &:last-child {
       background-color: #323232;
       .wrapper{
          -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content:center;
       
    }
    }
}
</style>
