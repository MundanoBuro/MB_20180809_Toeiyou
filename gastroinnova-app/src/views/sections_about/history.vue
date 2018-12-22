<script>


export default {

  data(){
    return{
      timeline: [
        { type: 'content',
          year: 2015,
          color: 'green',
          iconSrc: '/img/timeline/date1.png',
          text: 'Gastroinnova SAS nace a finales de 2015 dedicada a la fabricación de comidas preparadas (Ready Meals), empacadas al vacío y pasteurizadas para conservar su frescura y sabor hasta por (90) días en refrigeración, utilizando tecnología MICVAC.' 
        },{
          type: 'middle',
          iconSrc: '/img/timeline/div1.png'
        },
        
        
        {type: 'content',
          color: 'orange',
          year: 2016,
          iconSrc: '/img/timeline/date2.png',
          text: 'En Mayo de 2016 Gastroinnova Internacional adquiere el 100% del capital accionario de Gastroinnova SAS.' 
        },{
          type: 'content',
          color: 'orange',
          iconSrc: '/img/timeline/date3.jpeg',
          text: 'En julio 2016 se traslada la operación a la zona franca de Intexzona, con una capacidad instalada de hasta 8.000 uds diarias, con 2 turnos.' 
        },{
          type: 'content',
          color: 'orange',
          iconSrc: '/img/timeline/date4.png',
          text: 'Desde mediados de 2016 se inicia el desarrollo del proyecto DELIZ destinado a convertirse en el de mayor impacto en la empresa 2017.' 
        },{
          type: 'middle',
          iconSrc: '/img/timeline/div2.png'
        },
        
        
        
        {
          type: 'content',
          color: 'red',
          year: 2017,
          iconSrc: '/img/timeline/date5.png',
          text: 'En diciembre 2017 se inaugura el primer local de comida DELIZ. A la fecha existen 7 restaurantes en operación y 3 en proceso de apertura.' 
        },{
          type: 'middle',
          iconSrc: '/img/timeline/div3.png'
        },
        
        { type: 'content',
          year: 2018,
          color: 'yellow',
          iconSrc: '/img/timeline/date6.png',
          text: 'En 2018 comercializamos 12 recetas y contamos con 22 recetas con registro INVIMA. También este año se inicia una tercera línea de negocios con la negociación de las marcas Bukara y Smoky Monkey, primeras 2 iniciativas del proyecto de Start-Ups Gastronómicas.' 
        },{
          type: 'middle',
          iconSrc: '/img/timeline/div4.png'
        },


      ]
    }
  }
}
</script>
<template>
  <div id="about-history" class="timeline-list">
    

    
    <div class="timeline-item" v-for="item in timeline">
      <div v-if="item.type=='content'" class="row">
          <div class="col date" :class="item.color"> 
            {{ item.year }}
          </div>
          <div class="col icon logo"> <img :src="item.iconSrc"> </div>
          <div class="col text" style="flex-grow: 1;"> {{ item.text}} </div>
      </div>
      <div v-if="item.type=='middle'" class="row">
          <div class="col icon div"> <img :src="item.iconSrc"> </div>
      </div>
    </div>



  </div>
</template>

<style lang="less" scoped>
.row{
  padding: 0px;
  margin: 0px;
}
.col{
  flex-grow: 0;
  margin: 0px;
  padding: 0px;
  &:last-child{
    flex-grow: 0;
  }
}
.date{
      min-width: 6.25em;
  width: 8em;
  padding: 2em;
  color: white;
}

.text{
  width: 5em;
  font-size: 0.9em;
  text-align: left;
  padding: 1em;
}



.green{background-color:#8BC53F;}
.orange{background-color:#E5520F;}
.red{background-color:#961934;}
.yellow{background-color: #FFB90F;}

.icon{

  &.logo{
  img{
    padding: 1em;
  margin: 0em;
  width: 6.25em;
  }
  }
  &.div{
  img{
    padding: 0em;
  margin: 0em;
  width: 6.25em;
  }
  }

}
</style>
