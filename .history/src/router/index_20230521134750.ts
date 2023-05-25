import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import HomeView from '../views/HomePage.vue'
import newdetail from '../views/NewDetail.vue'
const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/homepage',
    name: 'homepage',
    component: () => import('../views/HomePage.vue')
  },
   {
    path:'/newdetail/:newid',
    name:'newdetail',
    component: newdetail
   },
   {
    path:'/testdetail:id',
    name:'testdetail',
    component: () => import('../views/TestDetail.vue') 
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
