import { createRouter, createWebHistory } from 'vue-router'
import Agrisync from '../views/Agrisync.vue'
import about from '../views/About.vue'
import Contact from '../views/Contact.vue'
import Login from '../views/Login.vue'
import User from '../views/User.vue'
const routes = [
  {
    path: '/',
    name: 'Agrisync',
    component: Agrisync
  },
  {
    path: '/About',
    name: 'About',
    component: about
  },
  {
    path: '/Contact',
    name: 'Contact',
    component: Contact
  },
  {
    path: '/Login',
    name: 'Login',
    component: Login
  },
  {
    path: '/User',
    name: 'User',
    component: User
  },
]
  const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes

})

export default router
