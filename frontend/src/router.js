import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: '/',
  routes: [
    {
      path: '/apidocs',
      redirect: { name: 'home' }
    },
    {
      path: '/apidocs/list',
      name: 'home',
      component: Home
    },
  ]
})
