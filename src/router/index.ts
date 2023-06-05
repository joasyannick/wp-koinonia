import { createRouter, createWebHistory } from 'vue-router'
import BlogView from '../views/BlogView.vue'
import BioView from '../views/BioView.vue'
import HelikiaView from '../views/HelikiaView.vue'
import SynergiaView from '../views/SynergiaView.vue'
import HesychiaView from '../views/HesychiaView.vue'
import ContactView from '../views/ContactView.vue'



const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'blog',
      component: BlogView
    },
    {
      path: '/bio',
      name: 'bio',
      component: BioView
    }
    ,
    {
      path: '/helikia',
      name: 'helikia',
      component: HelikiaView
    }
    ,
    {
      path: '/synergia',
      name: 'synergia',
      component: SynergiaView
    }
    ,
    {
      path: '/hesychia',
      name: 'hesychia',
      component: HesychiaView
    }
    ,
    {
      path: '/contact',
      name: 'contact',
      component: ContactView
    }
  ]
})

export default router
