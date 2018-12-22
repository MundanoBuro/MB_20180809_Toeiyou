import Vue from 'vue'
import Router from 'vue-router'

import Admin from './views/Admin.vue'

import Home from './views/Home.vue'

import About from './views/About.vue'

import Business from './views/Business.vue'
import Info from './views/Info.vue'
import Clients from './views/Clients.vue'
import Contact from './views/Contact.vue'

import Terms from './views/Terms.vue'
import Policy from './views/Policy.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },{
      path: '/about',
      name: 'about',
      component: About,
      props: { scrollToId: '' }
    },{
      path: '/about/mission',
      name: 'about/mission',
      component: About,
      props: { scrollToId: 'mission' }
    },{
      path: '/about/history',
      name: 'about/history',
      component: About,
      props: { scrollToId: 'history' }
    },{
      path: '/about/ourpeople',
      name: 'about/ourpeople',
      component: About,
      props: { scrollToId: 'ourpeople' }
    },{
      path: '/business',
      name: 'business',
      component: Business
    },{
      path: '/info',
      name: 'info',
      component: Info
    },
    {
      path: '/clients',
      name: 'clients',
      component: Clients
    },{
      path: '/contact',
      name: 'contact',
      component: Contact
    },{
      path: '/terms',
      name: 'terms',
      component: Contact
    },{
      path: '/policy',
      name: 'policy',
      component: Contact
    },{
      path: '/admin',
      name: 'admin',
      component: Admin
    }
  ]
})
