<template>
    <div class="slider">

    <!-- swiper -->
      <swiper :options="swiperOption">

        <swiper-slide v-for="image in images" v-bind:key="image.url">
          <img :src="image.url" 
               :alt="image.alt">
        </swiper-slide>
        
        <div class="swiper-pagination" slot="pagination"></div>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>

      </swiper>

    </div>
</template>

<script>
export default {
  name: 'vSlider',

  // Component's created function.
  created () {
   
  },

  // Component's Attributes or data object.
  data () {
    return {
        images:[
          {
            url : 'img/slider/slide1-min.jpg',
            alt : 'Slider'
          },
          {
            url : 'img/slider/slide2-min.jpg',
            alt : 'Slider'
          },
          {
            url : 'img/slider/slide3-min.jpg',
            alt : 'Slider'
          },
          {
            url : 'img/slider/slide4-min.jpg',
            alt : 'Slider'
          },
          {
            url : 'img/slider/slide5-min.jpg',
            alt : 'Slider'
          },
          {
            url : 'img/slider/slide6-min.jpg',
            alt : 'Slider'
          }
        ],
        swiperOption: {
          pagination: {
            el: '.swiper-pagination'
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          }
        }
    }
  }
}
</script>

<style scoped lang="less">
.swiper-slide {
    width: 100vw;
    height: 70vh;
}
img{
  width: 100%;
  object-fit: cover;
  object-position: 50% 50%;
}
</style>