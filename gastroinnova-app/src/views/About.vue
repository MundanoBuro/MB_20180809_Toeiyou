<script>

import VueScrollTo from 'vue-scrollto';

import vMission from '../views/sections_about/mission'
import vHistory from '../views/sections_about/history'
import vOurPeople from '../views/sections_about/ourpeople'


export default {
  name: 'vAbout',

  props:{
    scrollToId: String
  },

  components:{
    vMission,
    vHistory,
    vOurPeople
  },

  // Component's created function.
  mounted () {
    this.updateScrollToId();
  },

  methods: {

    updateScrollToId(){
       if(this.scrollToId == 'mission'){
          this.sections[0].hover = true;
          setTimeout( () => {VueScrollTo.scrollTo('#about-mission');},500);
        }else{
          this.sections[0].hover = false;
        }
        if(this.scrollToId == 'history'){
          this.sections[0].hover = true;
          this.sections[1].hover = true;
          setTimeout( () => {VueScrollTo.scrollTo('#about-history');},500);
        }else{
          this.sections[1].hover = false;
        }
        if(this.scrollToId == 'ourpeople'){
          this.sections[0].hover = true;
          this.sections[1].hover = true;
          this.sections[2].hover = true;
          setTimeout( () => {VueScrollTo.scrollTo('#about-ourpeople');},500);
        }else{
          this.sections[2].hover = false;
        }
    }

  },


  watch: { 
      	scrollToId: function(newVal, oldVal) { // watch it
          this.updateScrollToId();
        }
  },

  // Component's Attributes or data object.
  data () {
    return{
      bannerSrc: '/img/about/banner.png',
      sections: [
        {
          id: 0,
          hover: false,
          title: 'Misión y Visión',
          content: vMission
        },{
          id: 1,
          hover : false,
          title: 'Historia',
          content: vHistory
        },{
          id: 2,
          hover: false,
          title: 'Nuestra Gente',
          content: vOurPeople
        },
      ]
    }
  }
}
</script>

<template>
  <div class="about">
    
    <img class="banner" :src="bannerSrc">

    <section v-for="item in sections" v-bind:key="item.id">
      <div class="title-block" @click="item.hover = !item.hover" v-bind:class="{ active: item.hover }">
        <img src="../assets/gi-cards-div.png" class="title-block-div-green">
        <img src="../assets/gi-cards-div-y.png" class="title-block-div-yellow">
        <h3>{{ item.title }}</h3>
      </div>
      <div class="title-content">
        <div v-if="item.hover">
          <component :is="item.content" :data="item.content" v-if="item.content"/>
        </div>
      </div>
    </section>

  </div>
</template>

<style lang="less" scoped>

.banner{
  margin-bottom: 2em;
  width: 100vw;
}
section{

  max-width: 1200px;
  width: 100%;
  margin: 0 auto;

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

 

  .title-block{
    background-color: orange;
    width: calc(30% - 1em);
    padding-bottom: 1em;
    color: white;

    margin-bottom: 1em;
 
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-direction: row;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    flex-direction: row;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -ms-flex-pack: start;
    -webkit-box-pack: start;
    justify-content: flex-start;
    -ms-flex-line-pack: center;
    align-content: flex-start;
    -ms-flex-align: center;
    -webkit-box-align: start;
    align-items: flex-start;
    
    img{
      width:1em;
      padding: 1em;
      box-sizing: content-box;
    }
    h3{
      padding: 0px;
      margin: 0px;
      padding: 0.5em;
      font-size: 1.25em;
    }
  }
  .title-content{
    
    display: block;

    width: calc(70% - 1em);
    margin-left: 1em;
  padding-bottom: 1em;
  border-top: 5px solid orange;
  }
}
section{
     &:nth-child(odd){
       .title-block{background-color: green;}
      .title-block-div-green{display: none}
      .title-block-div-yellow{display: block;}
    }
    &:nth-child(even){
       .title-block{background-color: orange;}
      .title-block-div-green{display: block}
      .title-block-div-yellow{display: none;}
    }
}
.title-block{
  cursor: pointer;
  .title-block-div-green,.title-block-div-yellow{
    -webkit-transition: -webkit-transform .258s ease-in-out;
    -ms-transition: -ms-transform .258s ease-in-out;
    transition: transform .258s ease-in-out; 
    
       transform:rotate(0deg);
    -ms-transform:rotate(0deg);
    -webkit-transform:rotate(0deg);
  }
  &.active{
    .title-block-div-green,.title-block-div-yellow{
       transform:rotate(-90deg);
    -ms-transform:rotate(-90deg);
    -webkit-transform:rotate(-90deg);
  }
  }
}



</style>
