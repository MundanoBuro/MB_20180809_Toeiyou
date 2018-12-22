<template>
  <div class="home">

      <v-slider/> 

      <div class="row">
        <div class="col">
          <v-cover/>   
        </div>
        <div class="col">
          <v-news/>
        </div>
      </div>

  </div>
</template>

<script>
// @ is an alias to /src
import vNews from './../components/news'
import vCover from './../components/cover'
import vSlider from './../components/slider'

export default {
  name: 'home',
  components: {
    vCover,
    vNews,
    vSlider
  },
  data() {
      return {
      }
    }
}
</script>


<style scoped lang="less">
.row{
    width: 100%;
    max-width: 1200px;
    display: block;
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
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;

}
.col{
  width: 50%;

  padding: 0px;
  margin: 0px;

   display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
}


</style>