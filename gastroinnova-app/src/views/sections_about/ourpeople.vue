<script>
export default {

  data(){
    return{

    }
  }
}
</script>

<template>
  <div id="about-ourpeople" class="about">
    
    <img class="logo" src="../../assets/logo.png">

    <div class="people-orientador-general">
      <div class="position">Orientador General</div>
      <div class="name">Rafael Hernández Mujica</div>
    </div>

    <div class="people-orientadores">

      <div class="people-orientador">
        <div class="position">Orientador de Planeación y Desarrollo</div>
        <div class="name">Božo Pavic</div>
      </div>

      <div class="people-orientador">
        <div class="position">Orientador de Expansión</div>
        <div class="name">Mónica Calderón</div>
      </div>

      <div class="people-orientador">
        <div class="position">Orientador Financiero y Administrativo</div>
        <div class="name">Mauricio Orozco</div>
      </div>
    
    </div>

  </div>
</template>


<style lang="less" scoped>

.logo{
  width: 25vw;
  max-width: 150px;
  display: block;
  margin: 2em auto;
}

.position{    
    color: #961934;
    font-size: 1em;
    font-weight: 600;
    text-align: center;
}
.name{    
    color: #8BC53F;
    font-size: 1em;
    text-decoration: underline;
}

.people-orientador-general{
  margin-bottom: 2.5em;
}
.people-orientadores{
  display: block;
  .people-orientador{
    display: inline-block;
    margin: 0em 1em;
    .position{
width: 12em;
    vertical-align: -webkit-baseline-middle;
    }
  }
}
</style>
