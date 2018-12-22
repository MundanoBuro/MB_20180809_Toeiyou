<template>
  <div id="about-mission" class="mission">
    
    <div class="col">
      <img :src="'/img/about/mission1.jpg'">
      <img :src="'/img/about/mission2.png'">
      <img :src="'/img/about/mission3.jpg'">
    </div>
    <div class="col">
      <h2>MISIÓN</h2>
      <p>Somos una compañía enfocada en la producción, distribución y comercialización de alimentos saludables, listos para el consumo, fabricados con procesos innovadores y de alta calidad.</p>
      <h2>VISIÓN</h2>
      <p>Ser la compañía líder en el sector Gastronómico - Food Services en Colombia, con la creación de un portafolio de negocios que abarca la fabricación y venta de los productos preparados listos para consumir, la cadena más importante de restaurantes de alta calidad y bajo costo y el apoyo de proyectos Gastronómicos independientes.</p>
    </div>
    <div class="col flexbox-center">
      <p class="border-left-red">Somos una compañía en proceso de crecimiento sostenible y rentable, soportado en un modelo que mejora la calidad de vida de los consumidores.</p>
    </div>

  </div>
</template>

<style lang="less" scoped>
.mission{
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-align-content: stretch;
    -ms-flex-line-pack: stretch;
    align-content: stretch;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
}

.col{

      padding-right: 0px;
    padding-left: 0px;
  display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: nowrap;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-align-content: stretch;
    -ms-flex-line-pack: stretch;
    align-content: stretch;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;

        flex-grow: 0;

        &:nth-child(2),&:nth-child(3){
              flex-grow: 1;
              height: 25em;;
        }
  img{
       width: 8em;
    padding: 1em;
    padding-left: 0em;
    padding-bottom: 0em;
    box-sizing: content-box;
  }
}

.col h2{
      color: #961934;
    font-size: 1.25em;
    padding: 0.7em 0em 1em 0em;
    margin: 0px;
}

.col p {
 font-size: 14px;
 line-height: 20px;
 text-align: left;
 font-weight: 400;
}


.border-left-red{
 box-sizing: border-box;
 width: 100%;
 padding: 1em;
 margin: 1em;
 border-left:1px solid  #961934;
}

.flexbox-center{

  display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
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
}
</style>
