<script>
/**
 *  ----------------------------------------------------
 *  -- TokPet's Component : @view/index.component.vue --
 *  ----------------------------------------------------
 *
 *
 */

// ----------------------------------------------- //
// -- Import's ----------------------------------- //
// ----------------------------------------------- //

// Imports :: Libs & Vendors
import { page } from 'vue-analytics'

// Imports :: Shared Components
import vHeader from "./components/header"
import vFooter from "./components/footer"
import vLoading from "./components/loading"

// ----------------------------------------------- //

// ----------------------------------------------- //
// -- Export default component :: App.vue ------ //
// ----------------------------------------------- //
export default {

  // Component's Name
  name: 'app',

  // Component's Childs
  components: {
    vHeader,
    vFooter,
    vLoading
  },

  // Component's Methods
  methods: {

    /**
     * Method :: track()
     */
    track () {
      page('/')
    }

  },

  // Component's created function.
  created () {

  },

  // Component's Attributes or data object.
  data () {
    return {}
  }
}
// ----------------------------------------------- //
</script>

<template>
  <div id="app">

    <v-loading/>

    <v-header/>
    <router-view/>
    <v-footer/>
    
  </div>
</template>

<style lang="less">
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;


}
#nav {
  padding: 30px;
  a {
    font-weight: bold;
    color: #2c3e50;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}

html,body{
  
      ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 0px;
    }
    ::-webkit-scrollbar-thumb {
        border-radius: 0px;
        background-color: rgba(0,0,0,.5);
        -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
    }
}
</style>
