<script>
export default {
  name: 'vClients',

  // Component's created function.
  created () {
   
  },

  // Component's Attributes or data object.
  data () {
    return{
      bannerSrc: 'img/clients/banner.png',
      clients: [
        {
          id: 0,
          src: 'img/clients/client1.png'
        },
        {
          id: 1,
          src: 'img/clients/client2.png'
        },
        {
          id: 2,
          src: 'img/clients/client3.png'
        },
        {
          id: 3,
          src: 'img/clients/client4.png'
        },
        {
          id: 4,
          src: 'img/clients/client5.png'
        },
      ]
    }
  }
}
</script>

<template>
  <div class="about">
    
    <img class="banner" :src="bannerSrc">

    <section>
        <img v-for="item in clients" v-bind:key="item.id" v-bind:src="item.src">
    </section>

  </div>
</template>

<style lang="less" scoped>

section {

    display: block;
    max-width: 1200px;
    width: 100%;

    margin: 0 auto;

    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
    img{
      width: 33.3333%;
    }
}
</style>
