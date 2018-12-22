import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import VueAnalytics from 'vue-analytics'
import BootstrapVue from 'bootstrap-vue'
import VueAwesomeSwiper from 'vue-awesome-swiper'


import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'swiper/dist/css/swiper.css'

Vue.use(VueAnalytics, {
  id: 'UA-128950882-1'
})
Vue.use(BootstrapVue);
Vue.use(VueAwesomeSwiper)
Vue.use(require('vue-moment'));


var VueScrollTo = require('vue-scrollto');
var options = {
  container: '#app',
  easing: 'ease-in',
  offset: -60,
  force: true,
  cancelable: true,
  onStart: function(element) {
    // scrolling started
  },
  onDone: function(element) {
    // scrolling is done
  },
  onCancel: function() {
    // scrolling has been interrupted
  },
  x: false,
  y: true
}

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
