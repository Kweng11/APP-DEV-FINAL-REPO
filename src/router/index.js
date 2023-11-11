import { createRouter, createWebHistory } from 'vue-router'
import Agrisync from '../views/about/Agrisync.vue'
import about from '../views/about/About.vue'
import Contact from '../views/about/Contact.vue'
import Login from '../views/Login/Login.vue'
import Dashboard from '../views/Admin/Dashboard.vue'
import Report from '../views/Admin/Report.vue'
import Table from '../views/Admin/Table.vue'
import AdminHome from '../views/Landing/AdminHome.vue'
import Oriental  from '../views/AdminDashboard/Oriental.vue'
import LGULogin from '../views/Login/LGULogin.vue'
import StaffHome from '../views/Landing/StaffHome.vue'
import LGUDashboard from '../views/LGU/LGUDashboard.vue'
import LGUReport from '../views/LGU/LGUReport.vue'
import LGUTable from '../views/LGU/LGUTable.vue'
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
    path: '/Dashboard',
    name: 'Dahboard',
    component: Dashboard
  },
  {
    path: '/Report',
    name: 'Report',
    component: Report
  },
  {
    path: '/Table',
    name: 'Table',
    component: Table
  },
  {
    path: '/AdminHome',
    name: 'AdminHome',
    component: AdminHome
  },
  {
    path: '/Oriental',
    name: 'Oriental',
    component: Oriental
  },
  {
    path: '/LGULogin',
    name: 'LGULogin',
    component:LGULogin
    },
    {
      path: '/StaffHome',
      name: 'StaffHome',
      component:StaffHome
      },
      {
        path: '/LGUDashboard',
        name: 'LGUDashboard',
        component:LGUDashboard
        },
        {
          path: '/LGUReport',
          name: 'LGUReport',
          component:LGUReport
        },
        {
          path: '/LGUTable',
          name: 'LGUTable',
          component:LGUTable
        },
     
   
]
  const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes

})

export default router
