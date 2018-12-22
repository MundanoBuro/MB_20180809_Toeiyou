<template>
    <div class="cover">
        <router-link to="/business">
            <img :src="imgSrc">
            <div class="title">
                <img src="img/cover/div.png">
                <h1>{{ coverTitle }}</h1>
            </div>
        </router-link>               
    </div>
</template>

<script>
export default {
  name: 'vCover',

  // Component's created function.
  created () {
   
  },

  // Component's Attributes or data object.
  data () {
    return {
      imgSrc : "img/cover/cover1.jpg",
      coverTitle : "DELIZ"
    }
  }
}
</script>

<style scoped lang="less">
ul{
  list-style: none outside none;
}
.cover{
  width: 100%;
  box-sizing: border-box;
  padding: 1em;
  padding-right: 0em;
  img{
    width: 100%;
  }
}

.title{
      background-color: green;

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
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
  img{
    width: 1.75em;
    padding: 0.5em;
    display: inline-block;
  }
  h1{

    display: inline-block;
    color:white;

    margin: 0px;
    padding: 10px 0px;

    font-size: 14px;
  }
}
</style>