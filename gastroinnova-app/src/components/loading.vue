<template>
  <div class="loading" v-if="LOADING">
      <img src="../assets/loading/loading.gif">
  </div>
</template>

<script>
export default {
  name: 'vLoading',

  // Component's created function.
  created () {
      setTimeout( () => {
        this.LOADING = false
      },2500);
  },

  // Component's Attributes or data object.
  data () {
    return {
        LOADING: true
    }
  }
}
</script>

<style scoped lang="less">
.loading{
    
    img{
        width: 10vw;
    }

    display: block;
    
    width: 100vw;
    height: 100vh;

    background-color: white;

    position: fixed;
    top: 0px;

    z-index: 1000000;

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